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

    // public function about()
    // {   
    //     $galleries = Gallery::orderBy('created_at', 'asc')->get();

    //     return view('frontends.about', compact('galleries'));    
    // }

    public function about()
    {  
        $currentUrl = url()->current();
    
        // Check if the current URL contains 'visionMission'
        if (strpos($currentUrl, 'about') !== false) {
            // Filter galleries related to 'visionMission'
            $galleries = Gallery::where('page_url', '/about')->orderBy('created_at', 'asc')->get();
            // dd($galleries);
            return view('frontends.about', compact('galleries'));    
        }
    
        // // Handle other cases or redirect as needed
        // return view('frontends.about', compact('galleries'));    
    }

    public function visionMission()
{  
    $currentUrl = url()->current();

    // Check if the current URL contains 'visionMission'
    if (strpos($currentUrl, 'visionMission') !== false) {
        // Filter galleries related to 'visionMission'
        $galleries = Gallery::where('page_url', '/visionMission')->orderBy('created_at', 'asc')->get();
        // dd($galleries);
        return view('frontends.visionMission', compact('galleries'));    
    }

    // // Handle other cases or redirect as needed
    // return view('frontends.about', compact('galleries'));    
}

}