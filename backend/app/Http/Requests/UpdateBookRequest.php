<?php

namespace App\Http\Requests;

use App\Models\Book;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "isbn" => ["required", "string", "size:13"],
            "title" => ["required", "string", "max:80"],
            "author" => ["required", "string", "between:5,50"],
            "pages" => ["required", "integer"],
            "published" => ["nullable", "integer"],
            "publisher" => ["required", "string", "between:5,50"],
            "description" => ["nullable", "string"],
            "genre" => ["required", "string", "max:20", Rule::in(Book::$genres)],
            "language" => ["required", "string", "max:50"]
        ];
    }
}
