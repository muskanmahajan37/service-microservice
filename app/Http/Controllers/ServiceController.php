<?php

namespace App\Http\Controllers;

use App\Service;
use http\Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Database\Eloquent;
use Illuminate\Facades\Storage;
use DB;
use PhpOption\None;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use  Symfony\Component\HttpFoundation\File;
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
//        return $request->image;
//        dd($request->all());

       return request()->all();





//        $image = $request->file('image');
//        return $image;
//        $new_name =$image->getClientOriginalExtension();
//        $image->move(base_path('public/images'), $new_name);
//        if ($request->hasFile('image')) {
//            $filenameWithExt = $request->file('image')->getClientOriginalName();
//            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//            $extension = $request->file('image')->getClientOriginalExtension();
//            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
//        } else {
//            $fileNameToStore = 'noimage.jpg';
//        }

        $service = new Service([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $new_name,
            'subcategory_id' => $request->subcategory_id,
        ]);
        $service->save();

        return response()->json([
            'message' => 'Successfully created Service!',
            'Service' => $service
        ], 201);
    }

    public function show(Service $service)
    {
     return $service;
    }

    public function findByUser(Request $request)
    {
        $id = $request->get('id');
        return Service::where('user_id', $id)->get();
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'category_id' => 'required',
            //            'user_id'=>'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $service = new Service([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $fileNameToStore,

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


    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'name' => 'string',
            'description' => 'string',
            'image' => 'string',

        ]);
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $serviceToUpdate = $service;
        $serviceToUpdate->name = request()->input("name");
        $serviceToUpdate->image = request()->input("image");
        $serviceToUpdate->price = request()->input("price");
        $serviceToUpdate->description = request()->input("description");
        $serviceToUpdate->save();
        return response()->json([
            'message' => 'Updated!',
            'service' => $serviceToUpdate
        ], 201);
    }
}
