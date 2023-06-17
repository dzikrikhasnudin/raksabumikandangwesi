<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Penalaran Umum',
                'slug' => Str::slug('Penalaran Umum'),
                'description' => 'lorem10',
                'status' => "published",
                "created_at" => now(),
                "updated_at" => now()
            ],

        ];
    }
}
