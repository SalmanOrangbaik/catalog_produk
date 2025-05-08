@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Melihat Data Kategori</h4>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="card">

                                    <div class="card-body">

                                        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-5 mt-3">
                                                <label>Nama Kategori</label>
                                                <input type="text" class="form-control" name="nama_kategori"
                                                    value="{{ $kategori->nama_kategori }}" disabled>
                                            </div>
                                    </div>
                                    <r>
                                        <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali Ke
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
