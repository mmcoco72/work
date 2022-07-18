<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Emotion;

class Diary extends Model
{   
    protected $table = 'diaries';
    protected $fillable = [
        'title',
        'body',
        'degree'
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->with('emotions')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function emotions()
    {
        return $this->belongsToMany('App\Emotion')->withPivot('degree');
    }
    
    public function getSearchDiaries($emotion_array)//$emotion_array =emotion_id
    {
        $emotion_ids = array_values($emotion_array["emotions_array"]);
        $diary = $this->query();
        foreach($emotion_ids as $emotion_id){
        $diary->whereHas('emotions', function($q) use($emotion_id) {
                $q->where('diary_emotion.emotion_id', $emotion_id);
        });}
        return $diary->paginate(10);
    }
    
    public function relateWithEmotionAndDegree($input_emotions, $degree){
        foreach($degree as $key => $deg){ //$key = 0,1...
                if(intval($degree[$key]) > 0){
                    $this->emotions()->attach($input_emotions[$key],[
                    'degree' => intval($degree[$key])
                    ]);
                }
        }
    }
}
