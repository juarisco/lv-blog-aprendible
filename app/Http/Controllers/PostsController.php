<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }
}
