<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [AboutController::class, 'index']);
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
