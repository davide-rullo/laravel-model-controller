<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {

        return view('welcome', ['movies' => Movie::all(), 'heading' => 'Our movies']);
    }
}
