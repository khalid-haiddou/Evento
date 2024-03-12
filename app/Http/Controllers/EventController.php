<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event; 
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class EventController extends Controller
{
    public function showDetails($eventId)
{
    // Fetch the event details from the database based on the event ID
    $event = Event::findOrFail($eventId);

    // Pass the event details to the view
    return view('event_details', ['event' => $event]);
}

}
