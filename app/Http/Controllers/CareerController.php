<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Opening;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('careers.index');
    }

    /**
     * Show the form for createOpening a new resource.
    */
    public function createOpening()
    {
        return view('careers.addOpening');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function storeOpening(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'sub_title' => ['required', 'string', 'max:255'],
        ]);
    
        // Create the user with validated data
        Opening::create($validated);
    
        return redirect()->route('careers.index')->with('success', 'Opening created successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createPublish ()
    {
        $openings =Opening::all();

        return view('careers.addPublish', compact('openings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function processPublish(Request $request)
    {
        $selectedVacancies = $request->input('openings', []);

        // Assuming your Opening model has a category_id column
        $openings = Opening::whereIn('category_id', $selectedVacancies)->get();

        return view('openings', compact('openings'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
