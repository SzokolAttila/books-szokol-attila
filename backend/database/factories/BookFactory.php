<?php

namespace Database\Factories;

use App\Models\Book;
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
            "genre" => fake()->randomElement(Book::$genres),
            "pages" => fake()->numberBetween(180, 1200),
            "description" => fake()->text(),
            "title" => fake()->sentence(fake()->numberBetween(2, 6)),
            "published" => fake()->year(),
            "publisher" => fake()->words(fake()->numberBetween(3, 5), true),
            "author" => fake()->name()
        ];
    }
}
