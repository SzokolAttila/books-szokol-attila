<?php

namespace Database\Seeders;

use App\Models\Book;
use Database\Factories\BookFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("books")->insert([
            [
                'isbn' => '9783161484100',
                'language' => 'en',
                'genre' => 'fantasy',
                'pages' => 320,
                'description' => 'A magical adventure through a fantastical realm, where heroes and villains battle for control.',
                'title' => 'The Enchanted Forest',
                'published' => 2010,
                'publisher' => 'Mystic Press Publishing',
                'author' => 'John Doe',
            ],
            [
                'isbn' => '9781566199094',
                'language' => 'en',
                'genre' => 'romance',
                'pages' => 280,
                'description' => 'A heartwarming tale of love and loss, set in a small coastal town.',
                'title' => 'A Summer Romance',
                'published' => 2015,
                'publisher' => 'Love Stories Publishing',
                'author' => 'Jane Smith',
            ],
            [
                'isbn' => '9780306406157',
                'language' => 'en',
                'genre' => 'thriller',
                'pages' => 350,
                'description' => 'A gripping suspense novel, where every twist brings a new shock.',
                'title' => 'The Silent Witness',
                'published' => 2018,
                'publisher' => 'ThrillHouse',
                'author' => 'Alan Grant',
            ],
            [
                'isbn' => '9781402894626',
                'language' => 'en',
                'genre' => 'adventure',
                'pages' => 400,
                'description' => 'A journey to the heart of the Amazon jungle, uncovering secrets long buried.',
                'title' => 'Jungle Quest',
                'published' => 2020,
                'publisher' => 'Adventure Press',
                'author' => 'Emma Knight',
            ],
            [
                'isbn' => '9780451482626',
                'language' => 'en',
                'genre' => 'crime',
                'pages' => 450,
                'description' => 'A detective noir story set in a city full of corruption and crime.',
                'title' => 'Shadows in the City',
                'published' => 2012,
                'publisher' => 'Mystery House',
                'author' => 'Richard Blake',
            ]       
        ]);
    }
}
