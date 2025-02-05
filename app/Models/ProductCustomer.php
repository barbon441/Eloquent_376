<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCustomer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
}
