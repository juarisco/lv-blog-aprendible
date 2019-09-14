<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
        return view('welcome', [
            'title' => __('Tags Post') . " '{$tag->name}'",
            'posts' => $tag->posts()->paginate(1)
        ]);
    }
}
