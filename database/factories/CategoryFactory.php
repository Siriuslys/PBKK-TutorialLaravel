<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->sentence(rand(1, 2), false); // Assign name to a variable

        return [
            'name' => $name, // Use the variable for name
            'slug' => Str::slug($name) . '-' . fake()->unique()->numberBetween(1000, 9999) // Use the same variable for slug
        ];
    }
}
