<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Barang;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cashier extends Controller
{
    use HasFactory;

    public function transaksi(){
        $data = Barang::all();
        $orders = Order::all();
        // Last order details
        $lastID = Transaction::min('id');
        $order_receipt = Transaction::where('id', $lastID)->get();
        return view('cashier.transaksi',compact(['data', 'orders', 'order_receipt']));
    }

    public function history(){
        return view('cashier.history-transaksi');
    }

    public function store(Request $request){
        return $request->all();

        DB::transaction(function() use($request){
            $orders = new Order;
            $orders->name = $request->customer_name;
            $orders->save();
            $order_id = $orders->id;

            for($product_id = 0; $product_id < count($request->product_id); $product_id++){

                $transaksi = new Transaction();
                $transaksi->order_id = $order_id;
                $transaksi->product_id = $request->product_id[$product_id];
                $transaksi->unitprice = $request->unitprice[$product_id];
                $transaksi->quantity = $request->quantity[$product_id];
                $transaksi->discount = $request->discount[$product_id];
                $transaksi->amount = $request->amount[$product_id];
                $transaksi->save();
            }
            
            $transaction = new Transaction();
            $transaction->order_id = $order_id;
            $transaction->user_id = auth()->user()->id;
            $transaction->balance = $request->balance;
            $transaction->total_harga = $request->total_harga;
            $transaction->sistem_pembayaran = $request->sistem_pembayaran;
            $transaction->waktu = date('Y-m-d');
            $transaction->save();
            
            $data = Barang::all();
            $transaksi = Transaction::where('id_transaksi', $order_id)->get();
            $orderedby = Order::where('id', $order_id)->get();

            return view('cashier.transaksi',compact(['data', 'transaksi', 'customer_orders']));
        });
        return "Barang gagal dimasukkan! periksa inputnya!!!";
    }
}
