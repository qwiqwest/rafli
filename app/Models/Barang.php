<?php

namespace App\Models;

use App\Models\Vendors;
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

    public function vendors()
    {
        return $this->belongsTo(Vendors::class);
    }
}
