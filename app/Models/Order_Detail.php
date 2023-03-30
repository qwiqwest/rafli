<?php

namespace App\Models;

use App\Models\Barang;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_details';
    protected $fillable = ['company_name', 'company_email',
                            'company_phone', 'company_address',
                            'company_fax'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
