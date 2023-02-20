<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = ['id_barang', 'nama_barang', 'stock', 'harga'];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
