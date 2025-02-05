<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price'];

    // ความสัมพันธ์กับ Order (Many to One)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // ความสัมพันธ์กับ Product (Many to One)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
