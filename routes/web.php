<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use Illuminate\Support\Facades\App;

Route::get('/', Controllers\HomeController::class);
Route::get('/blog', [Controllers\BlogController::class, 'index']);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);

Route::get('users', function () {
    $users = [
        ['id' => 1, 'name' => 'Masri'],
        ['id' => 2, 'name' => 'Anto'],
    ];

    return view('users.index', compact('users'));
});
