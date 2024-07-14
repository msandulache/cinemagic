<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Seat;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show()
    {
        $booking = Booking::where('user_id', auth()->user()->id)
        ->where('session_id', session()->getId())
        ->first();

        return view('bookings/show', ['booking' => $booking]);
    }

    public function destroy()
    {
        $booking = Booking::where('user_id', auth()->user()->id)
            ->where('session_id', session()->getId())
            ->first();

        $booking->delete();

        session()->flash('success', 'Rezervarea a fost eliminata cu succes!');

        return redirect()->route('bookings.show');
    }
}
