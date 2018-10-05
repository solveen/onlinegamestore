<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $table="accessories";
    protected $fillable=['accessory_name','price','accessory_image','details','accessory_category'];

    public function Accreview()
    {
        return $this->hasMany(Accreview::class);
    }
}
