<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['username', 'name_lengkap', 'jk', 'alamat', 'nomor_telepon', 'email', 'password' ,'role'];
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
