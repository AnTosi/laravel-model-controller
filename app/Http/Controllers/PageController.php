<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;



class PageController extends Controller
{
    // Add an index method to manage requests from the / route
    public function index()
    {
        ddd(Movie::all());
        return view('home');
    }
}
