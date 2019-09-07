<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::latest('published_at')->get();

        return view('welcome')->withPosts($posts);
    }
}
