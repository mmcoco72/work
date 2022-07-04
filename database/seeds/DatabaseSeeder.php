<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PostTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(Category_PostTableSeeder::class);
         $this->call(DiaryTableSeeder::class);
    }
}
