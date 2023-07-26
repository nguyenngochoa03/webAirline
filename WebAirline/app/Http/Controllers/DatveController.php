<?php

namespace App\Http\Controllers;

use App\Models\QuanLyDatVe;
use Illuminate\Http\Request;

class DatveController extends Controller
{
     public function listdatve(Request $request){
         $upvex = 7;
         $datvedata = QuanLyDatVe::paginate($upvex);
         return view('admin.quanlydatve.list',compact('datvedata'));
     }
}


