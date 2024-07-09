<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->user()->id)
        ->where('session_id', session()->getId())
        ->first();

        return view('profile/cart', ['cart' => $cart, 'total' => $cart->cartItems()->sum('price')]);
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
                'movie_hour_id' => $request->movie_hour_id,
                'seat' => $seat,
                'price' => $request->price
            ]);
        }

        $cart->cartItems()->saveMany($cartItems);

        if($request->seats == 1) {
            session()->flash('success', 'Biletul a fost adaugat in cos cu succes!');
        }

        if($request->seats > 1) {
            session()->flash('success', 'Biletele a fost adaugate in cos cu succes!');
        }

        return redirect()->route('cart');
    }

    public function remove(int $cartItemId)
    {
        $cartItem = CartItem::find($cartItemId);
        $cartItem->delete();

        session()->flash('success', 'Biletul a fost eliminat din cos cu succes!');

        return redirect()->route('cart');
    }

    public function empty(int $cartId)
    {
        $cart = Cart::find($cartId);
        $cart->delete();

        session()->flash('success', 'Cosul de cumparaturi a fost golit cu succes!');

        return redirect()->route('cart');
    }
}
