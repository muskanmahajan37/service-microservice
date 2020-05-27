<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Database\Eloquent;

class CategoryController extends Controller
{



    public function store(Request $request){
        $data = $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
        ]);

        $category = new Category($data);
        $category->save();
        return response()->json([
            'created_category'=>$category,
            'message' => 'Successfully created category!'
        ], 201);

    }


    public function index(){
        $category = Category::all();
        return $category;
    }
    public function findByCategory(Category $category)
    {
        $subCategories = $category->load("subcategories");
        $subFiltred = $subCategories["subcategories"];
        return response()->json($subFiltred, 201);
    }
    public function show(Category $category){
        $subcategory = $this->findByCategory($category);
        $category =Category::find($category);
       $category['subcategory']=$subcategory;
        return response()->json([
            'category'=>$category,
       ], 201);
    }


}
