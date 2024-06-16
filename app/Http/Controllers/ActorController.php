<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors = Actor::latest()->paginate(5);

        return view('actors/index', [
            'actors' => $actors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actors/create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required|min:3',
            'profile_path' => 'required',
        ]);

        Actor::create($attributes);

        return redirect('/actors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        return view('actors/show', ['actor' => $actor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        return view('actors/edit', ['actor' => $actor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actor $actor)
    {
        $request->validate([
            'name' => 'required|min:3',
            'profile_path' => 'required',
        ]);

        $actor->name = request('name');
        $actor->profile_path = request('profile_path');
        $actor->save();

        return redirect('/actors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        $actor->delete();

        return redirect('/actors');
    }
}
