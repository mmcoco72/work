<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    
    public function store(Request $request, Diary $diary)
    {
        $input = $request['diary'];
        $diary->fill($input)->save();
        return redirect('/diaries/' . $diary->id);
    }
}
