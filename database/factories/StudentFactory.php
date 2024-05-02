<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumno>
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
            
            'teacherId' => $this -> faker -> numberBetween(1, 50),

            'courseId' => $this -> faker -> numberBetween(1, 50),

            'name' => $this -> faker -> sentence(),

            'grades' => $this -> faker -> numberBetween(1, 50),

        ];
    }
}
