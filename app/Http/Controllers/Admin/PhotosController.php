<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), [
            'photo' => 'required|image|max:2048'  // jpeg, png, bmp, gif, o svg
        ]);

        $post->photos()->create([
            'url' => request()->file('photo')->store('posts', 'public')
        ]);
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        return back()->with('flash', __('Photo removed'));
    }
}
