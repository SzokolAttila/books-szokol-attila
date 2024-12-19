<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static $genres = ["fantasy", "romance", "thriller", "adventure", "crime", "drama", "dystopian"];
    protected $fillable = [
        "isbn", "title", "author", "genre", "published", "language", "pages", "publisher"  
    ];
    use HasFactory;
}
