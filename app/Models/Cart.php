<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $table = "carts";
    protected $fillable = ['product_id', 'product_qty', 'product_price', 'user_id'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
