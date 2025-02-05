<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;

class OrderDetailSeeder extends Seeder
{
    public function run()
    {
        $orders = Order::all();
        $products = Product::all();

        foreach ($orders as $order) {
            OrderDetail::factory(3)->create([
                'order_id' => $order->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 5), // กำหนดจำนวนสุ่มระหว่าง 1 ถึง 5
            ]);
        }
    }
}
