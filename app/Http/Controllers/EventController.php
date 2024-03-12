<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event; 
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\Reservation;

class EventController extends Controller
{
    public function showDetails($eventId)
{
    // Fetch the event details from the database based on the event ID
    $event = Event::findOrFail($eventId);

    // Pass the event details to the view
    return view('event_details', ['event' => $event]);
}
public function reserve(Request $request, $eventId)
{
    // Find the event
    $event = Event::findOrFail($eventId);

    // Check if there are available places
    if ($event->placeNumber > 0) {
        // Create a new reservation
        $reservation = new Reservation();
        $reservation->event_id = $event->id;
        $reservation->user_id = auth()->user()->id;
        $reservation->date = Carbon::now(); // Current date
        $reservation->save();

        // Update the available place count
        $event->placeNumber--;
        $event->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Reservation successful!');
    } else {
        // Redirect back with an error message if no places are available
        return redirect()->back()->with('error', 'No places available!');
    }
}

}
