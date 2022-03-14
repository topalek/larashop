<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->locale = 'ru_RU';
        return [
            'title'       => $this->faker->sentence,
            'price'       => $this->faker->numberBetween(100, 1500),
            'new_price'   => $this->faker->boolean ? $this->faker->numberBetween(100, 1500) : null,
            'in_stock'    => $this->faker->boolean,
            'description' => $this->faker->realText(),
        ];
    }
}
