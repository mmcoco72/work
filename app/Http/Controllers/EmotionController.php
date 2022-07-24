<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emotion;
use App\Http\Requests\DiaryRequest;

class EmotionController extends Controller
{
    public function create()
    {
        return view('emotions/create');
    }
    
    public function store(DiaryRequest $request, Emotion $emotion)
    {
        $input_emotion = $request['emotion'];
        $emotion->fill($input_emotion)->save();
        
        return redirect('/diaries/create');
    }
    
    public function show(Emotion $emotion)
    {
        return view('emotions/show')->with(['emotion' => $emotion]);
    }
    
    public function delete(Emotion $emotion)
    {
        $emotion->delete();
        return redirect('/diaries/create');
    }
}
