<?php

namespace App\Http\Controllers;

use App\Http\Requests\BooksRequest;
use App\Models\books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function listbook(Request $request){
        $data = books::all();
        return view('layout.book.list',compact('data'));
    }
    public function addbook(BooksRequest $request){
        if ($request->isMethod('Post')){
            $params = $request->except('_token');
            if ($request->hasFile('image') && $request->file('image')->isValid()){
                $image = $request->file('image');
                $imageName = $image->getClientOriginalName();
                Storage::disk('public')->putFileAs($image,$imageName);
                $params['image']=$imageName;
            }
            $data = books::create($params);
            if ($data->id){
                return redirect()->route('listbook')->with('success', 'theem thanh cong');
            }
        }
        return view('layout.book.add');
    }
    public function editbook(Request $request, $id){
        $data = books::find($id);
        if ($request->isMethod('Post')){
            $params = $request->except('_token');
            if ($request->hasFile('image') && $request->file('image')->isValid()){
                $resultDelete = Storage::disk('public')->delete('/'.$data->image);
                if ($resultDelete){
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    Storage::disk('public')->putFileAs($image,$imageName);
                }else{
                    $imageName = $data->image;
                }
                $params['image']=$imageName;
            }
            $data->update($params);
            return redirect()->route('listbook');
        }
        return view('layout.book.edit',compact('data'));
    }
    public function deletebook($id){
        $data = books::find($id);
        if(Storage::disk('public')->delete('/'.$data->image)){
            $resultDelete = Storage::disk('public')->delete('/'.$data->image);
        }
        $data->delete();
        return redirect()->route('listbook');
    }
}
