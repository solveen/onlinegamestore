<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table="games";
    protected $fillable=['game_name','category_id','category','game_image','game_details','price'];

    public function Category()
    {
        return $this->belongsTo('Category', 'category_id');
    }
    public function Review()
    {
        return $this->hasMany(Review::class);
    }
}

