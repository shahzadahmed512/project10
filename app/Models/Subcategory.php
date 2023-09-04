<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'subcategory_id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'name', 'subcategory_position_id']; // Add 'category_id' and 'subcategory_position_id' to fillable

    
    /**
     * Define the relationship between Subcategory and its parent Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    /**
     * Define the relationship between Subcategory and its Languages.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function languages()
    // {
    //     return $this->hasMany(Language::class, 'subcategory_id');
    // }

    public function topics()
    {
        return $this->hasMany(Topic::class, 'subcategory_id', 'subcategory_id');

    }

}
