@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Tambah Data Genre</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">


                                <div class="card-body">

                                    <form action="{{ route('genre.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-5 mt-3">
                                            <label>Nama Genre</label>
                                            <input type="text"
                                                class="form-control @error('nama_genre') is-invalid @enderror"
                                                name="nama_genre">
                                            @error('nama_genre')
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
    @endsection
