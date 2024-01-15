<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('galleries.index');
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'page_url' => ['nullable'],
            'file' => ['nullable', 'file', 'mimes:jpeg,png,jpg', 'max:2048']
        ]);
    
        // Handling file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Store the file in the public/uploads directory
            $file->storeAs('uploads', $fileName, 'public');
            
            // Add the file path to the validated data
            $validated['file'] = 'uploads/' . $fileName;
        }
    
        // Create the Gallery instance with validated data
        $gallery = new Gallery($validated);
    
        // Save CKEditor content to the 'description' field
        $gallery->description = $request->input('description');
    
        // Save the Gallery instance to the database
        $gallery->save();
    
        return redirect()->route('galleries.index')->with('success', 'Gallery created successfully');
    }
    
    public function show($id)
{
    $gallery = Gallery::findOrFail($id);

    return view('galleries.show', compact('gallery'));
}

}
