<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Opening;
use App\Helpers\FileHelpers;

class HomeWebController extends Controller
{
    public function index()
    {
        return view('frontends.index');
    }

}
