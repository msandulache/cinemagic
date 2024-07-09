<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\PageController::class, 'home'])->name('page.home');
Route::get('/contact', [Controllers\PageController::class, 'contact'])->name('page.contact');

Route::resource('/movies', Controllers\MovieController::class);
Route::post('/search', [Controllers\MovieController::class, 'search'])->name('movies.search');
Route::get('/moviehours', [Controllers\MovieHourController::class, 'index'])->name('moviehours.index');
Route::get('/seats/{id}', [Controllers\MovieHourController::class, 'seats'])->name('moviehours.seats');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('actors', Controllers\ActorController::class);
        Route::resource('genres', Controllers\GenreController::class);
    });

    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('favorite-add/{id}', [Controllers\WishlistController::class, 'favoriteAdd'])->name('favorite.add');
    Route::delete('favorite-remove/{id}', [Controllers\WishlistController::class, 'favoriteRemove'])->name('favorite.remove');
    Route::get('/wishlist', [Controllers\WishlistController::class, 'index'])->name('wishlist');

    Route::post('cart-add', [Controllers\CartController::class, 'add'])->name('cart.add');
    Route::delete('cart-remove/{id}', [Controllers\CartController::class, 'remove'])->name('cart.remove');
    Route::get('/cart', [Controllers\CartController::class, 'index'])->name('cart');
    Route::delete('cart-empty/{id}', [Controllers\CartController::class, 'empty'])->name('cart.empty');
    Route::get('/my-tickets', [Controllers\OrderController::class, 'myticktes'])->name('order.mytickets');
    Route::get('/orders/history', [Controllers\OrderController::class, 'history'])->name('order.history');
    Route::get('/orders/show/{id}', [Controllers\OrderController::class, 'show'])->name('order.show');

});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
