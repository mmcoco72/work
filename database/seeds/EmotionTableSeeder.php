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
                'name' => '怒り', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'name' => '不安', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'name' => '悲しみ', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'name' => '安心', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'name' => 'ワクワク', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'name' => '喜び', 'created_at' =>now(), 'updated_at' =>now() 
            ]]);
    }
}
