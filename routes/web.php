<?php

use App\Http\Controllers\ProfileController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $movies = Movie::all()->take(9);

    return view('welcome', ['movies' => $movies]);
})->name('app.index');

Route::get('/movie/{id}', function ($id) {

    $movie = Movie::find($id);

    return view('movies/show', ['movie' => $movie]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('actors', \App\Http\Controllers\ActorController::class);
        Route::resource('genres', \App\Http\Controllers\GenreController::class);

    });
});
Route::resource('/movies', \App\Http\Controllers\MovieController::class);

require __DIR__.'/auth.php';
