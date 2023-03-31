<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Vendors;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = ['id', 'vendor_id', 'nama_barang', 'stock', 'harga', 'barcode'];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendors::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

}
