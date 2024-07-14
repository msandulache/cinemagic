<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Movie;
use App\Models\MovieHour;
use App\Models\Ticket;
use App\Models\Price;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function movie(Movie $movie)
    {
        if($movie->hours()->count() == 0) {
            abort(404);
        }

        return view(
            'movies/show',
            [
                'price' => Price::findOrFail(date('N'))->value,
                'movie' => $movie
            ]
        );
    }

    public function movieHour(MovieHour $movieHour)
    {
        $reservedSeats = [];
        $ticketsBooked = Seat::where('movie_hour_id', $movieHour->id)->get();
        foreach ($ticketsBooked as $ticket) {
            $reservedSeats[] = $ticket->seat;
        }

        $ticketsOrdered = Ticket::where('movie_hour_id', $movieHour->id)->get();
        foreach ($ticketsOrdered as $ticket) {
            $reservedSeats[] = $ticket->seat;
        }

        $movieHour= MovieHour::find($movieHour->id);

        $price = Price::find(date('N'));

        $seatRows = ["A", "B", "C", " ", "D", "E", "F", "G", "H", "I", " ", "J", "K", "L"];
        $seatColumns = [
            "1", "2", "3", "4", " ", "5", "6", "7", "8", "9", "10", "11", "12", " ", "13", "14", "15", "16",
        ];

        return view(
            'moviehours/seats',
            [
                'movieHour' => $movieHour,
                'seatRows' => $seatRows,
                'seatColumns' => $seatColumns,
                'price' => $price,
                'reservedSeats' => $reservedSeats
            ]
        );
    }
}
