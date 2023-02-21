<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda extends Controller
{
    public function index(){
        return view ('welcome');
    }
    public function admin(){
        return view ('admin.admin');
    }
    public function kasir(){
        return view ('kasir.kasir');
    }
}
