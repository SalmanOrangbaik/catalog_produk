@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Edit Data Penulis</h4>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">

                                    <div class="card-body">

                                        <form action="{{ route('penulis.update', $penulis->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="form-group mb-5 mt-3">
                                                <label>Nama Penulis</label>
                                                <input type="text"
                                                    class="form-control  @error('nama_penulis') is-invalid @enderror"
                                                    name="nama_penulis" value="{{ $penulis->nama_penulis }}">
                                                @error('nama_penulis')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Jenis Kelamin</label><br><br>
                                                <label>Laki-laki</label>
                                                <input type="radio" name="jenis_kelamin"
                                                    class=" @error('jenis_kelamin') is-invalid @enderror" value="Laki-laki"
                                                    @if ($penulis->jenis_kelamin == 'Laki-laki') checked @endif>
                                                <label>Perempuan</label>
                                                <input type="radio" name="jenis_kelamin"
                                                    class=" @error('jenis_kelamin') is-invalid @enderror" value="Perempuan"
                                                    @if ($penulis->jenis_kelamin == 'Perempuan') checked @endif>
                                                @error('nama_penulis')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir"
                                                    class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                                                    value="{{ $penulis->tanggal_lahir }}">
                                                @error('nama_penulis')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Biografi</label>
                                                <input type="text" name="biografi_singkat"
                                                    class="form-control  @error('biografi_singkat') is-invalid @enderror"
                                                    value="{{ $penulis->biografi_singkat }}">
                                                @error('nama_penulis')
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
