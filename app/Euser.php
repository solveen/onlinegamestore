<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Euser extends Model
{
    protected $table = "users";
    protected $fillable = ['first_name', 'last_name', 'address', 'phone_number', 'email', 'password'];

    public function Wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function Accwishlist()
    {
        return $this->hasMany(Accwishlist::class);

    }

    public function Order()
    {
        return $this->hasMany(Order::class);

    }
}