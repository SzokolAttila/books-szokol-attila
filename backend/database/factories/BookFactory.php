<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            "isbn" => fake()->isbn13(),
            "language" => fake()->languageCode(),
            "genre" => fake()->randomElement(["fantasy", "romance", "thriller", "adventure", "crime", "drama", "dystopian"]),
            "pages" => fake()->numberBetween(180, 1200),
            "description" => fake()->text(500),
            "title" => fake()->sentence(fake()->numberBetween(2, 6)),
            "published" => fake()->year(),
            "publisher" => fake()->words(fake()->numberBetween(3, 5), true),
            "author" => fake()->name()
        ];
    }
}
