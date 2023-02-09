<?php

use App\Http\Controllers\Beranda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
// Route::get('login', [LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout','logout');
});

Route::group(['middleware' => ['auth']],function(){
    Route::group(['middleware'=>['cekUserLogin:admin']],function(){
        Route::resource('beranda',Beranda::class);
    });

    Route::group(['middleware'=>['cekUserLogin:kasir']],function(){
        Route::resource('kasir',Kasir::class);
    });
});

Route::get('/dashboard', function () {
    return view('welcome');
});
Route::post('/dashboard', function () {
    return view('welcome');
});
Route::get('/pre-order', function () {
    return view('pre');
});
Route::get('/pre-ss', function () {
    return view('ss');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/cashier', function () {
    return view('cashier');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/transaction', function () {
    return view('transaction');
});