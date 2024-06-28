<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class AllMovies extends Component
{
    public $allMovies = [];

    public function loadAllMovies()
    {
        $seconds = 10;
        $this->allMovies = Cache::remember('all-movies', $seconds, function () {
            return Movie::all();
        });
    }

    public function render()
    {
        return view('livewire.all-movies');
    }
}
