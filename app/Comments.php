<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $guarded = ['id'];
    public function author()
    {
        return $this->belongsTo('App/User','with_user');
    }
    public function post()
    {
        return $this->belongsTo('App/Posts','with_posts');
    }

}
