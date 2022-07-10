<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emotion extends Model
{   
    protected $table = 'emotions';
    protected $fillable = [
        'name'
        ];
    
    public function diaries()
    {
        return $this->belongsToMany('App\Diary');
    }
}
