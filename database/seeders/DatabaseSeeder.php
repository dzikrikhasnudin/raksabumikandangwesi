<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Post::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Dzikri Khasnudin',
            'email' => 'dzikri.khasnudin2@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
