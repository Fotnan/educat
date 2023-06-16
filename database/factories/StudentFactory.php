<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'last_name' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'email' => fake()->unique()->safeEmail(),
            'personal_code' => fake()->regexify('[1-9]{11}'),
            'symbol' => fake()->lexify(),
            //'end' => fake()->date(),
            //'sert' => fake()->date(),
            'user_id' => fake()->numberBetween(103,112),
        ];
    }
}
