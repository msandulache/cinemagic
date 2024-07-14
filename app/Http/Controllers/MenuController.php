<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Movie;
use App\Models\MovieHour;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        $movieHours = MovieHour::where('hour', '>=', date('Y-m-d H:i'))
            ->orderBy('hour', 'ASC')
            ->get()
            ->take(8);


        $premiumMovies = Movie::where('is_premium', '1')->get()->take(3);

        return view('menu/home', [
            'movieHours' => $movieHours,
            'premiumMovies' => $premiumMovies
        ]);
    }

    public function movies()
    {
        return view('menu/movies', ['movies' =>  Movie::all()]);
    }

    public function moviehours()
    {
        $movieHours = MovieHour::where('hour', '>=', now())
            ->orderBy('hour', 'ASC')
            ->get();

        return view('menu/moviehours', ['movieHours' => $movieHours]);

    }

    public function contactForm()
    {
        return view('menu/contact');
    }

    public function contact(Request $request)
    {
        Contact::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
        ]);

        session()->flash('success', 'Mesajul a fost trimis cu succes!');

        return redirect()->route('menu.contact.form');
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
