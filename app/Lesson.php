<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Document;
use App\Comment;
class Lesson extends Model
{

    public function docs(){
        return $this->hasMany('App\Document');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    
}
