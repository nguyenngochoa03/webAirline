<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
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
    
    // Route quản lý đặt vé
    Route::match(['GET','POST'], '/datve/list', [App\Http\Controllers\DatveController::class,'listdatve'])
        ->name('route_datve_list');

    Route::match(['GET','POST'], '/datve/add', [App\Http\Controllers\DatveController::class,'adddatve'])
        ->name('route_datve_add');
});

