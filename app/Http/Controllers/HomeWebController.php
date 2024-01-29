<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Opening;
use App\Helpers\FileHelpers;
use Illuminate\Validation\Rule;

class HomeWebController extends Controller
{
    public function index()
    {
        return view('frontends.index');
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
            'file_path' => ['required', 'file', 'mimes:jpeg,png,jpg', 'max:2048']
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
        return redirect()->route('frontends.career')->with('success', 'Your Resume submit successfully');
    }
}
