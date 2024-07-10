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

    Route::get('/booking', [Controllers\BookingController::class, 'index'])->name('booking');
    Route::post('booking-add', [Controllers\BookingController::class, 'add'])->name('booking.add');
    Route::delete('booking-remove/{id}', [Controllers\BookingController::class, 'remove'])->name('booking.remove');
    Route::delete('booking-empty/{id}', [Controllers\BookingController::class, 'empty'])->name('booking.empty');

    Route::get('/my-tickets', [Controllers\OrderController::class, 'myticktes'])->name('order.mytickets');
    Route::get('/orders/history', [Controllers\OrderController::class, 'history'])->name('order.history');
    Route::get('/orders/show/{id}', [Controllers\OrderController::class, 'show'])->name('order.show');

});


Route::controller(Controllers\StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe')->name('stripe.index');
    Route::post('stripe/checkout', 'stripeCheckout')->name('stripe.checkout');
    Route::get('stripe/checkout/success', 'stripeCheckoutSuccess')->name('stripe.checkout.success');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
