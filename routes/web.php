<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::name('menu.')->controller(Controllers\MenuController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/movies', 'movies')->name('movies');
    Route::get('/moviehours', 'moviehours')->name('moviehours');
    Route::get('/contact', 'contactForm')->name('contact.form');
    Route::post('/contact', 'contact')->name('contact');
    Route::post('/search', 'search')->name('search');
});

Route::name('cinema.')->controller(Controllers\CinemaController::class)->group(function () {
    Route::get('/movies/{movie}', 'movie')->name('movie');
    Route::get('/moviehours/{movieHour}', 'movieHour')->name('moviehour');
});

Route::middleware('auth')->group(function () {
    Route::prefix('profile')->name('profile.')->controller(Controllers\ProfileController::class)->group(function () {
        Route::get('', 'edit')->name('edit');
        Route::patch('', 'update')->name('update');
        Route::delete('', 'destroy')->name('destroy');
    });

    Route::prefix('favorites')->name('favorites.')->controller(Controllers\FavoriteController::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('/{movie}', 'store')->name('store');
        Route::delete('/{movie}', 'destroy')->name('destroy');
    });

    Route::prefix('bookings')->name('bookings.')->controller(Controllers\BookingController::class)->group(function () {
        Route::get('', 'show')->name('show');
        Route::delete('', 'destroy')->name('destroy');
    });

    Route::prefix('seats')->name('seats.')->controller(Controllers\SeatController::class)->group(function () {
        Route::post('', 'store')->name('store');
        Route::delete('/{seat}', 'destroy')->name('destroy');
    });

    Route::prefix('stripe')->name('stripe.')->controller(Controllers\StripePaymentController::class)->group(function () {
        Route::post('/checkout', 'checkout')->name('checkout');
        Route::get('/checkout/success', 'checkoutSuccess')->name('checkout.success');
    });

    Route::prefix('orders')->name('orders.')->controller(Controllers\OrderController::class)->group(function () {
        Route::get('/history', 'history')->name('history');
        Route::get('/{order}', 'show')->name('show');
    });

    Route::prefix('tickets')->name('tickets.')->controller(Controllers\TicketController::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/{ticket}', 'show')->name('show');
    });

    Route::prefix('invoices')->name('invoices.')->controller(Controllers\InvoiceController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{invoice}', 'show')->name('show');
        Route::get('/download/{invoice}', 'download')->name('download');
    });
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
