<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'number' => random_int(100,500),
            'description' => $this->faker->text(500),
            'price' => random_int(1000,5000),
            'type' => $this->faker->word,
            'property_image' => $this->faker->url,
            'user_id' => random_int(1,2)
        ];
    }
}
