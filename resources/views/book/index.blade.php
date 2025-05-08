@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Data Buku</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-15">
                            <div class="card">
                                <a href="{{ route('book.create') }}" class="btn btn-outline-dark"
                                    style="float: right">Tambah Data</a>
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dimissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dimiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <table class="table table-responsive">
                                        <thead>
                                            <th>No</th>
                                            <th>Buku</th>
                                            <th>Nama Buku</th>
                                            <th>Nama Penulis</th>
                                            <th>Genre</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>Harga</th>

                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach ($book as $data)
                                                <tr>
                                                    <td scope="row">{{ $no++ }}</td>
                                                    <td><img src="{{ asset('storage/buku/' . $data->foto) }}" alt="Foto Buku"
                                                            style="width: 150px; height: 250px; object-fit: cover; border-radius: 4px;">
                                                    </td>
                                                    <td>{{ $data->nama_buku }}</td>
                                                    <td>{{ $data->penulis->nama_penulis }}</td>
                                                    <td>{{ $data->genre->nama_genre }}</td>
                                                    <td>{{ $data->deskripsi }}</td>
                                                    <td>{{ $data->kategori->nama_kategori }}</td>
                                                    <td>{{ $data->stok }}</td>
                                                    <td>{{ $data->harga }}</td>

                                                    <td>
                                                        <form action="{{ route('book.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('book.edit', $data->id) }}"
                                                                class="btn btn-sm btn-success">Ubah</a>
                                                            <a href="{{ route('book.show', $data->id) }}"
                                                                class="btn btn-sm btn-primary">Lihat</a>
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Apakah anda Yakin')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
