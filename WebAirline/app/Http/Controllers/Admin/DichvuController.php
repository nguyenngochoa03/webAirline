<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\QuanLyMaGiamGiaRequest;
use App\Models\QuanLyDichVu;
use App\Models\QuanLyMaGiamGia;
use Illuminate\Http\Request;

class DichvuController extends Controller
{
    public function listdichvu(Request $request){
        $upvex = 10;
        $datadichvu = QuanLyDichVu::paginate($upvex);
        return view('admin.quanlydichvu.list',compact('datadichvu'));
    }
    public function adddichvu(QuanLyMaGiamGiaRequest $request){
        $title = 'Thêm mã dịch vụ';
        if ($request->isMethod('POST')) {
            // lấy tất cả các dữ liệu trừ token

            $params = $request->except("token");
            // nếu tồn tại flie post lên
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $params['image'] = uploadFile('hinh', $request->file('image'));
            }
            $student = Student::create($params);
            if ($student->id) {
                Session::flash('success', 'Thêm mới thành công sinh viên ');
                return redirect()->route('route_dichvu_list');
            }
        }

        return view('admin.quanlydichvu.add', compact('title'));
    }

    public function editamgia( $request,$MaGiamGia){
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
            return redirect()->route('route_magiamgia_list')->with('error', 'Không tìm thấy vé máy bay'); // Xử lý khi không tìm thấy dữ liệu
        }
        return view('admin.quanlymagiamgia.edit', compact('value', 'title'));
    }

    public function deletemagiamgia($MaGiamGia){
        QuanLyMaGiamGia::find($MaGiamGia)->delete();
        return redirect()->route('route_magiamgia_list')->with('success', 'Xoá thành công');
    }
}
