<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {

        $data = [
            'title' => 'Upvex Admin',
//            'message' => 'chào mừng đến với trang Admin',
        ];

        return view('admin.home', $data);
    }
}
