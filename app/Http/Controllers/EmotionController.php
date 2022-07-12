<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emotion;

class EmotionController extends Controller
{
    public function index(Emotion $emotions)
    {
        return view('emotions/index')->with(['diaries' => $emotions->getByEmotions(), 'emotions' => $emotions->get()]);
    }
}
