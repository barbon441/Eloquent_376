<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::factory(20)->create(); // สร้างลูกค้า 20 รายการ
    }
}
