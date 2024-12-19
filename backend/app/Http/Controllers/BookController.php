<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : JsonResource
    {
        $books = Book::query();
        if (in_array($request->query("genre"), Book::$genres))
            $books->where("genre", "=", $request->query("genre"));
        if ($request->query("orderBy") == "title" || $request->query("orderBy") == "published")
            $books->orderBy($request->query("orderBy"));
        return BookResource::collection($books->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(StoreBookRequest $request) : JsonResource
    {
        return new BookResource(Book::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id) : JsonResource
    {
        return new BookResource(Book::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, int $id) : JsonResource
    {
        $book = Book::findOrFail($id);
        $book->update($request->validated());
        return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id) : Response
    {
        if (Book::findOrFail($id)->destroy($id))
            return response()->noContent();
        return response(status:500);
    }
}
