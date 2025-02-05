<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Customer;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $customers = Customer::all();

        Order::factory(30)->create([
            'customer_id' => $customers->random()->id,
        ]);
    }
}
