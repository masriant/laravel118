<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use Illuminate\Support\Facades\App;

Route::get('/', Controllers\HomeController::class);
Route::get('/blog', [Controllers\BlogController::class, 'index']);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);
Route::get('/users', [Controllers\UserController::class, 'index']);
Route::get('/users/create', [Controllers\UserController::class, 'create']);
Route::post('/users', [Controllers\UserController::class, 'store']);

// Route::get('articles/create', function() {
//     \App\Models\Article::create([
//         'title' => $title = 'My first article',
//         'slug' => str($title)->slug(),
//         'body' => $body = 'This is the body of my first articles',
//         'teaser' => $teaser = str($body)->limit(160),
//         'meta_title' => $title,
//         'meta_description' => $teaser,
//     ]);
// });