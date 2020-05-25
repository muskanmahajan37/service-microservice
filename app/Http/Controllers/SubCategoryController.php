<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'category_id' => 'required',
        ]);

        $subCategory = new SubCategory([
            'name' => $request->name,
            'category_id' => $request->category_id
        ]);
        $subCategory->save();
        $subCategoryFiltred = new SubCategory();
        $subCategoryFiltred->name = $subCategory->name;
        $subCategoryFiltred->id = $subCategory->id;
        $subCategoryFiltred->category_id = $subCategory->category_id;

        return response()->json([
            'Message' => 'Successfully created SubCategory!',
            'Subcategory' => $subCategoryFiltred
        ], 201);
    }

    public function findByCategory(Category $category)
    {
        $subCategories = $category->load("subcategories");
        $subFiltred = $subCategories["subcategories"];
        return response()->json($subFiltred, 201);
    }

    public function show($subcategory){
        $subCategory = SubCategory::find($subcategory);
        return response()->json($subcategory, 201);
    }

    public function update($id){
        $subCategory = SubCategory::findOrFail($id);
    }
}
