<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{

    public function store(Request $request)
    {
        $booking = Booking::firstOrCreate([
            'user_id' => auth()->user()->id,
            'session_id' => session()->getId(),
        ]);

        $seats = [];
        foreach($request->get('seats') as $seat) {
            $seats[] = new Seat([
                'movie_hour_id' => $request->get('movie_hour_id'),
                'seat' => $seat,
                'price' => $request->get('price')
            ]);
        }

        $booking->seats()->saveMany($seats);

        if(count($seats) == 1) {
            session()->flash('success', 'Locul a fost rezervat cu succes!');
        }

        if(count($seats) > 1) {
            session()->flash('success', 'Locurile au fost rezervate cu succes!');
        }

        return redirect()->route('bookings.show');
    }

    public function destroy(Seat $seat)
    {
        $seat->delete();

        session()->flash('success', 'Locul a fost eliminat din rezervare!');

        return redirect()->route('bookings.show');
    }
}
