<?php

use Illuminate\Database\Seeder;

class DiaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diaries')->insert([[
                'id' =>1, 'title' => 'title1', 'body' => 'body1', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'id' =>2, 'title' => 'title2', 'body' => 'body2', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'id' =>3, 'title' => 'title3', 'body' => 'body3', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'id' =>4, 'title' => 'title4', 'body' => 'body4', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'id' =>5, 'title' => 'title5', 'body' => 'body5', 'created_at' =>now(), 'updated_at' =>now()
            ],
            [
                'id' =>6, 'title' => 'title6', 'body' => 'body6', 'created_at' =>now(), 'updated_at' =>now() 
            ]]);
    }
}
