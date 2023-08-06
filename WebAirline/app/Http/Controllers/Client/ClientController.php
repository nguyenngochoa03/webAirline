<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuanLyDatVeRequest;
use App\Models\QuanLyDatVe;
use Illuminate\Support\Facades\DB;;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function air_404(){
        return view('client.404');
    }
    public function blog_air(){
        return view('client.blog');
    }
    public function details(Request $request){
        $data = DB::table('quanlydatve')->get();
        if ($request->post()){
            $data = new QuanLyDatVe($request->all());
            $data->save();
            dd($data);
            return redirect()->back()->with('success','Thêm mới thành công');
        }
        return view('client.airline.service-details',compact('data'));
    }
}
