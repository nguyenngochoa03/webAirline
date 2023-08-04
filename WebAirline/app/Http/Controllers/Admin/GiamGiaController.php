<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuanLyMaGiamGiaRequest;
use App\Models\QuanLyMaGiamGia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GiamGiaController extends Controller
{
    public function listmagiamgia(Request $request){
        $upvex = 10;
        $datamagiam = QuanLyMaGiamGia::paginate($upvex);
        return view('admin.quanlymagiamgia.list',compact('datamagiam'));
    }
    public function addmagiamgia(QuanLyMaGiamGiaRequest $request){
        $title = 'Thêm mã giảm giá';
        if ($request->post()) {
           $data = new QuanLyMaGiamGia();
        //    $data = 
        }
    }
    
}
