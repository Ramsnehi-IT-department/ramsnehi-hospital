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

    public function opening()
    {
        $openings = Opening::all();

        return view('careers.opening', compact('openings'));
    }

    /**
     * Show the form for createOpening a new resource.
    */
    public function createOpening()
    {
        return view('careers.opening');
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
