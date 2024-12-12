<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'publisher' => fake()->company(),
            'publication_date' => fake()->date(),
            'isbn' => fake()->isbn13(),
            'description' => fake()->paragraph(),
            'image_url' => fake()->imageUrl(),
        ];
    }
}
