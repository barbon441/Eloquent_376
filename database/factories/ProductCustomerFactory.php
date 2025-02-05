<?php

namespace Database\Factories;

use App\Models\ProductCustomer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCustomerFactory extends Factory
{
    protected $model = ProductCustomer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
