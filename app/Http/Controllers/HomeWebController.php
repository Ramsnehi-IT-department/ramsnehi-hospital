<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeWebController extends Controller
{
    public function index()
    {
        return view('frontends.index');
    }

    public function about()
    {   
        $galleries = Gallery::orderBy('created_at', 'asc')->get();

        return view('frontends.about', compact('galleries'));    
    }
 
}
