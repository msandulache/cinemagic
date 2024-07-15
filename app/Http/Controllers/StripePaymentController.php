<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Order;
use App\Models\Ticket;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StripePaymentController extends Controller
{
    public function checkout()
    {
        $booking = Booking::where('user_id', auth()->user()->id)
            ->where('session_id', session()->getId())
            ->first();

        $items = [];
        foreach ($booking->seats as $seat) {
            $movieTicketInfo = [];
            $movieTicketInfo[] = "Bilet";
            $movieTicketInfo[] = $seat->movieHour->hour;
            $movieTicketInfo[] = $seat->movieHour->movie->title;
            $movieTicketInfo[] = $seat->seat;

            $items[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => implode(' - ', $movieTicketInfo),
                    ],
                    'unit_amount' => 100 * $seat->price,
                    'currency' => config('app.currency'),
                ],
                'quantity' => 1,
            ];
        }

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $redirectUrl = route('stripe.checkout.success').'?session_id={CHECKOUT_SESSION_ID}';
        $response = $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            'customer_email' => 'mariusssandulache2015@gmail.com',
            'payment_method_types' => ['link', 'card'],
            'line_items' => $items,
            'mode' => 'payment',
            'allow_promotion_codes' => true,
            'locale' => 'ro',
        ]);

        if (isset($response['success_url'])) {

            $order = Order::create([
                'user_id' => auth()->user()->id,
                'order_status_id' => 1,
            ]);

            foreach ($booking->seats as $seat) {
                Ticket::create([
                    'order_id' => $order->id,
                    'movie_hour_id' => $seat->movieHour->id,
                    'seat' => $seat->seat,
                    'qrcode' => base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate('string')),
                    'price' => $seat->price,
                ]);
            }

            $booking->delete();
        }

        return redirect($response['success_url']);
    }

    public function checkoutSuccess()
    {
//        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
//        $session = $stripe->checkout->sessions->retrieve($request->session_id);

        return view('stripe/success');

    }
}
