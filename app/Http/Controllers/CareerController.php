<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Opening;
use Illuminate\Http\Request;
use App\Helpers\FileHelpers;



class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('careers.index');
    }

   
    public function view()
    {
        // Define the application printer dynamically based on certain conditions
        $applicationPrinter = $this->getApplicationPrinter();

        // Fetch careers data
        $careers = Career::all();

        // Pass the application printer variable and careers data to the Blade view
        return view('careers.indexApplication', compact('applicationPrinter', 'careers'));
    }

    private function getApplicationPrinter()
    {
        // Your logic to determine the application printer dynamically
        // For example, you can retrieve it from the database, or based on user settings
        return 'Order'; // Example value, replace this with your actual logic
    }

    
    public function getResume()
        {
            // Fetch positions with active status from the database
            $openings = Opening::where('status', 1)->get();

            // Pass positions to the Blade view
            return view('frontends.career', ['openings' => $openings]);
        }

        public function submitResume(Request $request)
        {
            // Validate the form data
            $validated = $request->validate([
                'opening_id' => 'required|exists:openings,id', // Validate that opening_id exists in the openings table
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'contact' => ['required', 'string'],
                'file_path' => ['required', 'file', 'mimes:jpeg,png,jpg,pdf', 'max:2048']
            ]);
            

        // Handling file_path upload
        if ($request->hasFile('file_path')) {
            // Get the file path from the FileHelper
            $file_path = FileHelpers::fileUpdate($request);
            // Add the file path to the validated data
            $validated['file_path'] = $file_path;
        }
        
        // Create the user with validated data
        Career::create($validated);

        // Fetch careers data for the view
        $careers = Career::all();

        // return redirect()->route('frontends.career')->with('success', 'Your Resume submitted successfully');
        return view('frontends.career', ['careers' => $careers])->with('success', 'Your Resume submitted successfully');

        }
    }
