<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Product;
use App\Models\OrderDetail;



class Order extends Model
{
    use HasFactory;
   

    protected $fillable = [
        'customer_id',
        'order_number',
        'order_date',
        'status',
        'total_amount',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
