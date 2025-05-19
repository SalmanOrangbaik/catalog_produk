@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Melihat Data Penulis</h4>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">

                                    <div class="card-body">

                                        <form action="{{ route('penulis.update', $penulis->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-5 mt-3">
                                                <label>Nama Penulis</label>
                                                <input type="text" class="form-control" name="nama_penulis"
                                                    value="{{ $penulis->nama_penulis }}" disabled>
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" name="jenis_kelamin"
                                                    value="{{ $penulis->jenis_kelamin }}" disabled>
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Tanggal Lahir</label>
                                                <input type="text" class="form-control" name="tanggal_lahir"
                                                    value="{{ $penulis->tanggal_lahir }}" disabled>
                                            </div>
                                            <div class="form-group mb-5 mt-3">
                                                <label>Biografi</label>
                                                <input type="text" name="biografi_singkat" class="form-control"
                                                    value="{{ $penulis->biografi_singkat }}" disabled>
                                            </div>
                                            <r>
                                                <a href="{{ route('penulis.index') }}" class="btn btn-primary">Kembali Ke
                                                    Beranda</a>
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
