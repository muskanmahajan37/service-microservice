<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create(['user_id'=>2,'category_id'=>1,'username'=>'taulantdema','subcategory_id'=>1,'name'=>'I will develop laravel', 'image'=>'noimage.jpg','price'=>22,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>2,'username'=>'taulantdema','subcategory_id'=>8,'name'=>'I will develop React', 'image'=>'noimage.jpg','price'=>11,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>1,'username'=>'taulantdema','subcategory_id'=>2,'name'=>'I will develop php', 'image'=>'noimage.jpg','price'=>44,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>1,'username'=>'taulantdema','subcategory_id'=>3,'name'=>'I will develop lumen', 'image'=>'noimage.jpg','price'=>44,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>1,'username'=>'taulantdema','subcategory_id'=>4,'name'=>'I will develop java', 'image'=>'noimage.jpg','price'=>54,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>1,'username'=>'taulantdema','subcategory_id'=>1,'name'=>'I will develop laravel', 'image'=>'noimage.jpg','price'=>11,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>2,'username'=>'taulantdema','subcategory_id'=>5,'name'=>'I will preparing accounts', 'image'=>'noimage.jpg','price'=>25,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>2,'username'=>'taulantdema','subcategory_id'=>6,'name'=>'I will prepare tax returns', 'image'=>'noimage.jpg','price'=>70,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>2,'username'=>'taulantdema','subcategory_id'=>7,'name'=>'I will make business plans', 'image'=>'noimage.jpg','price'=>55,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>1,'username'=>'taulantdema','subcategory_id'=>1,'name'=>'I will develop laravel', 'image'=>'noimage.jpg','price'=>35,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>2,'username'=>'taulantdema','subcategory_id'=>5,'name'=>'I will preparing accounts', 'image'=>'noimage.jpg','price'=>22,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>2,'username'=>'taulantdema','subcategory_id'=>6,'name'=>'I will prepare tax returns', 'image'=>'noimage.jpg','price'=>16,'description'=>'Some Description']);
        Service::create(['user_id'=>2,'category_id'=>1,'username'=>'taulantdema','subcategory_id'=>2,'name'=>'I will develop php project', 'image'=>'noimage.jpg','price'=>20,'description'=>'Some Description']);



    }
}
