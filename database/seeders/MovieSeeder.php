<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $client = new \GuzzleHttp\Client();

        for($page = 1; $page <= 10; $page++) {
            $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=' . $page, [
                'headers' => [
                    'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5MWZiMjI2MzFjYmRkOTZiMzZlMWFhZDBiYjI3YmFmMSIsInN1YiI6IjY0NTUwNTAyZDQ4Y2VlMDBmY2VlYTBjMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.UB6TNHT7P4Wce6O5hzDoc5sV3bf0Ox3W0Y7h4G6nroA',
                    'accept' => 'application/json',
                ],
            ]);

            $output = json_decode($response->getBody(), true);

            if (isset($output['results'])) {
                foreach ($output['results'] as $result) {
                    $client = new \GuzzleHttp\Client();

                    if (isset($result['id'])) {

                        $response = $client->request('GET',
                            'https://api.themoviedb.org/3/movie/'.$result['id'].'?language=ro-RO&page', [
                                'headers' => [
                                    'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5MWZiMjI2MzFjYmRkOTZiMzZlMWFhZDBiYjI3YmFmMSIsInN1YiI6IjY0NTUwNTAyZDQ4Y2VlMDBmY2VlYTBjMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.UB6TNHT7P4Wce6O5hzDoc5sV3bf0Ox3W0Y7h4G6nroA',
                                    'accept' => 'application/json',
                                ],
                            ]);

                        $movie = json_decode($response->getBody(), true);

                        //videos
                        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/' . $result['id'] . '/videos?language=en-US', [
                            'headers' => [
                                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5MWZiMjI2MzFjYmRkOTZiMzZlMWFhZDBiYjI3YmFmMSIsInN1YiI6IjY0NTUwNTAyZDQ4Y2VlMDBmY2VlYTBjMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.UB6TNHT7P4Wce6O5hzDoc5sV3bf0Ox3W0Y7h4G6nroA',
                                'accept' => 'application/json',
                            ],
                        ]);

                        $videos = json_decode($response->getBody(), 1);

                        $trailer = '';
                        if(isset($videos['results'])) {
                            foreach($videos['results'] as $video) {
                                if('Trailer' == $video['type']) {
                                    $trailer = $video['key'];
                                }
                            }
                        }

                        $client = new \GuzzleHttp\Client();

                        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/' . $result['id'] . '/external_ids', [
                            'headers' => [
                                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5MWZiMjI2MzFjYmRkOTZiMzZlMWFhZDBiYjI3YmFmMSIsInN1YiI6IjY0NTUwNTAyZDQ4Y2VlMDBmY2VlYTBjMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.UB6TNHT7P4Wce6O5hzDoc5sV3bf0Ox3W0Y7h4G6nroA',
                                'accept' => 'application/json',
                            ],
                        ]);

                        $externalIds = json_decode($response->getBody(), 1);

                        if(
                            !empty($movie['overview']) &&
                            $movie['original_title'] !== $movie['title'] &&
                            !empty($trailer) &&
                            !str_contains($movie['homepage'], 'netflix')) {


                            Movie::create([
                                'tmdb_id' => $movie['id'],
                                'title' => $movie['title'],
                                'overview' => $movie['overview'],
                                'poster_path' => $movie['poster_path'],
                                'trailer' => $trailer,
                                'vote_count' => $movie['vote_count'],
                                'vote_average' => $movie['vote_average'],
                                'facebook_id' => $externalIds['facebook_id'],
                                'twitter_id' => $externalIds['twitter_id'],
                                'instagram_id' => $externalIds['instagram_id'],
                            ]);
                        }

                    }
                }
            }
        }
    }
}
