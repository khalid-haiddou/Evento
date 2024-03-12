<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event; 
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch events
        $events = Event::all();

        // Pass events data to the view
        return view('home', compact('events'));
    }
}
