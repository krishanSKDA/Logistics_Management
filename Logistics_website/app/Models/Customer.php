<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'Customer_name',
        'Customer_email',
        'Customer_phone',
        'Customer_address',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
