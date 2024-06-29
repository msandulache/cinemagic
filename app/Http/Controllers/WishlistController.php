<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Maize\Markable\Models\Favorite;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $movies = Movie::whereHasFavorite(
            auth()->user()
        )->get();

        return view('wishlist',compact('movies'));
    }

    public function favoriteAdd($id)
    {
        $movie = Movie::find($id);
        $user = auth()->user();
        Favorite::add($movie, $user);
        session()->flash('success', 'Filmul a fost adăugat la Favorite cu succes!');

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
