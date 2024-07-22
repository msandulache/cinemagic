<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ticket;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();

        return view('tickets/index', ['orders' => $orders]);
    }

    public function show(Ticket $ticket)
    {
        $movieTitle = $ticket->movieHour->movie->title;
        $hour = \Carbon\Carbon::parse($ticket->movieHour->hour)->format('d.m H:i');
        $seat =  $ticket->seat;

        $ticket = [
            'movie_title' => $movieTitle,
            'hour' => $hour,
            'seat' => $seat,
            'qrcode' => QrCode::size(150)->generate($movieTitle . $hour . $seat),
        ];

        $pdf = PDF::loadView('tickets.show', $ticket);

        return $pdf->stream('ticket.pdf');
    }
}
