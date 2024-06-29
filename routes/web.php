<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProfileController;
use App\Models\Movie;
use App\Models\MovieSchedule;
use App\Models\Price;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $latestMovies = Movie::orderBy('created_at', 'DESC')->get()->take(3);

    return view('index', ['latest_movies' => $latestMovies]);
})->name('index');

Route::get('/movietime', function () {
    return view('movietime');
})->name('movietime');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/wishlist', function () {

})->name('account.wishlist');


Route::get('/cart', function () {

    return view('cart');
})->name('account.cart');

Route::post('/search', function () {

    $movies = Movie::where('title', 'like', '%'.request('search').'%')->get();

    return view('movies.search', ['movies' => $movies]);
})->name('search');

//Route::get('/movie/{id}', function ($id) {
//
//    $movie = Movie::find($id);
//
//    return view('movies/show', ['movie' => $movie]);
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('actors', \App\Http\Controllers\ActorController::class);
        Route::resource('genres', \App\Http\Controllers\GenreController::class);
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('favorite-add/{id}',
        [\App\Http\Controllers\WishlistController::class, 'favoriteAdd'])->name('favorite.add');
    Route::delete('favorite-remove/{id}',
        [\App\Http\Controllers\WishlistController::class, 'favoriteRemove'])->name('favorite.remove');
    Route::get('wishlist', [\App\Http\Controllers\WishlistController::class, 'wishlist'])->name('wishlist');

    Route::post('cart-add',
        [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
});
Route::resource('/movies', \App\Http\Controllers\MovieController::class);


Route::get('/demo', [DemoController::class, 'demo'])->name('demo');

Route::get('/seat/{id}', function ($id) {

    $movieSchedule = MovieSchedule::find($id);

    $price = Price::find(date('N'));

    $indexerRows = ["A", "B", "C", " ", "D", "E", "F", "G", "H", "I", " ", "J", "K", "L"];
    $indexerColumns = ["1", "2", "3", "4", " ", "5", "6", "7", "8", "9", "10", "11", "12", " ", "13", "14", "15", "16"];

    return view('seats/show',
        [
            'movieSchedule' => $movieSchedule,
            'indexerRows' => $indexerRows,
            'indexerColumns' => $indexerColumns,
            'price' => $price
        ]);

})->name('seats.show');

require __DIR__.'/auth.php';
