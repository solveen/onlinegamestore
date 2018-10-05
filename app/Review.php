<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table="reviews";
    protected $fillable=['review','rating','game_name','game_id','category_id','reviewed_by'];

    public function Game()
    {
        return $this->belongsTo('Game', 'game_id');
    }
    public function Category()
    {
        return $this->belongsTo('Category', 'category_id');
    }
}
