@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Tambah Data Buku</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">

                                    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Buku</label>
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                                name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <label>Nama Buku</label>
                                            <input type="text" name="nama_buku"
                                                class="form-control @error('nama_buku') is-invalid @enderror">
                                            @error('nama_buku')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Penulis</label>
                                            <select name="id_penulis"
                                                class="form-control @error('nama_penulis') is-invalid @enderror">
                                                @foreach ($penulis as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_penulis }}</option>
                                                @endforeach
                                            </select>
                                            @error('nama_penulis')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Genre</label>
                                            <select name="id_genre"
                                                class="form-control @error('nama_genre') is-invalid @enderror">
                                                @foreach ($genre as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_genre }}</option>
                                                @endforeach
                                            </select>
                                            @error('nama_genre')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" cols="30" rows="10"
                                                id="editor">
                                                
                                            </textarea>
                                            @error('deskripsi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#editor'))
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori</label>
                                            <select name="id_kategori"
                                                class="form-control @error('nama_kategori') is-invalid @enderror">
                                                @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('nama_kategori')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" name="stok"
                                                class="form-control @error('stok') is-invalid @enderror">
                                            @error('stok')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" name="harga"
                                                class="form-control @error('harga') is-invalid @enderror">
                                            @error('harga')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
