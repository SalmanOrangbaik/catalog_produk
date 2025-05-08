@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Melihat Data Genre</h4>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">

                                    <div class="card-body">

                                        <form action="{{ route('genre.update', $genre->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-5 mt-3">
                                                <label>Nama Genre</label>
                                                <input type="text" class="form-control" name="nama_genre"
                                                    value="{{ $genre->nama_genre }}" disabled>
                                            </div>
                                    </div>
                                    <r>
                                        <a href="{{ route('genre.index') }}" class="btn btn-primary">Kembali Ke Beranda</a>
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
