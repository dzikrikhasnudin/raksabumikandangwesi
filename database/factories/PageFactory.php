<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => Str::ucfirst(fake()->sentence()),
            'slug' => Str::slug(fake()->sentence()),
            'description' => fake()->paragraph(),
            'content' => fake()->text(300),
            'status' => fake()->randomElement(['published', 'draft']),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
