<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public function complain(){
        return $this->belongsTo(('App\Complain'));
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
