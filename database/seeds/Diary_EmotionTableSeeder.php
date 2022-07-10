<?php

use Illuminate\Database\Seeder;

class Diary_EmotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diary_emotion')->insert([[
                'diary_id' => 1, 'emotion_id' => 1, 
            ],
            [
                'diary_id' => 1, 'emotion_id' => 3, 
            ],
            [
                'diary_id' => 2, 'emotion_id' => 2, 
            ],
            [
                'diary_id' => 2, 'emotion_id' => 6, 
            ],
            [
                'diary_id' => 3, 'emotion_id' => 3, 
            ],
            [
                'diary_id' => 3, 'emotion_id' => 4, 
            ],
            [
                'diary_id' => 4, 'emotion_id' => 4, 
            ],
            [
                'diary_id' => 4, 'emotion_id' => 1, 
            ],
            [
                'diary_id' => 4, 'emotion_id' => 5, 
            ],
            [
                'diary_id' => 5, 'emotion_id' => 2, 
            ],
            [
                'diary_id' => 5, 'emotion_id' => 5, 
            ],
            [
                'diary_id' => 6, 'emotion_id' => 6, 
                ]]);
    }
}
