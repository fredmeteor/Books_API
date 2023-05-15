<?php

namespace App\Http\Controllers;
use App\Models\Book;
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
}
