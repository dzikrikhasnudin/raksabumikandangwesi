<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Str::ucfirst(fake()->sentence()),
            'slug' => Str::slug(fake()->name()),
            'year' => fake()->numberBetween(2013, 2023),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
