<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['id', 'total_barang', 'total_harga', 'nama_barang', 'sistem_pembayaran', 'waktu', 'nama_kasir'];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}