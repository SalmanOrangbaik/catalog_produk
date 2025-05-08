<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Kategori;
use App\Models\Penulis;
use Illuminate\Http\Request;
use Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penulis  = Penulis::all();
        $kategori = Kategori::all();
        $genre    = Genre::all();
        $book     = Book::all();
        return view('book.create', compact('penulis', 'kategori', 'genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto'        => 'required|mimes:jpg,png|max:1024',
            'nama_buku'   => 'required|unique:books',
            'id_penulis'  => 'required',
            'id_genre'    => 'required',
            'deskripsi'   => 'required',
            'id_kategori' => 'required',
            'stok'        => 'required|numeric',
            'harga'       => 'required|numeric',

        ]);

        $book = new Book;
        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/buku', $name);
            $book->foto = $name;
        }
        $book->nama_buku   = $request->nama_buku;
        $book->id_penulis  = $request->id_penulis;
        $book->id_genre    = $request->id_genre;
        $book->deskripsi   = $request->deskripsi;
        $book->id_kategori = $request->id_kategori;
        $book->stok        = $request->stok;
        $book->harga       = $request->harga;
        $book->save();

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book     = Book::findOrfail($id);
        $penulis  = Penulis::all();
        $kategori = Kategori::all();
        $genre    = Genre::all();
        return view('book.edit', compact('book', 'penulis', 'kategori', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'foto'        => 'mimes:jpg,png|max:1024',
            'nama_buku'   => 'required',
            'id_penulis'  => 'required',
            'id_genre'    => 'required',
            'deskripsi'   => 'required',
            'id_kategori' => 'required',
            'stok'        => 'required|numeric',
            'harga'       => 'required|numeric',

        ]);

        $book = Book::findOrfail($id);

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/buku', $name);
            $book->foto = $name;
        }

        $book->nama_buku   = $request->nama_buku;
        $book->id_penulis  = $request->id_penulis;
        $book->id_genre    = $request->id_genre;
        $book->deskripsi   = $request->deskripsi;
        $book->id_kategori = $request->id_kategori;
        $book->stok        = $request->stok;
        $book->harga       = $request->harga;

        $book->save();
        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrfail($id);
        //hapus gambar lama Jika ada
        if ($book->foto && Storage::exists('public/buku/' . $book->foto)) {
            Storage::delete('public/buku/' . $book->foto);
        }
        $book->delete();
        return redirect()->route('book.index')->with('success');
    }
}
