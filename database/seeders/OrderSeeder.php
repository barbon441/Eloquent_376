<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\ProductCustomer; 

class OrderSeeder extends Seeder
{
    public function run()
    {
        $customers = ProductCustomer::all();

        Order::factory(30)->create()->each(function ($order) use ($customers) {
            $order->update([
                'customer_id' => $customers->random()->id,
            ]);
        });
    }
}
