<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;
use App\Diary;
use App\Emotion;

class DiaryController extends Controller
{
    public function index(Diary $diary, Emotion $emotions, Request $request)
    {   
        //デフォルト表示
        return view('diaries/index')->with(['diaries' => $diary->getPaginateByLimit(), 'emotions' => $emotions->get()]);
    }
    
    public function search(Diary $diary, Emotion $emotions, Request $request)
    {   
        if($request->input('emotions_array'))
            return view('diaries/search')->with(['diaries' => $diary->Search($request->all()), 'emotions' => $emotions->get()]);
    }   
    
    public function show(Diary $diary)
    {
        $emotions = Emotion::all();
        return view('diaries/show')->with(['diary' => $diary, 'emotions' => $emotions]);
    }
    
    public function create(Emotion $emotions){
        
        return view('diaries/create')->with(['emotions' => $emotions->get()]);
    }
    
    public function store(DiaryRequest $request, Diary $diary)
    {
        $input_diary = $request['diary'];
        $input_emotions = $request->emotions_array;
        $degree = $request->emotion_degree;

        $diary->fill($input_diary)->save();
        $diary->relateWithEmotionAndDegree($degree);
        
        return redirect('/diaries/' . $diary->id);
    }
    
    public function edit(Diary $diary)
    {   
        $emotions = Emotion::all();
        return view('diaries/edit')->with(['diary' => $diary, 'emotions' => $emotions ]);
    }
    
    public function update(DiaryRequest $request, Diary $diary, Emotion $emotions)
    {   
        $input_diary = $request['diary'];
        $input_emotions = $request->emotions_array;
        $degree = $request->emotion_degree;
        
        $diary->fill($input_diary)->save();
        $diary->updatedWithEmotionAndDegree($degree);
        // $diary->detachEmotionAndDegree($degree, $input_emotions);
        
        
        return redirect('/diaries/' . $diary->id);
    }
    
    public function delete(Diary $diary)
    {
        $diary->delete();
        return redirect('/diaries');
    }
}
