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


    public function search(Request $request)
    {

    }
}
