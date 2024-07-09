<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\MovieHour;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Price;

class MovieHourController
{
    public function index()
    {
        $movieHours = MovieHour::where('hour', '>=', date('Y-m-d H:i'))
            ->orderBy('hour', 'ASC')
            ->get();

        return view('moviehours/index', ['movieHours' => $movieHours]);
    }

    public function seats(int $movieHourId)
    {
        $reservedSeats = [];
        $ticketsInCart = CartItem::where('movie_hour_id', $movieHourId)->get();
        foreach ($ticketsInCart as $ticket) {
            $reservedSeats[] = $ticket->seat;
        }

        $ticketsOrdered = OrderItem::where('movie_hour_id', $movieHourId)->get();
        foreach ($ticketsOrdered as $ticket) {
            $reservedSeats[] = $ticket->seat;
        }

        $movieHour= MovieHour::find($movieHourId);

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
