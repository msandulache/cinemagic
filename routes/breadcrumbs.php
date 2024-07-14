<?php

// Acasa
use Carbon\Carbon;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Acasa', route('menu.home'));
});

// Acasa > Program
Breadcrumbs::for('moviehours', function ($trail) {
    $trail->parent('home');
    $trail->push('Program', route('menu.moviehours'));
});

// Acasa > Filme
Breadcrumbs::for('movies', function ($trail) {
    $trail->parent('home');
    $trail->push('Filme', route('menu.movies'));
});

// Acasa > Contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', route('menu.contact'));
});

// Acasa > Cautare filme
Breadcrumbs::for('search', function ($trail) {
    $trail->parent('home');
    $trail->push('Cautare filme', route('menu.search'));
});

// Acasa > Filme > [Film]
Breadcrumbs::for('movie', function ($trail, $movie) {
    $trail->parent('movies');
    $trail->push($movie->title, route('cinema.movie', $movie));
});

// Acasa > Filme > [Film] > [Program]
Breadcrumbs::for('seats', function ($trail, $movieHour) {
    $trail->parent('movie', $movieHour->movie);
    $trail->push(Carbon::parse($movieHour->hour)->format('d.m H:i'), route('cinema.moviehour', $movieHour));
});

// Acasa > Intra in cont
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
    $trail->push('Intra in cont', route('login'));
});

// Acasa > Inregistrare
Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Cont nou', route('register'));
});

// Acasa > Contul meu
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('home');
    $trail->push('Contul meu', route('profile.edit'));
});

// Acasa > Contul meu > Wishlist
Breadcrumbs::for('favorites', function ($trail) {
    $trail->parent('profile');
    $trail->push('Lista de dorinte', route('favorites.index'));
});


// Acasa > Contul meu > Rezervare bilete
Breadcrumbs::for('booking', function ($trail) {
    $trail->parent('profile');
    $trail->push('Rezervare bilete', route('bookings.show'));
});

// Acasa > Contul meu > Istoric comenzi
Breadcrumbs::for('order-history', function ($trail) {
    $trail->parent('profile');
    $trail->push('Istoric comenzi', route('orders.history'));
});

// Acasa > Contul meu > Istoric comenzi > [Comanda]
Breadcrumbs::for('order', function ($trail, $order) {
    $trail->parent('order-history');
    $trail->push('Detalii comanda: #' . $order->id, route('order.show', $order));
});
