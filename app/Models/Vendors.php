<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendors extends Model
{
    use HasFactory;

    protected $table = 'vendors';
    protected $fillable = ['id', 'name', 'phone', 'email', 'address'];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function barang()
    {
        return $this->hasOne(Barang::class);
    }
}