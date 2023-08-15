<?php

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

Route::get('/', function () {
    return view('layout.index');
});
Route::get('list', [App\Http\Controllers\StudentController::class, 'list'])->name('list');
Route::match(['GET','POST'], 'add', [App\Http\Controllers\StudentController::class,'add'])
    ->name('route_student_add');
Route::match(['GET','POST'], 'edit/{id}', [App\Http\Controllers\StudentController::class,'edit'])
    ->name('route_student_edit');
Route::match(['GET','POST'], 'delete/{id}', [App\Http\Controllers\StudentController::class,'delete'])
    ->name('route_student_delete');



Route::get('listpro', [App\Http\Controllers\ProductController::class, 'listpro'])->name('listpro');
Route::match(['GET','POST'], 'addpro', [App\Http\Controllers\ProductController::class,'addpro'])
    ->name('route_pro_add');
Route::match(['GET','POST'], 'editpro/{id}', [App\Http\Controllers\ProductController::class,'editpro'])
    ->name('route_pro_edit');
Route::match(['GET','POST'], 'deletepro/{id}', [App\Http\Controllers\ProductController::class,'deletepro'])
    ->name('route_pro_delete');

Route::get('listbook', [App\Http\Controllers\BooksController::class, 'listbook'])->name('listbook');
Route::match(['GET','POST'], 'addbook', [App\Http\Controllers\BooksController::class,'addbook'])
    ->name('route_book_add');
Route::match(['GET','POST'], 'editbook/{id}', [App\Http\Controllers\BooksController::class,'editbook'])
    ->name('route_book_edit');
Route::match(['GET','POST'], 'deletebook/{id}', [App\Http\Controllers\BooksController::class,'deletebook'])
    ->name('route_book_delete');

Route::get('listlisa', [App\Http\Controllers\LisaController::class, 'listlisa'])->name('listlisa');
Route::match(['GET','POST'],'addlisa',[App\Http\Controllers\LisaController::class,'addlisa'])->name('addlisa');
Route::match(['GET','POST'],'editlisa/{id}',[App\Http\Controllers\LisaController::class,'editlisa'])->name('editlisa');
Route::match(['GET','POST'],'deletelisa/{id}',[App\Http\Controllers\LisaController::class,'deletelisa'])->name('deletelisa');
