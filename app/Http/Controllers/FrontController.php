<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Kategori;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $book = Book::take(3)->get();
        return view('welcome', compact('book'));
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

    public function produk(Request $request)
    {
        $kategori = Kategori::all();
        $genre    = Genre::all();

        $query = Book::query();

        if ($request->has('kategori')) {
            $query->where('id_kategori', $request->kategori);
        }

        if ($request->has('genre')) {
            $query->where('id_genre', $request->genre);
        }

        $book = $query->get();

        return view('produk', compact('kategori', 'genre', 'book'));
    }

}
