<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
* Class BooksController
* @package App\Http\Controllers
*/


/**
* GET /books
* @return array
*/
    public function index()
{
    return Book::all();
}
/**
* GET /books/{id}
* @param integer $id
* @return mixed
*/
public function show($id)
{
    try{
        return Book::findOrFail($id);
    }
catch(ModelNotFoundException $e){
    return response()->json([
        'error' => [
        'message' => 'Book not found'
        ]
        ], 404);
    
}
}
}
