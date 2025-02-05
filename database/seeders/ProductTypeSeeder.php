<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    public function run()
    {
        ProductType::factory(5)->create(); // สร้าง 5 รายการ
    }
}
