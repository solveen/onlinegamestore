<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accreview extends Model
{
    protected $table="accreviews";
    protected $fillable=['review','rating','accessory_name','accessory_id','reviewed_by'];

    public function Accessory()
    {
        return $this->belongsTo('Accessory', 'accessory_id');
    }

}
