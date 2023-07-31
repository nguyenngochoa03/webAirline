<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuanLyDatVeRequest;
use App\Models\QuanLyDatVe;
use Illuminate\Http\Request;

class DatveController extends Controller
{
     public function listdatve(Request $request){
         $upvex = 7;
         $datvedata = QuanLyDatVe::paginate($upvex);
         return view('admin.quanlydatve.list',compact('datvedata'));
     }
    public function adddatve(QuanLyDatVeRequest $request){
        $title = 'Add vé máy bay';
        if ($request->post()){
            $data = new QuanLyDatVe();
            $data->Name = $request->Name;
            $data->NgayDatVe = $request->NgayDatVe;
            $data->NgayKhoiHanh = $request->NgayKhoiHanh;
            $data->SoLuong = $request->SoLuong;
            $data->Giave = $request->Giave;
            $data->save();
            return redirect()->route('route_datve_list')->with('success','Thêm mới thành công');
        }
        return view('admin.quanlydatve.add',compact('title'));
    }
}


