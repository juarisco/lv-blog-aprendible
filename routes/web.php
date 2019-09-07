<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = \App\Post::latest('published_at')->get();
    return view('welcome')->withPosts($posts);
});

Route::get('home', function () {
    return view('admin.dashboard');
})->middleware('auth');

// Route::auth();
// Auth::routes();
Auth::routes(['register' => false]);
