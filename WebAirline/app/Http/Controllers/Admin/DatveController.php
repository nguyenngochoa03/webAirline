<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuanLyDatVeRequest;
use App\Models\QuanLyDatVe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $data->DiemKhoiHanh = $request->DiemKhoiHanh;
            $data->DiemDen = $request->DiemDen;
            $data->NgayDatVe = $request->NgayDatVe;
            $data->NgayKhoiHanh = $request->NgayKhoiHanh;
            $data->SoLuongVe = $request->SoLuong;
            $data->GiaVe = $request->GiaVe;
            $data->save();
            return redirect()->route('route_datve_list')->with('success','Thêm mới thành công');
        }
        return view('admin.quanlydatve.add',compact('title'));
    }

    public function editdatve(QuanLyDatVeRequest $request,$MaDatVe){
    $title = 'Edit vé máy bay ' . $MaDatVe;

    // Kiểm tra nếu là phương thức POST và xử lý khi người dùng submit form
    if ($request->isMethod('post')) {
        $data = QuanLyDatVe::find($MaDatVe);
        $data->DiemKhoiHanh = $request->DiemKhoiHanh;
        $data->DiemDen = $request->DiemDen;
        $data->NgayDatVe = $request->NgayDatVe;
        $data->NgayKhoiHanh = $request->NgayKhoiHanh;
        $data->SoLuongVe = $request->SoLuong;
        $data->GiaVe = $request->GiaVe;
        $data->save();

        return redirect()->route('route_datve_list')->with('success', 'Cập nhật thành công');
    }

    // Lấy dữ liệu vé máy bay từ cơ sở dữ liệu
    $value = QuanLyDatVe::find($MaDatVe);
    if (!$value) {
        return redirect()->route('route_datve_list')->with('error', 'Không tìm thấy vé máy bay'); // Xử lý khi không tìm thấy dữ liệu
    }
    return view('admin.quanlydatve.edit', compact('value', 'title'));
}

  public function deletedatve($MaDatVe){
    QuanLyDatVe::find($MaDatVe)->delete();
    return redirect()->route('route_datve_list')->with('success', 'Xoá thành công');
  }
}


