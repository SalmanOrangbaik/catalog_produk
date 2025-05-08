@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Tambah Data Kategori</h4>
                    </div>

                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card">


                                    <div class="card-body">

                                        <form action="{{ route('kategori.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-5 mt-3">
                                                <label>Nama Kategori</label>
                                                <input type="text"
                                                    class="form-control @error('nama_kategori') is-invalid @enderror"
                                                    name="nama_kategori">
                                                @error('nama_kategori')
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
