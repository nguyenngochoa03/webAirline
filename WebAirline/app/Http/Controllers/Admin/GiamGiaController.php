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
            $data->TenMaGiamGia	= $request->TenMaGiamGia;
            $data->GiaGiamGia = $request->GiaGiamGia;
            $data->save();
            return redirect()->route('route_magiamgia_list')->with('success','Thêm mới thành công');
        }
        return view('admin.quanlymagiamgia.add', compact('title'));
    }

    public function editmagiamgia(QuanLyMaGiamGiaRequest $request, $MaGiamGia){
        $title = 'Edit mã giam gia ' .$MaGiamGia;
        if ($request->isMethod('post')) {
            $data = QuanLyMaGiamGia::find($MaGiamGia);
            $data->TenMaGiamGia = $request->TenMaGiamGia;
            $data->GiaGiamGia = $request->GiaGiamGia;
            $data->save();
            return redirect()->route('route_magiamgia_list')->with('success', 'Cập nhật thành công');
        }

        // Lấy dữ liệu vé máy bay từ cơ sở dữ liệu
        $value = QuanLyMaGiamGia::find($MaGiamGia);
        if (!$value) {
            return redirect()->route('route_magiamgia_list')->with('error', 'Không tìm thấy mã giảm giá'); // Xử lý khi không tìm thấy dữ liệu
        }
        return view('admin.quanlymagiamgia.edit', compact('value', 'title'));
    }

    public function deletemagiamgia($MaGiamGia){
        QuanLyMaGiamGia::find($MaGiamGia)->delete();
        return redirect()->route('route_magiamgia_list')->with('success', 'Xoá thành công');
    }
}
