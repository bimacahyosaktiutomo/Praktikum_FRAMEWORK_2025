<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lecturer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numerify('22#######'), // contoh format NIM
            'nama' => $this->faker->name(),
            'kelas' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'angkatan' => $this->faker->numberBetween(2018, 2025),

            //OPTIONAL comment
            // 'lecturer_id' => Lecturer::factory(),
        ];
    }
}
