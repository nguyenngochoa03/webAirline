<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DichvuController;
use App\Http\Controllers\Admin\GiamGiaController;
use App\Http\Controllers\Client\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('trangchu', function () {return view('client.home');})->name('trangchu');
Route::get('blog', [ClientController::class, 'blog_air'])->name('blog_air');
Route::get('ariline', [ClientController::class, 'air_404'])->name('air_404');
Route::get('service', [ClientController::class, 'details'])->name('details');
Route::get('giamgiaup', [ClientController::class, 'giamgia'])->name('giamgia');
Route::match(['GET','POST'], '/datve/add', [ClientController::class,'adddatve'])
    ->name('route_datveup_add');

Route::match(['GET', 'POST'],'login', [LoginController::class, 'login'])->name('login');
Route::match(['GET', 'POST'],'register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class,'register'])->name('register');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('up-admin')->middleware(['auth'])->group(function () {
    Route::get('upvex-admin', [HomeController::class, 'index'])->name('admin');

// Route quản lý đặt vé
Route::match(['GET','POST'], '/datve/list', [App\Http\Controllers\Admin\DatveController::class,'listdatve'])
    ->name('route_datve_list');
Route::match(['GET','POST'], '/datve/add', [App\Http\Controllers\Admin\DatveController::class,'adddatve'])
    ->name('route_datve_add');
Route::match(['GET','POST'], '/datve/edit/{MaDatVe}', [App\Http\Controllers\Admin\DatveController::class,'editdatve'])
    ->name('route_datve_edit');
Route::match(['GET','POST'], '/datve/delete/{MaDatVe}', [App\Http\Controllers\Admin\DatveController::class,'deletedatve'])
    ->name('route_datve_delete');


// Route quản lý dịch vụ
Route::match(['GET','POST'], '/dichvu/list', [App\Http\Controllers\Admin\DichvuController::class,'listdichvu'])
    ->name('route_dichvu_list');
Route::match(['GET','POST'], '/dichvu/add', [App\Http\Controllers\Admin\DichvuController::class,'adddichvu'])
    ->name('route_dichvu_adđ');
Route::match(['GET','POST'], '/dichvu/edit', [App\Http\Controllers\Admin\DichvuController::class,'editdichvu'])
    ->name('route_dichvu_edit');
Route::match(['GET','POST'], '/dichvu/delete', [App\Http\Controllers\Admin\DichvuController::class,'deletedichvu'])
    ->name('route_dichvu_delete');

// Route quản lý mã giá giảm giá
Route::match(['GET','POST'], '/magiamgia/list', [App\Http\Controllers\Admin\GiamGiaController::class,'listmagiamgia'])
    ->name('route_magiamgia_list');
Route::match(['GET','POST'], '/magiamgia/add', [App\Http\Controllers\Admin\GiamGiaController::class,'addmagiamgia'])
    ->name('route_magiamgia_add');
Route::match(['GET','POST'], '/magiamgia/edit/{MaGiamGia}', [App\Http\Controllers\Admin\GiamGiaController::class,'editmagiamgia'])
    ->name('route_magiamgia_edit');
Route::match(['GET','POST'], '/magiamgia/delete/{MaGiamGia}', [App\Http\Controllers\Admin\GiamGiaController::class,'deletemagiamgia'])
    ->name('route_magiamgia_delete');

});



