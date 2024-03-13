<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event; 
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch events
        $events = Event::paginate(6);
        $categories = Category::all();
        return view('home', compact('events','categories'));
    }

   
}
