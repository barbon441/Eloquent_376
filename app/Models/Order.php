<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'total_price'];

    // ความสัมพันธ์กับ Customer (Many to One)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // ความสัมพันธ์กับ OrderDetail (One to Many)
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
