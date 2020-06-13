<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use App\SubCategory;
use http\Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Database\Eloquent;
use Illuminate\Facades\Storage;
use DB;
use PhpOption\None;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\UploadedFile;




class ServiceController extends Controller
{

    public function index()
    {
        $service = Service::all();
        return response()->json(
            $service, 201
        );
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $service = new Service([
            'name' => $request->name,
            'username'=> $request->username,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'price' => $request->price,
            'description' => $request->description,
            'image' =>$request->image,
            'subcategory_id' => $request->subcategory_id,
        ]);
        $service->save();

        return response()->json([
            'message' => 'Successfully created Service!',
            'Service' => $service
        ], 201);
    }

    public function show(Service $service){
        return $service;
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $service = new Service([
            'name' => $request->name,
            'username'=> $request->username,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'price' => $request->price,
            'description' => $request->description,
            'image' =>$request->image,

        ]);
        $service = Service::find($id);
        $service->save();
        return response()->json([
            'message' => 'Successfully created Service!'
        ], 201);
    }


    public function destroy($service)
    {
        $service = Service::find($service)->first();
        $service->delete();
        return response()->json([
            'message' => 'Successfully deleted Service!'
        ], 201);
    }


    public function tt(){
        return request()->all();
    }

    public function update(Request $request,Service $service)
    {
        $serviceToUpdate = $service;
        $serviceToUpdate->name = empty($request->name) ? $service->name : request()->input("name");
        $serviceToUpdate->image =  empty($request->image) ? $service->image : request()->input("image");
        $serviceToUpdate->category_id =  empty($request->category_id) ? $service->category_id : request()->input("category_id");
        $serviceToUpdate->user_id =  empty($request->user_id) ? $service->user_id : request()->input("user_id");
        $serviceToUpdate->price =  empty($request->price) ? $service->price : request()->input("price");
        $serviceToUpdate->description =  empty($request->description) ? $service->description : request()->input("description");
        $serviceToUpdate->image =  empty($request->image) ? $service->image : request()->input("image");
        $serviceToUpdate->update();
        return response()->json([
            'message' => 'Updated!',
            'service' => $serviceToUpdate
        ], 201);
    }

    public function findByCategory(Category $category)
    {
        $services = $category->load("services");
        return $services->services;
    }
    public function findBySubCategory(SubCategory $subcategory){

        $services = Service::where('subcategory_id',$subcategory->id)->get();
        return $services;
    }
    public function findByUser($user){
        $services = Service::where('user_id',$user)->get();
        return $services;
    }
}
