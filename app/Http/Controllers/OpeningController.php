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

        return view('openings.index', compact('openings'));
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
            'status' => 'required|boolean',
        ]);

        Opening::create($validatedData);

        return redirect()->route('openings.index')->with('success', 'Opening created successfully');
    }

    // Show the form for editing an existing opening
    public function edit(Opening $opening)
    {
        return view('openings.create', compact('opening'));
    }

    // Update the specified opening in the database
    public function update(Request $request, Opening $opening)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'status' => 'required|boolean',
        ]);

        $opening->update($validatedData);

        return redirect()->route('openings.index')->with('success', 'Opening updated successfully');
    }

    public function updateStatus(Request $request, Opening $opening)
    {
        $request->validate([
            'status' => 'required|boolean',
        ]);

        $opening->update([
            'status' => $request->input('status'),
        ]);

        return response()->json(['message' => 'Status updated successfully']);
    }
}
