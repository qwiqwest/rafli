<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Barang;
use App\Models\Transaction;
use App\Models\Order_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cashier extends Controller
{
    public function transaksi(){
        $data = Barang::all();
        $orders = Order::all();
        // Last order details
        $lastID = Order_Detail::max('order_id');
        $order_receipt = Order_Detail::where('order_id', $lastID)->get();
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

                $order_details = new Order_Detail;
                $order_details->order_id = $order_id;
                $order_details->product_id = $request->product_id[$product_id];
                $order_details->unitprice = $request->unitprice[$product_id];
                $order_details->quantity = $request->quantity[$product_id];
                $order_details->discount = $request->discount[$product_id];
                $order_details->amount = $request->amount[$product_id];
                $order_details->save();
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
            $order_details = Order_Detail::where('order_id', $order_id)->get();
            $orderedby = Order::where('id', $order_id)->get();

            return view('cashier.transaksi',
            [
                'barang' => $data,
                'order_details' => $order_details,
                'customer_orders' => $orderedby
            ]);
        });
        return "Barang gagal dimasukkan! periksa inputnya!!!";
    }
}
