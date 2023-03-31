<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Laporan;
use App\Models\Vendors;
use Illuminate\Http\Request;

class Beranda extends Controller
{
    public function index(){
        return view ('welcome');
    }
    public function admin(){
        $barang = Barang::all();
        $vendors = Vendors::all();
        $totalVendors = $vendors->count();
        $totalBarang = $barang->count();
        return view ('admin.admin', compact('totalBarang', 'totalVendors'));
    }
    public function cashier(){
        return view ('cashier.cashier');
    }
}
