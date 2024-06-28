<?php

namespace App\Console\Commands;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Price;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportMovieCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'movies:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->importPrice();
        $this->importGenres();
        $this->importMovies();
    }

    private function importPrice()
    {
        $daysOfWeek = [1, 2, 3, 4, 5, 6, 7];
        foreach ($daysOfWeek as $dayOfWeek)
        {
            if($dayOfWeek < 5) {
                $value = 17;
            } else {
                $value = 22;
            }

            Price::create([
                'value' => $value,
            ]);
        }
    }

    private function importGenres()
    {
        $results = Http::asJson()
            ->get(config('services.tmdb.endpoint').'genre/movie/list?language='. config('services.tmdb.language') . '&api_key='.config('services.tmdb.api'))
            ->throw()
            ->json();

        if (!isset($results['genres'])) {
            throw new \Exception('Genres not found');
        }

        foreach ($results['genres'] as $genre) {
            Genre::create([
                'tmdb_id' => $genre['id'],
                'name' => $genre['name'],
            ]);
        }
    }

    private function importMovies()
    {
        $data = Http::asJson()
            ->get(config('services.tmdb.endpoint').'movie/now_playing?language='. config('services.tmdb.language') . '&api_key='.config('services.tmdb.api'))
            ->throw()
            ->json();

        if (!isset($data['results'])) {
            throw new \Exception('Results not found');
        }

        foreach ($data['results'] as $result) {
            if (isset($result['id'])) {
                $tmdb_id = $result['id'];
                $tmdbMovie = Http::asJson()
                    ->get(config('services.tmdb.endpoint').'movie/'.$tmdb_id.'?language='.config('services.tmdb.language').'&api_key='.config('services.tmdb.api'))
                    ->throw()
                    ->json();

                $movie = Movie::create([
                    'tmdb_id' => $tmdbMovie['id'],
                    'title' => $tmdbMovie['title'],
                    'original_title' => $tmdbMovie['original_title'],
                    'overview' => $tmdbMovie['overview'],
                    'poster_path' => $tmdbMovie['poster_path'],
                    'trailer' => $this->getTrailer($tmdbMovie['id']),
                    'runtime' => $tmdbMovie['runtime']
                ]);

                foreach ($tmdbMovie['genres'] as $genre) {
                    $genre = Genre::where('tmdb_id', $genre['id'])->first();
                    if (!empty($genre)) {
                        $movie->genres()->attach($genre->id);
                    }
                }

                $actors = $this->getActors($tmdbMovie['id']);
                foreach ($actors as $actor) {
                    $actor = Actor::firstOrCreate([
                        'name' => $actor['name'],
                        'profile_path' => $actor['profile_path'],
                    ]);

                    if (!empty($actor)) {
                        $movie->actors()->attach($actor->id);
                    }
                }
            }
        }
    }

    private function getTrailer(int $movieId): string
    {
        $data = Http::asJson()
            ->get(config('services.tmdb.endpoint').'movie/' . $movieId . '/videos?language=en-US&api_key='.config('services.tmdb.api'))
            ->throw()
            ->json();

        if (!isset($data['results'])) {
            throw new \Exception('Videos not found');
        }

        foreach($data['results'] as $video) {
            if('Trailer' == $video['type']) {
                return $video['key'];
            }
        }

        return '';
    }

    private function getActors(int $movieId): array
    {
        $actors = [];

        $data = Http::asJson()
            ->get(config('services.tmdb.endpoint').'movie/' . $movieId . '/credits?language=en-US&api_key='.config('services.tmdb.api'))
            ->throw()
            ->json();
        if (!isset($data['cast'])) {
            throw new \Exception('Actors not found');
        }

        foreach($data['cast'] as $actor) {
            $actors[] = [
                'name' => $actor['name'],
                'profile_path' => $actor['profile_path'],
            ];
        }

        return array_slice($actors, 0, 5);
    }
}
