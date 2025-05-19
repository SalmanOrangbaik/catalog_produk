<?php
namespace App\Http\Controllers;

use App\Models\Book;

class FrontController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('welcome', compact('book'));
    }

}
