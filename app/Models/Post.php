<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // ...

    /**
     * Define the relationship between Post and its author (User).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Define the relationship between Post and its likes (Users).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function likedBy()
    {
        return $this->belongsToMany(User::class, 'post_likes')
            ->withTimestamps();
    }

    /**
     * Define the relationship between Post and its comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    // Other relationships and methods...
}
