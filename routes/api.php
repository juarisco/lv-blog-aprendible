<?php

Route::get('posts', 'PagesController@home');
Route::get('blog/{post}', 'PostsController@show');
Route::get('categories/{category}', 'CategoriesController@show');
Route::get('tags/{tag}', 'TagsController@show');
Route::get('archive', 'PagesController@archive');

Route::post('messages', function () {

    // Validar datos
    // Enviar un email

    return response()->json([
        'status' => 'OK'
    ]);
});
