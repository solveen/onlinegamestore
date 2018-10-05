<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{

    protected $table="comments";
    protected $fillable=['comment','user','post_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {

        return $this->belongsTo('Post', 'post_id');
    }
    public function Reply()
    {
        return $this->hasMany(Reply::class);
    }
}