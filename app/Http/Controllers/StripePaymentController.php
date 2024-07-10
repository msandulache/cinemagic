<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(): View
    {
        return view('shop.stripe');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function stripeCheckout(Request $request)
    {
        $lineItems = [];
        foreach ($request->input(key: 'movie_title') as $key => $movie_title) {
            $productDataName = [];
            $productDataName[] = "Bilet";
            $productDataName[] = $request->input('movie_hour')[$key];
            $productDataName[] = $request->input('movie_title')[$key];
            $productDataName[] = $request->input('movie_seat')[$key];

            $lineItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => implode(' - ', $productDataName),
                    ],
                    'unit_amount' => 100 * $request->input('movie_price')[$key],
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
            'line_items' => $lineItems,
            'mode' => 'payment',
            'allow_promotion_codes' => true,
            'locale' => 'ro'
        ]);

        return redirect($response['url']);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function stripeCheckoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $session = $stripe->checkout->sessions->retrieve($request->session_id);
        dd($session);


        //ia datele din cos
        //scrie comanda
        //sterge cosul


        return redirect()->route('stripe.index')
            ->with('success', 'Payment successful.');
    }
}
