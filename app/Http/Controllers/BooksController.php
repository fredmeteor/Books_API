<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
{
    return [
        ['title' => 'War of the Worlds'],
        ['title' => 'A Wrinkle in Time']
        ];
}
}
