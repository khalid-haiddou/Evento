<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\Reservation;
use App\Models\User;

class EventController extends Controller
{
    public function showDetails($eventId)
    {
        $event = Event::findOrFail($eventId);

        return view('event_details', ['event' => $event]);
    }
    public function reserve(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);

        
        if ($event->placeNumber > 0) {
            
            $reservation = new Reservation();
            $reservation->event_id = $event->id;
            $reservation->user_id = auth()->user()->id;
            $reservation->date = Carbon::now(); 
            $reservation->save();
            $event->save();
            
            

            
            return redirect()->back()->with('success', 'Reservation successful!');
        } else {
            return redirect()->back()->with('error', 'No places available!');
        }
    }
    public function search(Request $request)
    {

        $search = $request->search;
        $events = Event::where('title', 'like', '%' . $search . '%');
        $categories = Category::all();
        return view('home', compact('events','categories'));
    }

    public function categoryFilter(Request $request)
    {
        $category = $request->categoryFilter;
        $categories = Category::all();
        $events = Event::where('category_id', $category)->paginate(5);
        return view('home',compact('categories','events'));


    }
    public function MyReservation()
    {
        $statistique = [
            'events' => Event::where('user_id', auth()->user()->id)->count(),
            'eventsAccepted' => Event::where('user_id', auth()->user()->id)->where('isPublish', 'publish')->count(),
            'eventsNoneAccepted' => Event::where('user_id', auth()->user()->id)->where('isPublish', 'nonpublish')->count(),
            'tickets' => Event::where('user_id', auth()->user()->id)->with('reservations')->get()->pluck('reservations')->flatten()->count(),
        ];
        $event = Event::where('user_id', Auth::id())->get();
        foreach ($event as $e) {
            $events[] = $e->id;
        }
        $reservations = Reservation::whereIn('event_id', $events)->with('user')->with('event')->get();
        return view('dashboard.reservation', compact('reservations','statistique'));
    }
    public function AcceptEvent($action, $id)
    {
        $reservation = Reservation::findOrFail($id);
        if ($action == 'accept') {
            $reservation->status = '1';
            $reservation->save();
            return redirect()->back()->with('success', 'Reservation accepted successfully');
        } else {
            $reservation->delete();
            return redirect()->back()->with('success', 'Reservation rejected successfully');
        }
    }
    public function acceptNewEvents()
    {
        $events = Event::with('category')->with('user')->get();
        return view('dashboard.acceptEvents', compact('events'));
    }
    public function acceptOragnEvent($action, $id)
    {
        $event = Event::findOrFail($id);
        if ($action == 'success') {
            $event->isPublish = 'publish';
            $event->save();
            return redirect()->back()->with('success', 'Event accepted successfully');
        } else {
            $event->delete();
            return redirect()->back()->with('success', 'Event rejected successfully');
        }
    }
}


