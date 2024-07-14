<?php

use App\Http\Controllers\Admin;

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('actors', Admin\ActorController::class);
        Route::resource('movies', Admin\MovieController::class);
        Route::resource('genres', Admin\GenreController::class);
    });
});
