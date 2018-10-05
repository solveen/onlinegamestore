<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable=['category','category_image','category_details'];

    public function Game(){
        return $this->hasMany(Game::class);
    }
    public function Review(){
        return $this->hasMany(Review::class);
    }
}
