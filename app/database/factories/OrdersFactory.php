<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

class OrdersFactory extends Factory
{
    protected $model = Orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_ref'     => $this->faker->word,
            'customer_name' => $this->faker->name,
        ];
    }
}
