<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;
use App\Diary;
use App\Emotion;

class DiaryController extends Controller
{
    public function index(Diary $diary)
    {
        return view('diaries/index')->with(['diaries' => $diary->getPaginateByLimit()]);
    }
    
    public function show(Diary $diary)
    {
        $emotions = Emotion::all();
        return view('diaries/show')->with(['diary' => $diary, 'emotions' => $emotions]);
    }
    
    public function create(Emotion $emotions)
    {
        return view('diaries/create')->with(['emotions' => $emotions->get()]);
    }
    
    public function store(DiaryRequest $request, Diary $diary)
    {
        $input = $request['diary'];
        $input_emotions = $request->emotions_array;
        $diary->fill($input)->save();
        
        $diary->emotions()->attach($input_emotions);
        return redirect('/diaries/' . $diary->id);
    }
    
    public function edit(Diary $diary, Emotion $emotions)
    {   
        $emotions = Emotion::all();
        return view('diaries/edit')->with(['diary' => $diary, 'emotions' => $emotions ]);
    }
    
    public function update(DiaryRequest $request, Diary $diary, Emotion $emotions)
    {
        $input_diary = $request['diary'];
        $input_emotions = $request->emotions_array;
        $diary->fill($input_diary)->save();
        
        $diary->emotions()->sync($input_emotions);
        return redirect('/diaries/' . $diary->id);
    }
    
    public function delete(Diary $diary)
    {
        $diary->delete();
        return redirect('/diaries');
    }
}
