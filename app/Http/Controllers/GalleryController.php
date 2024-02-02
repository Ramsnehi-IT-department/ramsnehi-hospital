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
        $galleries = Gallery::all();

        return view('galleries.index', compact('galleries'));
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
   // Assuming your Gallery model has the 'id' field as the primary key and it's auto-incremented.

    public function store(Request $request)
        {
            $this->validate($request, [
                'page_url' => 'required|string',
                'title' => 'required|string',
                'start_date' => 'required|date',
                'end_date' => 'nullable|date|after_or_equal:start_date',
                'file' => 'required|string', // Assuming file is stored as a string, adjust accordingly
            ]);

            $galleries = new Gallery();
            $galleries->page_url = $request->input('page_url');
            $galleries->title = $request->input('title');
            $galleries->start_date = new \DateTime($request->input('start_date'));
            $galleries->end_date = $request->input('end_date') ? new \DateTime($request->input('end_date')) : null;
            $galleries->file = $request->input('file'); // Adjust accordingly

            $galleries->save();

            return redirect()->route('galleries.index')->with('success', 'File entry has been added successfully.');
        }
    }
