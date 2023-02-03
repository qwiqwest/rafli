<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
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