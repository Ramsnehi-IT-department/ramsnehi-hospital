<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('qualities.index');
    }

}