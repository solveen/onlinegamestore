<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accwishlist extends Model
{
    protected $table="accwishlists";
    protected $fillable=['accessory_name','price','euser_id','user'];

    public function EUser()
    {

        return $this->belongsTo('Euser','euser_id');
    }
}
