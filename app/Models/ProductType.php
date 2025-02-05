<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // ความสัมพันธ์กับ Product (One to Many)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
