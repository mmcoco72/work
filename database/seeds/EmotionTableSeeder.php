<?php

use Illuminate\Database\Seeder;

class EmotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emotions')->insert([[
                'emotion' => '怒り', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'emotion' => '不安', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'emotion' => '悲しみ', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'emotion' => '安心', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'emotion' => 'ワクワク', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'emotion' => '喜び', 'created_at' =>now(), 'updated_at' =>now() 
            ]]);
    }
}
