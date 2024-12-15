<?php

use Illuminate\Support\Facades\Route;
use App\Models\nhtsinhvien;
use App\Http\Controllers\nhtsinhviencotroller;
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
    return view('welcome');
});
//sinh vien model

//hien thi trang danh sach sinh vien
Route::get('/nht-sinhvien', [nhtsinhviencotroller::class, 'nhtlist'])->name('nhtsinhvien.nht-list');
//hien thi trang tao moi sinh vien
Route::get('/nht-sinhvien/create', [nhtsinhviencotroller::class, 'nhtcreate'])->name('nhtsinhvien.nht-create');
//hien thi trang submit sinh vien
Route::post('/nht-sinhvien/submit', [nhtsinhviencotroller::class, 'nhtcreatesubmit'])->name('nhtsinhvien.nht-create-submit');
//hien thi trang sua sinh vien
Route::get('/nht-sinhvien/edit/{id}', [nhtsinhviencotroller::class, 'nhtedit'])->name('nhtsinhvien.nht-edit');
//hien thi trang submit sua sinh vien
Route::post('/nht-sinhvien/edit-submit/{id}', [nhtsinhviencotroller::class, 'nhteditsubmit'])->name('nhtsinhvien.nht-edit-submit');
//hien thi trang xoa sinh vien
Route::get('/nht-sinhvien/delete/{id}', [nhtsinhviencotroller::class, 'nhtdelete'])->name('nhtsinhvien.nht-delete');
//hien thi trang tim kiem sinh vien 
Route::get('/nht-sinhvien/search', [nhtsinhviencotroller::class, 'nhtsearch'])->name('nhtsinhvien.nht-search');
//hiển thị thông tin chi tiết của sinh viên 
Route::get('/nht-sinhvien/detail/{id}', [nhtsinhviencotroller::class, 'nhtdetail'])->name('nhtsinhvien.nht-detail');

