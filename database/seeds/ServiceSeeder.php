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
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>1,'name'=>'I will design stunning wordpress website using divi theme', 'image'=>'wordpress-1.jpg','price'=>22,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>8,'name'=>'I will design and develop a full stack website', 'image'=>'full-stack.jpg','price'=>11,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>2,'name'=>'I will improve your current wordpress website', 'image'=>'wordpress-2.jpg','price'=>44,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>3,'name'=>'I will design and create a fully responsive website with divi theme', 'image'=>'wordpress-3.jpg','price'=>44,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>4,'name'=>'I will install wordpress, theme setup like demo, do customization', 'image'=>'wordpress-4.jpg','price'=>54,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>1,'name'=>'I will fix bugs in your ios app', 'image'=>'swift-1.jpg','price'=>11,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>5,'name'=>'I will implement a functionality or method in swift', 'image'=>'swift-2.jpg','price'=>25,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>6,'name'=>'I will develop ios and android mobile app using react native', 'image'=>'react-native.jpg','price'=>70,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>7,'name'=>'I will develop ios app for iphone and ipad in swift 5', 'image'=>'swift-3.jpg','price'=>55,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>1,'name'=>'I will do android and ios apps in flutter mobile app development', 'image'=>'flutter-1.jpg','price'=>35,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>5,'name'=>'I will help you in your xcode swift project', 'image'=>'swift-4.jpg','price'=>22,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>6,'name'=>'I will be your android app developer', 'image'=>'android-1.jpg','price'=>16,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>2,'name'=>'I will fix bugs and develop xamarin forms apps', 'image'=>'xcode-1.jpg','price'=>20,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>2,'name'=>'I will design and develop modern website with latest technologies', 'image'=>'web-1.jpg','price'=>20,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>2,'name'=>'I will fix, code, develop, debug your HTML website or HTML5 website', 'image'=>'web-2.jpg','price'=>20,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>2,'name'=>'I will do python bots, scraper, automators, and more', 'image'=>'web-3.jpg','price'=>20,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>2,'name'=>'I will develop web app using react js, vue js, node js, php', 'image'=>'web-4.jpg','price'=>20,'description'=>'Some Description']);
        Service::create(['user_id'=>1,'category_id'=>1,'username'=>'user','subcategory_id'=>2,'name'=>'I will be your full stack developer', 'image'=>'full-stack-1.jpg','price'=>20,'description'=>'Some Description']);



    }
}
