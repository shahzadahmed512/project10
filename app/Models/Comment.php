<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // ...

    /**
     * Define the relationship between Comment and its author (User).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Define the relationship between Comment and its parent post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    // Other relationships and methods...
}
