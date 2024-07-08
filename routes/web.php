<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieHourController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('page.home');
Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');

Route::resource('/cart', CartController::class);
Route::resource('/movies', MovieController::class);
Route::post('/search', [MovieController::class, 'search'])->name('movies.search');
Route::get('/moviehours', [MovieHourController::class, 'index'])->name('moviehours.index');
Route::get('/seats/{id}', [MovieHourController::class, 'seats'])->name('moviehours.seats');





//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('actors', \App\Http\Controllers\ActorController::class);
        Route::resource('genres', \App\Http\Controllers\GenreController::class);
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post(
        'favorite-add/{id}',
        [\App\Http\Controllers\WishlistController::class, 'favoriteAdd']
    )->name('favorite.add');

    Route::delete(
        'favorite-remove/{id}',
        [\App\Http\Controllers\WishlistController::class, 'favoriteRemove']
    )->name('favorite.remove');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('favorite.index');

    Route::post(
        'cart-add',
        [CartController::class, 'add']
    )->name('cart.add');
});





//Route::get('/seat/{id}', function ($id) {
//
//
//
//})->name('seats.show');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
