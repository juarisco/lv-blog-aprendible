<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        if ($post->isPublished() || auth()->check()) {
            if (request()->wantsJson()) {
                return $post;
            }

            return view('posts.show')->withPost($post);
        }

        abort(404);
    }
}
