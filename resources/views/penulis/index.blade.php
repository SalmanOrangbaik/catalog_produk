@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Data Penulis</h4>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-15">
                                <div class="card">

                                    <a href="{{ route('penulis.create') }}" class="btn btn-outline-dark"
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
                                                <th>Nama Penulis </th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </thead>
                                            <tbody>
                                                @php $no=1; @endphp
                                                @foreach ($penulis as $data)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $data->nama_penulis }}</td>
                                                        <td>{{ $data->jenis_kelamin }}</td>
                                                        <td>{{ $data->tanggal_lahir }}</td>
                                                        <td>{{ $data->alamat }}</td>
                                                        <td>
                                                            <form action="{{ route('penulis.destroy', $data->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="{{ route('penulis.edit', $data->id) }}"
                                                                    class="btn btn-sm btn-success">Ubah</a>
                                                                <a href="{{ route('penulis.show', $data->id) }}"
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
        </div>
    @endsection
