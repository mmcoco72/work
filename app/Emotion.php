<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emotion extends Model
{
    public function diaries()
    {
        return $this->belongsToMany('App\Diary');
    }
}
