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

Route::match(['GET','POST'], '/datve/list', [App\Http\Controllers\DatveController::class,'listdatve'])
->name('route_datve_list');
