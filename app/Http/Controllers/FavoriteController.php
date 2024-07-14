<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Maize\Markable\Models\Favorite;

class FavoriteController extends Controller
{
    public function index()
    {
        $movies = Movie::whereHasFavorite(
            auth()->user()
        )->get();

        return view('favorites/index', compact('movies'));
    }

    public function store($id): RedirectResponse
    {
        $movie = Movie::find($id);
        $user = auth()->user();
        Favorite::add($movie, $user);
        session()->flash('success', 'Filmul a fost adăugat la Favorite cu succes!');

        return redirect()->route('favorites.index');
    }

    public function destroy($id): RedirectResponse
    {
        $movie = Movie::find($id);
        $user = auth()->user();
        Favorite::remove($movie, $user);
        session()->flash('success', 'Filmul este eliminat de la Favorite cu succes!');

        return redirect()->route('favorites.index');
    }
}
