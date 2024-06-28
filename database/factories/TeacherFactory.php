<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name' => $this -> faker -> sentence(),

            'branch' => $this -> faker -> sentence(),

            'rol' => $this -> faker -> numberBetween(1, 3),

            'email' => $this -> faker -> sentence(),

            'password' => $this -> faker -> password(),

            'photo' => $this->faker ->sentence(),

        ];
    }
}
