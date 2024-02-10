<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Opening;
use Illuminate\Http\Request;

class OpeningController extends Controller
{
    // Display the form for creating a new opening
    public function index()
    {
        $openings = Opening::all();

        return view('careers.indexOpening', compact('openings'));
    }

    public function create()
    {
        return view('openings.create');
    }

    // Store a newly created opening in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);

        Opening::create($validatedData);

        return redirect()->route('openings.index')->with('success', 'Opening created successfully');
    }

    // Show the form for editing an existing opening
    public function edit($id)
    {
        // Retrieve the opening by ID and pass it to the view
        $opening = Opening::findOrFail($id);
        return view('openings.create', compact('opening'));
    }

    // Update the specified opening in the database
    public function update(Request $request, Opening $opening)
    {
        // Validate the request data as needed
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);

        // Update the opening with the new data
        $opening->update([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
        ]);

        // Redirect back or wherever you need
        return redirect()->route('openings.index');
    }
    public function changeStatus(Request $request)
    {
        $openings = Opening::find($request->id);
        $openings->status = $request->status;
        $openings->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    
    
}
