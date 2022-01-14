<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    //
    public function index(): View
    {
        $movies = Movies::all();
        return view('index')->with('movies', $movies);
    }
}
