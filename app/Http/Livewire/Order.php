<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Barang;
use Livewire\Component;

class Order extends Component
{
    public $orders, $data = [], $barcode, $massage = '', $cart;

    public function mount(){
        $this->data = Barang::all();
        $this->cart = Cart::all();
    }

    public function InsertoCart(){
        $countProduct = Barang::where('barcode', $this->barcode)->first();
        
            // if(!$countProduct){
            //     return $this->massage = 'Barang Tidak Ditemukan';
            // }

            // $countCartProduct = Cart::where('product_id', $this->barcode)->count();

            // if($countCartProduct > 0){
            //     return $this->massage =  'Barang' . $countProduct->nama_barang . 'Sudah tersedia di keranjang, mohon masukkan jumlah barang';
            // }

            // $add_to_cart = new Cart;
            // $add_to_cart->product_id = $countProduct->id;
            // $add_to_cart->product_qty = $countProduct->stock;
            // $add_to_cart->product_price = $countProduct->harga;
            // $add_to_cart->user_id = auth()->user()->id;
            // $add_to_cart->save();

            // $this->barcode = '';
            // return $this->massage = "Barabg Berhasil Ditambahkan!!!!";

        dd($countProduct);
    }

    public function render()
    {
        return view('livewire.order');
    }
}
