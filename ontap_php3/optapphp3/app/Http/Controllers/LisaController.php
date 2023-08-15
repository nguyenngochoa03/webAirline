<?php

namespace App\Http\Controllers;

use App\Http\Requests\LisaRequest;
use App\Models\lisa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LisaController extends Controller
{
    public function listlisa(){
        $data = lisa::all();
        return view('layout.hoa.list',compact('data'));
    }
    public function addlisa(LisaRequest $request ){
            if ($request->isMethod('POST')){
                $params = $request->except('_token');
                if ($request ->hasFile('image') && $request->file('image')->isValid()){
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    Storage::disk('public')->putFileAs($image, $imageName);
                    $params['image']= $imageName;
                }
                $data = lisa::create($params);
                if ($data->id){
                    return redirect()->route('listlisa')->with('suscces','thêm mới ');
                }

            }
            return view('layout.hoa.add');
    }
    public function editlisa(Request $request,$id){
        $data = lisa::find($id);
        if ($request->isMethod('POST')){
            $params = $request->except('_token');
            if ($request ->hasFile('image') && $request->file('image')->isValid()){
                $resultDelete = Storage::disk('public')->delete('/'.$data->image);
                if ($resultDelete){
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    Storage::disk('public')->putFileAs($image, $imageName);
                }else{
                    $imageName = $data->image;
                }
                $params['image']= $imageName;
            }
            $data->update($params);
           return redirect()->route('listlisa');
        }

        return view('layout.hoa.edit',compact('data'));
    }
    public function deletelisa($id){
        $data = lisa::find($id);
        if(Storage::disk('public')->delete('/'.$data->image)){
            $resultDelete = Storage::disk('public')->delete('/'.$data->image);
        }
        $data->delete();
        return redirect()->route('listlisa');
    }
}
