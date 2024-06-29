<?php

// Acasa
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Acasa', route('index'));
});

// Acasa > Program
Breadcrumbs::for('movietime', function ($trail) {
    $trail->parent('home');
    $trail->push('Program', route('movietime'));
});

// Acasa > Filme
Breadcrumbs::for('movies', function ($trail) {
    $trail->parent('home');
    $trail->push('Filme', route('movies.index'));
});

// Acasa > Contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', route('contact'));
});

// Acasa > Filme > [Film]
Breadcrumbs::for('movie', function ($trail, $movie) {
    $trail->parent('movies');
    $trail->push($movie->title, route('movies.show', $movie->id));
});

// Acasa > Filme > [Film] > [Program] > Locuri
Breadcrumbs::for('seats', function ($trail, $movieSchedule) {
   $trail->parent('movie', $movieSchedule->movie);
   $trail->push(date('d.m H:i', strtotime($movieSchedule->show_time)) , route('seats.show', $movieSchedule->id));
});

// Acasa > Cautare filme
Breadcrumbs::for('search', function ($trail) {
    $trail->parent('home');
    $trail->push('Cautare filme', route('search'));
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

// Acasa > Cos de cumparaturi
Breadcrumbs::for('cart', function ($trail) {
    $trail->parent('home');
    $trail->push('Cos de cumparaturi', route('account.cart'));
});

// Acasa > Contul meu
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('home');
    $trail->push('Contul meu', route('profile.edit'));
});

// Acasa > Contul meu > Wishlist
Breadcrumbs::for('wishlist', function ($trail) {
    $trail->parent('profile');
    $trail->push('Lista de dorinte', route('wishlist'));
});
