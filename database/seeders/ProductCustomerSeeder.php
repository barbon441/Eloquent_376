<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCustomer;

class ProductCustomerSeeder extends Seeder
{
    public function run()
    {
        ProductCustomer::factory(10)->create();
    }
}
