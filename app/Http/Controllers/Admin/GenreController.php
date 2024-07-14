<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::latest()->paginate(10);

        return view('genres/index', [
            'genres' => $genres,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genres/create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'tmdb_id' => 'required',
            'name' => 'required|min:3',
        ]);

        Genre::create($attributes);

        return redirect(route('genres.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return view('genres/show', ['genre' => $genre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('genres/edit', ['genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'tmdb_id' => 'required',
            'name' => 'required|min:3',
        ]);

        $genre->tmdb_id = request('tmdb_id');
        $genre->name = request('name');
        $genre->save();

        return redirect(route('genres.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect(route('genres.index'));
    }
}
