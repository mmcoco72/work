<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'id' => 1, 'name' => 'food', 'created_at' =>now(), 'updated_at' =>now() 
            ],
            [
                'id' => 2, 'name' => 'drink', 'created_at' =>now(), 'updated_at' =>now() 
                ]]);
    }
}
