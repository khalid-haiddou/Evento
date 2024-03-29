<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class OrganisateurController extends Controller
{
    public function storeEvent(Request $request)
    {   
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'address' => 'required|string|max:255',
            'placeNumber' => 'required|integer',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'acceptType' => 'required|in:auto,manual',
        ]);
        $userId = Auth::id();
        
        
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->address = $request->address;
        $event->placeNumber = $request->placeNumber;
        $event->price = $request->price;
        $event->category_id = $request->category_id;
        $event->user_id = $userId;
        $event->image = $request->file('image')->store('events', 'public');
        $event->acceptType = $request->acceptType;
        $event->isPublish = "nonpublish";
        $event->save();

        return redirect()->back()->with('success', 'Event created successfully.');
    }
    public function displayEvents()
    {

        // Fetch all events
        $events = Event::all();
        $categories = Category::all();

        
        return view('dashboard.organisateur', compact('events', 'categories'));
    }

    public function editEvent($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
    }

    public function updateEvent(Request $request)
{
    $request->validate([
        'event_id' => 'required|exists:events,id',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'date' => 'required|date',
        'address' => 'required|string|max:255',
        'placeNumber' => 'required|integer',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'acceptType' => 'required|in:auto,manual',
    ]);

    $event = Event::findOrFail($request->event_id);
    $event->title = $request->title;
    $event->description = $request->description;
    $event->date = $request->date;
    $event->address = $request->address;
    $event->placeNumber = $request->placeNumber;
    $event->price = $request->price;
    $event->category_id = $request->category_id;
    $event->acceptType = $request->acceptType;
    if ($request->hasFile('image')) {
        $event->image = $request->file('image')->store('events', 'public');
    }
    $event->save();

    return redirect()->back()->with('success', 'Event updated successfully.');
}
}
