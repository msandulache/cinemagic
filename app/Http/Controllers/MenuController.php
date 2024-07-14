<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieHour;

class MenuController extends Controller
{
    public function home()
    {
        $movieHours = MovieHour::where('hour', '>=', date('Y-m-d H:i'))
            ->orderBy('hour', 'ASC')
            ->get()
            ->take(8);


        $premiumMovies = Movie::where('is_premium', '1')->get()->take(3);

        return view('pages/home', [
            'movieHours' => $movieHours,
            'premiumMovies' => $premiumMovies
        ]);
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
