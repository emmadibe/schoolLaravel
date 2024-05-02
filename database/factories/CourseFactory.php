<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\curso>
 */
class CourseFactory extends Factory
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

            'name' => $this -> faker -> sentence(),

            'slug' => $this -> faker -> slug(),

            'school' => $this -> faker -> sentence(),

            'subject' => $this -> faker -> sentence(),
            
            'numberGrades' => $this -> faker -> numberBetween(1, 50),

            'numberStudents' => $this -> faker -> numberBetween(1, 50),

        ];
    }
}
