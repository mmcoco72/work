<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('posts')->insert([[
            'id' => 1, 'title' => 'title1', 'body' => 'body1', 'created_at' =>now(), 'updated_at' =>now() 
            ],
            [
                'id' => 2, 'title' => 'title2', 'body' => 'body2', 'created_at' =>now(), 'updated_at' =>now() 
                ]]);
    }
}
