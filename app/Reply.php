<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table="replies";
    protected $fillable=['reply','user','comment_id','post_id'];

    public function Comment()
    {

        return $this->belongsTo('Comment', 'comment_id');
    }
    public function Post()
    {

        return $this->belongsTo('Post', 'post_id');
    }

}
