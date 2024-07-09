<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies/index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $movies = Movie::where('title', 'LIKE', '%' . $search . '%')
            ->join('movie_hours', 'movies.id', '=', 'movie_hours.movie_id')->get();

        return view('movies/search', [
            'movies' => $movies,
            'search' => $search
        ]);
    }
}
