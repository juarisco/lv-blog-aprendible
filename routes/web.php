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

Route::get('/', 'PagesController@home');

Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => 'auth'
    ],
    function () {
        // Rutas de administración
        Route::get('/', 'AdminController@index')->name('dashboard');
        Route::get('posts', 'PostsController@index')->name('admin.posts.index');
    }
);

Auth::routes(['register' => false]);
