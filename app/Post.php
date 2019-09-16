<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'iframe',
        'excerpt',
        'published_at',
        'category_id',
    ];

    protected $dates = ['published_at'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->tags()->detach();
            $post->photos->each->delete();
        });
    }

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

    public static function create(array $attributes = [])
    {
        $post = static::query()->create($attributes);

        $post->generateUrl();

        return $post;
    }

    public function generateUrl()
    {
        $url = str_slug($this->title);

        if ($this->whereUrl($url)->exists()) {
            $url = "{$url}-{$this->id}";
        }

        $this->url = $url;
        $this->save();
    }

    public function setPublishedAtAttribute($published_at)
    {
        $this->attributes['published_at'] = $published_at
            ? Carbon::parse($published_at)
            : null;
    }

    public function setCategoryIdAttribute($category)
    {
        $this->attributes['category_id'] = Category::find($category)
            ? $category
            : Category::create(['name' => $category])->id;
    }

    public function syncTags($tags)
    {
        $tagIds = collect($tags)->map(function ($tag) {
            return Tag::find($tag)
                ? $tag
                : Tag::create(['name' => $tag])->id;
        });

        return $this->tags()->sync($tagIds);
    }
}
