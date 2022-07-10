<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{   
    protected $table = 'diaries';
    
    protected $fillable = [
        'title',
        'body'
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('emotions')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function emotions()
    {
        return $this->belongsToMany('App\Emotion');
    }
}
