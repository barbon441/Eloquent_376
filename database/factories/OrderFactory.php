<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'customer_id' => \App\Models\Customer::factory(),
            'total_price' => $this->faker->randomFloat(2, 100, 1000), // สร้างราคาสุ่ม
        ];
    }
}
