<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Seat;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::where('user_id', auth()->user()->id)
        ->where('session_id', session()->getId())
        ->first();

        return view('shop/booking', ['booking' => $booking]);
    }

    public function add(Request $request)
    {
        $booking = Booking::firstOrCreate([
            'user_id' => auth()->user()->id,
            'session_id' => session()->getId(),
        ]);

        $bookingItems = [];
        foreach($request->seats as $seat) {
            $bookingItems[] = new Seat([
                'movie_hour_id' => $request->movie_hour_id,
                'seat' => $seat,
                'price' => $request->price
            ]);
        }

        $booking->bookingItems()->saveMany($bookingItems);

        if($request->seats == 1) {
            session()->flash('success', 'Biletul a fost rezervat cu succes!');
        }

        if($request->seats > 1) {
            session()->flash('success', 'Biletele a fost rezervate cu succes!');
        }

        return redirect()->route('booking');
    }

    public function remove(int $bookingItemId)
    {
        $bookingItem = Seat::find($bookingItemId);
        $bookingItem->delete();

        session()->flash('success', 'Biletul a fost eliminat din rezervare!');

        return redirect()->route('booking');
    }

    public function empty(int $bookingId)
    {
        $booking = Booking::find($bookingId);
        $booking->delete();

        session()->flash('success', 'Cosul de cumparaturi a fost golit cu succes!');

        return redirect()->route('booking');
    }
}
