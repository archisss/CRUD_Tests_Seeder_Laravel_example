<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetWalks>
 */
class PetWalksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => fake()->name('11'),
            'location' => fake()->sentence('el parque'),
            'walk_date' => fake()->date('2024-14-02'),
        ];
    }
}
