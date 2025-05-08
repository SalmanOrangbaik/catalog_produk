<?php
namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('welcome', compact('book'));
    }
}
