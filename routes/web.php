<?php

use App\Http\Controllers\Beranda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\VendorsController;
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
Route::get('/admin', [Beranda::class,'admin'])->middleware('checkadmin');
Route::get('/kasir', [Beranda::class,'kasir'])->middleware('checkkasir');


Route::post('/dasboard ', [LoginController::class,'login'])->name('dasboard');

//barang
Route::get('/barang', [BarangController::class, 'index'])->middleware('checkadmin');

Route::get('/barang/view-barang', function(){
    return view('barang.view');
});

Route::get('/barang/tambah-barang', [BarangController::class, 'add'])->middleware('checkadmin');
Route::post('/barang/tambah-barang/store', [BarangController::class, 'create'])->middleware('checkadmin');
Route::get('/barang/edit/{id_barang}', [BarangController::class, 'edit'])->middleware('checkadmin');
Route::get('/barang/edit/{id_barang}/store', [BarangController::class, 'update'])->middleware('checkadmin');
Route::delete('/barang/delete/{id}', [BarangController::class, 'delete'])->middleware('checkadmin');

//barang
Route::get('/kasir', [KasirController::class, 'index'])->middleware('checkadmin');
Route::get('/kasir/add', [KasirController::class, 'add'])->middleware('checkadmin');
Route::post('/kasir/add/store', [KasirController::class, 'create'])->middleware('checkadmin');
Route::get('/kasir/edit/{id}', [KasirController::class, 'edit'])->middleware('checkadmin');
Route::get('/kasir/edit/{id}/store', [KasirController::class, 'update'])->middleware('checkadmin');
Route::delete('/kasir/delete/{id}', [KasirController::class, 'delete'])->middleware('checkadmin');

//barang
Route::get('/vendors', [VendorsController::class, 'index'])->middleware('checkadmin');
Route::get('/vendors/add', [VendorsController::class, 'add'])->middleware('checkadmin');
Route::post('/vendors/add/store', [VendorsController::class, 'create'])->middleware('checkadmin');
Route::get('/vendors/edit/{id}', [VendorsController::class, 'edit'])->middleware('checkadmin');
Route::get('/vendors/edit/{id}/store', [VendorsController::class, 'update'])->middleware('checkadmin');
Route::delete('/vendors/delete/{id}', [VendorsController::class, 'delete'])->middleware('checkadmin');

//logout
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

//test
Route::get('/test', [BarangController::class, 'test']);