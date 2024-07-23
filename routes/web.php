<?php

use App\Http\Controllers\BinhluanController;
use App\Http\Controllers\ChucvuController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\DonhangController;
use App\Http\Controllers\GiohangController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TaiKhoanController;
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
    return view('welcome');
});

Route::resource('sanpham',SanPhamController::class);
Route::resource('danhmuc',DanhmucController::class);
Route::resource('taikhoan',TaiKhoanController::class);
Route::resource('chucvu',ChucvuController::class);
Route::resource('binhluan',BinhluanController::class);
Route::resource('donhang', DonhangController::class);
Route::resource('giohang', GiohangController::class);

