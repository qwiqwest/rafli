<?php

use App\Http\Controllers\Beranda;
use App\Http\Controllers\Cashier;
use PhpParser\Node\Expr\FuncCall;   
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\VendorsController;
use App\Http\Livewire\Product;
use App\Http\Livewire\Cart;

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

//{{ admin }}
//login
Route::get('/', function(){
    return view('login.login');
});
Route::get('/admin', [Beranda::class,'admin'])->middleware('checkadmin');
Route::get('/cashier', [Beranda::class,'cashier'])->middleware('checkkasir');


Route::post('/dasboard ', [LoginController::class,'login'])->name('dasboard');

//barang
Route::get('/barang', [BarangController::class, 'index'])->middleware('checkadmin');

Route::get('/barang/view-barang', function(){
    return view('barang.view');
});

//barang
Route::get('/barang/tambah-barang', [BarangController::class, 'add'])->middleware('checkadmin');
Route::get('/barang/cetak-barcode', [BarangController::class, 'barcode'])->middleware('checkadmin');
Route::post('/barang/tambah-barang/store', [BarangController::class, 'create'])->middleware('checkadmin');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->middleware('checkadmin');
Route::put('/barang/edit/{id}/store', [BarangController::class, 'update'])->middleware('checkadmin');
Route::delete('/barang/delete/{id}', [BarangController::class, 'delete'])->middleware('checkadmin');

//kasir
Route::get('/kasir', [KasirController::class, 'index'])->middleware('checkadmin');
Route::get('/kasir/add', [KasirController::class, 'add'])->middleware('checkadmin');
Route::post('/kasir/add/store', [KasirController::class, 'create'])->middleware('checkadmin');
Route::get('/kasir/edit/{id}', [KasirController::class, 'edit'])->middleware('checkadmin');
Route::put('/kasir/edit/{id}/store', [KasirController::class, 'update'])->middleware('checkadmin');
Route::delete('/kasir/delete/{id}', [KasirController::class, 'delete'])->middleware('checkadmin');

//vendors
Route::get('/vendors', [VendorsController::class, 'index'])->middleware('checkadmin');
Route::get('/vendors/add', [VendorsController::class, 'add'])->middleware('checkadmin');
Route::post('/vendors/add/store', [VendorsController::class, 'create'])->middleware('checkadmin');
Route::get('/vendors/edit/{id_vendors}', [VendorsController::class, 'edit'])->middleware('checkadmin');
Route::put('/vendors/edit/{id_vendors}/store', [VendorsController::class, 'update'])->middleware('checkadmin');
Route::delete('/vendors/delete/{id}', [VendorsController::class, 'delete'])->middleware('checkadmin');


//logout
Route::get('/logout', [LoginController::class,'logout'])->name('logout');


//{{ cashier }}
//transaksi
Route::get('/history-transaksi', function(){
    return view('transaksi.history');
});
Route::get('/laporan-transaksi', function(){
    return view('transaksi.laporan');
});
//transaksi(Kasir)

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//{{ cashier }}
Route::get('/transaksi', [Cashier::class, 'transaksi'])->middleware('checkkasir');
Route::get('/transaksi/history', [Cashier::class, 'history'])->middleware('checkkasir');