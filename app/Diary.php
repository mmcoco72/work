<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emotion;

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
    
    public function getSearchDiaries($emotion_array)//$emotion_array =emotion_id
    {
        $emotion_array = array_values($emotion_array["emotions_array"]);
        $diary = $this->query();
        foreach($emotion_array as $emotion_id){
        $diary->whereHas('emotions', function($q) use($emotion_id) {
                $q->where('diary_emotion.emotion_id', $emotion_id);
        });}
        return $diary->paginate(5);
    }
}
