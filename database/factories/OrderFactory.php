<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'price'=>$this->faker->randomFloat(2,100,5000),
            'quantity'=>$this->faker->randomFloat(2,100,5000),
            'address'=>$this->faker->address,
            'user_id' => User::first(),

        ];
    }
}
