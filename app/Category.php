<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function contents(){
        return $this->hasMany('App\Content');
    }

    public function complain(){
        return $this->hasMany('App\Category');
    }
}
