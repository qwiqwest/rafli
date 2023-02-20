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
Route::get('/', function(){
    return view('login.login');
});
Route::get('/dasboard', [LoginController::class,'login'])->name('dasboard');
Route::post('/dasboard', [LoginController::class,'login'])->name('dasboard');
Route::get('/admin', [LoginController::class,'adminn'])->name('admin')->middleware('checkrole');
// Route::post('/dashboard', function () {
//     return view('welcome');
// });
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/tambah-barang', [BarangController::class, 'create']);
Route::get('/logout', [LoginController::class,'logout'])->name('logout');