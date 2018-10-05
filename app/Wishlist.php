<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table="wishlists";
    protected $fillable=['game_name','price','euser_id','user'];

    public function EUser()
    {

        return $this->belongsTo('Euser','euser_id');
    }
}
