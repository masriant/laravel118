<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/', 'home');
// Route::get('/', fn () => view('home'))->name('home');

Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/contact', fn () => view('contact'));
Route::get('/gallery', fn () => view('gallery'));

Route::get('users', function () {
    $users = [
        ['id' => 1, 'name' => 'Masri'],
        ['id' => 2, 'name' => 'Anto'],
    ];

    return view('users.index', compact('users'));
});
