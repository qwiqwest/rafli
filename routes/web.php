<?php

use App\Http\Controllers\Beranda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login
Route::get('/', function(){
    return view('login.login');
});

Route::post('/dasboard ', [LoginController::class,'login'])->name('dasboard');

//barang
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/tambah-barang', [BarangController::class, 'create']);
Route::get('/barang/edit/{id_barang}', [BarangController::class, 'index']);
Route::delete('/barang/delete/{id_barang}', [BarangController::class, 'delete']);
Route::get('/admin', [Beranda::class,'admin'])->middleware('checkadmin');
Route::get('/kasir', [Beranda::class,'kasir'])->middleware('checkkasir');
    
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
