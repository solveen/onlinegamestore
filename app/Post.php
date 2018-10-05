<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fillable=['title','content','user'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function Reply()
    {
        return $this->hasMany(Reply::class);
    }
}


