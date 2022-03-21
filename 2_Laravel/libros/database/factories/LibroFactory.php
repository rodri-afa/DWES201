<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "titulo" => $this->faker->word(),
            "autor" => $this->faker->name(),
            "fecha" => $this->faker->numberBetween($min = 1900, $max = 2020),
        ];
    }
}
