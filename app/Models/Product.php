<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_type_id', 'price', 'quantity'];

    // ความสัมพันธ์กับ ProductType (Many to One)
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    // ความสัมพันธ์กับ OrderDetail (One to Many)
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
