<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiaryRequest;
use App\Diary;

class DiaryController extends Controller
{
    public function index(Diary $diary)
    {
        return view('diaries/index')->with(['diaries' => $diary->getPaginateByLimit()]);
    }
    
    public function show(Diary $diary)
    {
        return view('diaries/show')->with(['diary' => $diary]);
    }
    
    public function create()
    {
        return view('diaries/create');
    }
    
    public function store(DiaryRequest $request, Diary $diary)
    {
        $input = $request['diary'];
        $diary->fill($input)->save();
        
        return redirect('/diaries/' . $diary->id);
    }
    
    public function edit(Diary $diary)
    {
        return view('diaries/edit')->with(['diary' => $diary]);
    }
    
    public function update(DiaryRequest $request, Diary $diary)
    {
        $input_diary = $request['diary'];
        $diary->fill($input_diary)->save();
    
        return redirect('/diaries/' . $diary->id);
    }
    
    public function delete(Diary $diary)
    {
        $diary->delete();
        return redirect('/diaries');
    }
}
