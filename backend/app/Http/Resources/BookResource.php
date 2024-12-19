<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "isbn" => $this->isbn,
            "language" => $this->language,
            "genre" => $this->genre,
            "pages" => $this->pages,
            "description" => $this->description,
            "title" => $this->title,
            "published" => $this->published,
            "publisher" => $this->publisher,
            "author" => $this->author,
        ];
    }
}