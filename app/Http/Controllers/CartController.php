<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Movie;
use Maize\Markable\Models\Favorite;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function wishlist()
    {
        $movies = Movie::whereHasFavorite(
            auth()->user()
        )->get();

        return view('wishlist',compact('movies'));
    }

    public function add(Request $request)
    {
        $cart = Cart::firstOrCreate([
            'user_id' => auth()->user()->id,
            'session_id' => session()->getId(),
        ]);

        $cartItems = [];
        foreach($request->seats as $seat) {
            $cartItems[] = new CartItem([
                'movie_schedule_id' => $request->movie_schedule_id,
                'seat' => $seat,
                'price' => $request->price
            ]);
        }

        $cart->cartItems()->saveMany($cartItems);

        session()->flash('success', 'Biletele a fost adăugate la Favorite cu succes!');

        return redirect()->route('wishlist');
    }

    public function favoriteRemove($id)
    {
        $movie = Movie::find($id);
        $user = auth()->user();
        Favorite::remove($movie, $user);
        session()->flash('success', 'Filmul este eliminat de la Favorite cu succes!');

        return redirect()->route('wishlist');
    }
}
