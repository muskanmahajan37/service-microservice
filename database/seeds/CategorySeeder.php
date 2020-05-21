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
        Category::create(['name'=>'Programming', 'description'=>'Some Description']);
        Category::create(['name'=>'Economy', 'description'=>'Some Description']);
        Category::create(['name'=>'Music', 'description'=>'Some Description']);
        Category::create(['name'=>'Writting & Translation', 'description'=>'Some Description']);
        Category::create(['name'=>'Marketing', 'description'=>'Some Description']);
        Category::create(['name'=>'Graphics & Design', 'description'=>'Some Description']);
        Category::create(['name'=>'Business', 'description'=>'Some Description']);
        Category::create(['name'=>'Lifestyle', 'description'=>'Some Description']);
        Category::create(['name'=>'Industries', 'description'=>'Some Description']);
    }
}
