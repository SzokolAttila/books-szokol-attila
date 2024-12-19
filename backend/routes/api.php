<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/books", [BookController::class, "index"])->name("books.index");
Route::post("/books", [BookController::class, "store"])->name("books.store");
Route::get("/books/{id}", [BookController::class, "show"])->name("books.show");