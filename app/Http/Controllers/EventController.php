<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use App\Models\Category;

    
    class EventController extends Controller
{
        public function store(Request $request)
        {
            // Validate the request data
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'date_event' => 'required|date',
                'place' => 'required|string|max:255',
                'price' => 'required|numeric',
                'nbr_place' => 'required|integer',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                'category' => 'required|exists:categories,id',
                'status' => 'required|in:pending,approved,cancelled',
            ]);
    
            // Store the event image
            $imagePath = $request->file('image')->store('event_images');
    
            // Create the event
            $event = new Event();
            $event->title = $request->title;
            $event->description = $request->description;
            $event->date_event = $request->date_event;
            $event->place = $request->place;
            $event->price = $request->price;
            $event->nbr_place = $request->nbr_place;
            $event->image = $imagePath;
            $event->category = $request->category;
            $event->status = $request->status;
            $event->save();
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Event created successfully.');
        }
        public function index()
    {
        // Retrieve all events
        $events = Event::all();
        
        // Retrieve all categories
        $categories = Category::all();
        // Pass events and categories to the view
        return view('dashboard.organisateur', compact('events', 'categories'));
        
    }

}
    
