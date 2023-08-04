<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('trangchu', function () {
    return view('client.home');
});

Route::prefix('up-admin')->group(function () {
    Route::get('upvex-admin', [HomeController::class, 'index'])->name('admin');
});
Route::middleware('auth')->group(function (){


});

// Route quản lý đặt vé
Route::match(['GET','POST'], '/datve/list', [\App\Http\Controllers\Admin\DatveController::class,'listdatve'])
    ->name('route_datve_list');
Route::match(['GET','POST'], '/datve/add', [\App\Http\Controllers\Admin\DatveController::class,'adddatve'])
    ->name('route_datve_add');
Route::match(['GET','POST'], '/datve/edit/{MaDatVe}', [\App\Http\Controllers\Admin\DatveController::class,'editdatve'])
    ->name('route_datve_edit');
Route::match(['GET','POST'], '/datve/delete/{MaDatVe}', [\App\Http\Controllers\Admin\DatveController::class,'deletedatve'])
    ->name('route_datve_delete');


// Route quản lý dịch vụ
Route::match(['GET','POST'], '/dichvu/list', [\App\Http\Controllers\Admin\DatveController::class,'listdichvu'])
    ->name('route_dichvu_list');  
    
// Route quản lý mã giá giảm giá
Route::match(['GET','POST'], '/magiamgia/list', [\App\Http\Controllers\Admin\GiamGiaController::class,'listmagiamgia'])
    ->name('route_magiamgia_list');  
Route::match(['GET','POST'], '/magiamgia/add', [\App\Http\Controllers\Admin\GiamGiaController::class,'addmagiamgia'])
    ->name('route_magiamgia_add');  
Route::match(['GET','POST'], '/magiamgia/edit', [\App\Http\Controllers\Admin\GiamGiaController::class,'editmagiamgia'])
    ->name('route_magiamgia_edit');     
Route::match(['GET','POST'], '/magiamgia/delete', [\App\Http\Controllers\Admin\GiamGiaController::class,'deletemagiamgia'])
    ->name('route_magiamgia_delete');   
       