<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'city', 'state', 'zip', 'postal_code'];

    // Define the relationship between Country and User
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
