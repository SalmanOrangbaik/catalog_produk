@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Tambah Data Penulis</h4>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">

                                    <div class="card-body">

                                        <form action="{{ route('penulis.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-5 mt-3">
                                                <label>Nama Penulis</label>
                                                <input type="text"
                                                    class="form-control @error('nama_penulis') is-invalid @enderror"
                                                    name="nama_penulis">
                                                @error('nama_penulis')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Jenis Kelamin</label><br><br>
                                                <label>Laki-Laki</label>
                                                <input type="radio" name="jenis_kelamin"
                                                    class="@error('jenis_kelamin') is-invalid @enderror" value="Laki-laki">
                                                <label>Perempuan</label>
                                                <input type="radio" name="jenis_kelamin"
                                                    class="@error('jenis_kelamin') is-invalid @enderror" value="Perempuan">
                                                @error('jenis_kelamin')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                                @error('tanggal_lahir')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat"
                                                    class="form-control @error('alamat') is-invalid @enderror">
                                                @error('alamat')
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
    @endsection
