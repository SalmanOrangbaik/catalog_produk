@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Melihat Data Buku</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">

                                <div class="card-body">

                                    <form action="{{ route('book.store', $book->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label>Buku</label>
                                            <br>
                                            <img src="{{ asset('storage/buku/' . $book->foto) }}" alt=""
                                                style="width: 125px; height: 125px;">
                                        </div>
                                        <div class="form-group mb-3 mt-3">
                                            <label>Nama Buku</label>
                                            <input type="text" class="form-control" name="nama_buku"
                                                value="{{ $book->nama_buku }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Penulis</label>
                                            <input type="text" class="form-control" name="id_penulis"
                                                value="{{ $book->penulis->nama_penulis }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Genre</label>
                                            <input type="text" class="form-control" name="id_genre"
                                                value="{{ $book->genre->nama_genre }}" readonly>
                                        </div>
                                        <div class="form-group mb-3 mt-3">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" cols="30" rows="10" class="form-control" value="{{ $book->deskripsi }}" readonly> 
                                                
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <input type="text" class="form-control" name="id_kategori"
                                                value="{{ $book->kategori->nama_kategori }}" readonly>
                                        </div>
                                        <div class="form-group mb-3 mt-3">
                                            <label>Stok</label>
                                            <input type="text" name="stok" class="form-control"
                                                value="{{ $book->stok }}" readonly>
                                        </div>
                                        <div class="form-group mb-3 mt-3">
                                            <label>Harga</label>
                                            <input type="text" name="harga" class="form-control"
                                                value="{{ $book->harga }}" readonly>
                                        </div>
                                        <r>
                                            <a href="{{ route('book.index') }}" class="btn btn-primary">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
