<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
            'thumbnail' => 'https://placehold.co/600x400',
            'content' => fake()->text(300),
            'category' => fake()->randomElement(['artikel', 'tokoh', 'berita', 'ceramah']),
            'status' => fake()->randomElement(['published', 'draft']),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
