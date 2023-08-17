<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pregled>
 */
class PregledFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lekar_id' => $this->faker->randomDigitNot(0),
            'pacijent_id' => $this->faker->randomDigitNot(0),
            'Anamneza' => $this->faker->sentence(3),
            'Terapija' => $this->faker->sentence(3)
        ];
    }
}