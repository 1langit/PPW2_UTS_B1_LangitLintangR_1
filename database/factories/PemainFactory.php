<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PemainModel>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pemain' => $this->faker->name(),
            'no_punggung' => $this->faker->randomNumber($min=1, $max=11),
            'posisi' => $this->faker->text($maxNbChars=10)
        ];
    }
}
