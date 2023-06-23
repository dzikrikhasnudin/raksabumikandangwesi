<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => Str::ucfirst(fake()->sentence()),
            'slug' => Str::slug(fake()->sentence()),
            'description' => fake()->paragraph(),
            'thumbnail' => 'https://placehold.co/500x500',
            'content' => fake()->text(300),
            'status' => fake()->randomElement(['published', 'draft']),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
