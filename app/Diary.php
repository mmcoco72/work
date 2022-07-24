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
    
    public function Search($emotion_array)//$emotion_array =emotion_id
    {   
        $emotion_ids = array_values($emotion_array["emotions_array"]);
        $diary = $this->query();
        foreach($emotion_ids as $emotion_id){
        $diary->whereHas('emotions', function($q) use($emotion_id) {
                $q->where('diary_emotion.emotion_id', $emotion_id);
        });}
        return $diary->paginate(10);
    }
    
    public function relateWithEmotionAndDegree($degree, $input_emotions)
    {
        foreach($degree as $key => $deg){  //$deg = 選択したemotion_degreeの値
            $emotion=Emotion::find($key+1)->id;  //$keyとid(emotionstable)調節
                if(intval($degree[$key]) > 0  //$keyを参照して$degreeの値とを0比較
                    && !array_search($emotion, $input_emotions)//既存の$input_emotion以外紐付け可
                ){  
                    $this->emotions()->attach($emotion,[
                    'degree' => intval($degree[$key])
                    ]); 
                }   
        }
    }
    
    public function updatedWithEmotionAndDegree($degree)
    {
        foreach($degree as $key => $deg){  //$deg = 選択したemotion_degreeの値
                if(intval($degree[$key]) > 0)//$keyを参照して$degreeの値とを0比較
                {  
                    $emotion=Emotion::find($key+1)->id;  //$keyとid(emotionstable)調節
                    $this->emotions()->updateExistingPivot($emotion,[
                    'degree' => intval($degree[$key])
                    ]); 
                }   
        }
    }
    
    // public function detachEmotionAndDegree($degree, $input_emotions)
    // {   
    //     foreach($degree as $key => $deg){  
    //                 $emotion=Emotion::find($key+1)->id;
    //         if(array_search($emotion, $input_emotions)){//選択しないemotion,degree排除
    //             $this->emotions()->detach($emotion,[
    //                     'degree' => intval($degree[$key])
    //                     ]); 
    //         }   
    //     }
    // }
}
