<?php

Route::get('posts', 'PagesController@home');
Route::get('blog/{post}', 'PostsController@show');
Route::get('categories/{category}', 'CategoriesController@show');
Route::get('tags/{tag}', 'TagsController@show');
