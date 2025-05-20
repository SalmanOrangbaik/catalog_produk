<?php
namespace App\Http\Controllers;

use App\Models\Book;

class FrontController extends Controller
{
    public function index()
    {
        $book = Book::take(3)->get();
        return view('welcome', compact('book'));
    }

    public function produk()
    {
        $book = Book::all();
        return view('produk', compact('book'));
    }
    public function details($id)
    {
        $book = Book::findOrFail($id);
        return view('details', compact('book'));
    }
    public function book($id)
    {
        $book     = Book::where('id_kategori', $id)->get();
        $kategori = Kategori::all();
        return view('produk', compact('book', 'kategori'));
    }

}
