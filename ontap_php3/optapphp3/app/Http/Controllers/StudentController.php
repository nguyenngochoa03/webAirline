<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
        public function list(){
            $data = students::all();
            return view('layout.list',compact('data'));
        }
        public function add(Request $request){
            $route = route("route_student_add");
            if($request->isMethod('POST')){
                $request->validate([
                    'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'name'=> 'required',
                    'gender'=>'required',
                    'phone'=>'required|unique',
                    'addess'=>'required',
                ]);
                if ($request->hasFile('image') && $request->file('image')->isValid()){
                    $image = $request->file('image');
                    $imageName = $image->getClientOriginalName();
                    Storage::disk('public')->putFileAs($image,$imageName);
                    $data_student = new students;
                    $data_student->name = $request->name;
                    $data_student->gender = $request->gender;
                    $data_student->phone = $request->phone;
                    $data_student->addess = $request->addess;
                    $data_student->image = $imageName;
                    $result = $data_student->save();
                    return redirect()->route('list')->with('success', 'Thêm mới thành công');
                }
                return redirect()->route('route_student_add')->with('error', 'No Image');
            }
            return view('layout.add');
        }
       public function edit(Request $request,$id){
            $route = route('route_student_add',$id);
            $data_student = students::find($id);
            if($request->isMethod('POST')){
                if($request->hasFile('image') && $request->file('image')->isValid()){
                    $resultDelete = Storage::disk('public')->delete('image/'.$data_student->students);
                    if ($resultDelete){
                        $image = $request->file('image');
                        $imageName = $image->getClientOriginalName();
                        Storage::disk('public')->putFileAs('image',$image,$imageName);
                    }

                } else{
                    $imageName = $data_student->student;
                }
                $data_student->name = $request->name;
                $data_student->gender = $request->gender;
                $data_student->phone = $request->phone;
                $data_student->addess = $request->addess;
                $data_student->image = $imageName;
                $data_student->save();
                return redirect()->route('list');

            }
           return view('layout.edit');
       }
}
