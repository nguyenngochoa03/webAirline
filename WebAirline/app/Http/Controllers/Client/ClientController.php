<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuanLyDatVeRequest;
use App\Models\QuanLyDatVe;
use App\Models\QuanLyMaGiamGia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function air_404(){
        return view('client.404');
    }
    public function blog_air(){
        return view('client.blog');
    }
    public function details(){
        $data = DB::table('quanlydatve')->get();
        return view('client.airline.service-details',compact('data'));
    }
    public function adddatve(Request $request){
        if ($request->post()){
            $data = new QuanLyDatVe();
            $data->DiemKhoiHanh = $request->DiemKhoiHanh;
            $data->DiemDen = $request->DiemDen;
            $data->NgayDatVe = $request->NgayDatVe;
            $data->NgayKhoiHanh = $request->NgayKhoiHanh;
            $data->SoLuongVe = $request->SoLuongVe;
            $data->save();
            return redirect()->back()->with('success','Thêm mới thành công');
        }
    }
    public function giamgia(){
        $data = DB::table('quanlymagiamgia')->get();
        return view('client.discount',compact('data'));
    }
}
