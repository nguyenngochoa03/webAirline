<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function listpro(Request $request){
        $data = product::all();
        return view('layout.product.list', compact('data'));
    }
    public function addpro(ProductRequest $request){
         if ($request->isMethod('POST')){
             $params = $request ->except('_token');
             if ($request->hasFile('image') && $request->file('image')->isValid()){
                 $image =$request->file('image');
                 $imageName = $image->getClientOriginalName();
                 Storage::disk('public')->putFileAs($image,$imageName);
                 $params['image']=$imageName;
             }
             $data = product::create($params);
             if ($data->id){
                 return redirect()->route('listpro')->with('success','Thêm mới thành công');
             }
         }
        return view('layout.product.add');
    }

    public function editpro(Request $request , $id){
            $data = product::find($id);
            if ($request->isMethod('Post')){
                $params = $request->except('_token');
                if($request->hasFile('image') && $request->file('image')->isValid()){
                    $resultDelete = Storage::disk('public')->delete('storage/'.$data->image);
                    if ($resultDelete){
                        $image =$request->file('image');
                        $imageName = $image->getClientOriginalName();
                        Storage::disk('public')->putFileAs($image,$imageName);
                    }else{
                        $imageName = $data->image;
                    }
                    $params['image'] = $imageName;
                }
                $data->update($params);
                return redirect()->route('listpro');
            }
            return view('layout.product.edit', compact('data'));
    }

    public function deletepro($id){
        $data = product::find($id);
        if (Storage::disk('public')->exists('storage/'.$data->image)){
            $resultDelete = Storage::disk('public')->delete('storage/'.$data->image);
        }
        $data->delete();
        return redirect()->route('listpro');
    }
}
