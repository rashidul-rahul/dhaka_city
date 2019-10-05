<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function users(){
        return $this->hasMany('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
