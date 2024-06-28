<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class Movies extends Component
{
    public $movies = [];

    public function loadMovies()
    {
        $this->movies = Movie::all()->take(9);
    }

    public function render()
    {
        return view('livewire.movies');
    }
}
