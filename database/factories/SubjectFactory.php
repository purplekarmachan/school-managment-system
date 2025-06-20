<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Mathematics',
                'Physics',
                'Chemistry',
                'Biology',
                'History',
                'Geography',
                'English',
                'Literature',
                'Physical Education',
                'Art',
                'Music',
                'Psychology',
                'Philosophy'
            ])
        ];
    }
}
