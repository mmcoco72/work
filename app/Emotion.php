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
    
    public function getByEmotions(int $limit_count = 10)
    {
         return $this->diaries()->with('emotions')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
