<?php
/*******************************
    Author : Sibin V M
    Title : Database Seeder
    Created Date : 10-06-2022
********************************/

namespace Database\Seeders;

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
        // insert 10 rows of data into the Blog Model
        \App\Models\Blog::factory(10)->create(); 
    }
}
