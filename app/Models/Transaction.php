<?php

namespace App\Models;

use App\Models\Barang;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = ['id_transaksi', 'total_barang', 
                            'total_harga', 'nama_barang', 'sistem_pembayaran', 
                            'waktu', 'nama_kasir'
                            ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function data()
    {
        return $this->belongsTo(Barang::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
