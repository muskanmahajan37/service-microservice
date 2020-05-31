<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Programming', 'description' => 'Get all the technical bells and whistles without paying for a programming degree']);
        Category::create(['name' => 'Economy', 'description' => 'Your business = your passion. Outsource smaller tasks so you can focus on growth']);
        Category::create(['name' => 'Music', 'description' => 'You have a message. Let the world hear it with music, audio & voice services']);
        Category::create(['name' => 'Writting & Translation', 'description' => 'Have a way with words. Get copy, translation & editorial work from freelancers']);
        Category::create(['name' => 'Marketing', 'description' => 'Update and upgrade your business online']);
        Category::create(['name' => 'Graphics & Design', 'description' => 'A single place, millions of creative talents']);
    }
}
