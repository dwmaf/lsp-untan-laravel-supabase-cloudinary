<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skema>
 */
class SkemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'skema' => 'Okupansi '.fake()->numberBetween(1,10),
            // 'prodi' => 'Prodi '.fake()->numberBetween(1,10)
        ];
    }
}
