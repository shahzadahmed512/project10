<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'badges';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Define the relationship between Badge and its users (Achievers).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_badges')
            ->withTimestamps();
    }

    // Other relationships and methods...
}
