<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getRouteKeyName()
    {
        return 'url';
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['url'] = str_slug($name);
    }
}
