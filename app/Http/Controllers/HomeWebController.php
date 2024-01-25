<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Career;
use App\Models\Opening;
use App\Helpers\FileHelpers;


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
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string',
            'image' => 'required|image|mimes:pdf,doc,docx|max:2048', // Validate file type and size
        ]);
     // Handling image upload
     if ($request->hasFile('image')) {
        // Get the file path from the FileHelper
        $imagePath = FileHelpers::fileUpdate($request);
        // Add the file path to the validated data
        $validated['image'] = $imagePath;
    }
    
       
        // Create the user with validated data
        Career::create($validated);
    
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }
    
}