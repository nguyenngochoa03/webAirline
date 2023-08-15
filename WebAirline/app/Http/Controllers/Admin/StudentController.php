<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\students;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    public function liststudent(Request $request){
        $upnex = 10;
        $datastudent = students::paginate($upnex);
        return view('admin.student.list',compact('datastudent'));
    }
}
