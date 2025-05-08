@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Edit Data Buku</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">

                                <div class="card-body">

                                    <form action="{{ route('book.update', $book->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label>Buku</label>
                                            <img src="{{ asset('storage/buku/' . $book->foto) }}" alt=""
                                                style="width: 50px; height: 50px;">
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                                name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Buku</label>
                                            <input type="text" name="nama_buku" class="form-control @error('nama_buku') is-invalid @enderror"
                                                value="{{ $book->nama_buku }}" >
                                        </div>

                                        <div class="form-group">
                                            <label for="">Penulis</label>
                                            <select name="id_penulis" class="form-control @error('nama_penulis') is-invalid @enderror">
                                                @foreach ($penulis as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $book->id_penulis ? 'selected' : '' }}>
                                                        {{ $data->nama_penulis }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="">Genre</label>
                                            <select name="id_genre" class="form-control @error('nama_genre') is-invalid @enderror">
                                                @foreach ($genre as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $book->id_genre ? 'selected' : '' }}>
                                                        {{ $data->nama_genre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" maxlength="100" class="form-control @error('deskripsi') is-invalid @enderror" cols="30" rows="10"value="{{ $book->deskripsi }}"  >

                                            </textarea>
                                                
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="">Kategori</label>
                                            <select name="id_kategori" class="form-control @error('nama_kategori') is-invalid @enderror">
                                                @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $book->id_kategori ? 'selected' : '' }}>
                                                        {{ $data->nama_kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label>Stok</label>
                                            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror"
                                                value="{{ $book->stok }}" >
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror"
                                                value="{{ $book->harga }}" >
                                        </div>
                                        <r>
                                            <button type="submit" class="btn btn-primary mb-3 mt-2">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
