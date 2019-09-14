<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $dates = ['published_at'];

    public function getRouteKeyName()
    {
        return 'url';
    }

    /**
     * Get the category that owns the post.
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * Scope a query to only include published posts.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', Carbon::now())
            ->latest('published_at');
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['url'] = str_slug($title);
    }
}
