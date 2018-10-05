<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    protected $fillable=['product_name','price','euser_id','user'];

    public function EUser()
    {

        return $this->belongsTo('Euser','euser_id');
    }
}
