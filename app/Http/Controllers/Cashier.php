<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class Cashier extends Controller
{
    public function transaksi(){
        $data = Barang::all();
        return view('cashier.transaksi',compact(['data']));
    }

    public function history(){
        return view('cashier.history-transaksi');
    }

}
