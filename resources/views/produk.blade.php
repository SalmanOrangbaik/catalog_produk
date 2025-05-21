@extends('layouts.frontend')
@section('content')
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Kategori</h1>
                <ul class="list-unstyled templatemo-accordion">

                    <li class="pb-3">

                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none mt-5">
                            Jenis
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>

                        <ul class="collapse show list-unstyled pl-3" style="display: none;">
                            @foreach ($kategori as $data)
                                <li>
                                    <a class="text-decoration-none" href="{{ url('produk') }}?kategori={{ $data->id }}">
                                        {{ $data->nama_kategori }}
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none">
                            Genre
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3" style="display: none;">
                            @foreach ($genre as $data)
                                <li>
                                    <a class="text-decoration-none" href="{{ url('produk') }}?genre={{ $data->id }}">
                                        {{ $data->nama_genre }}
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </li>

                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline  pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="{{ url('produk') }}">Buku</a>
                            </li>
                    </div>
                    <div class="row">
                        @foreach ($book as $data)
                            <div class="col-md-4">
                                <div class="card mb-4 product-wap rounded-0">
                                    <div class="card rounded-0">
                                        <img src="{{ asset('storage/buku/' . $data->foto) }}" alt="Foto Buku"
                                            style="auto">
                                        <div
                                            class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                            <ul class="list-unstyled">
                                                <li><a class="btn btn-success text-white mt-2"
                                                        href="{{ url('detail/' . $data->id) }}"><i
                                                            class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ route('detail', $data->id) }}"
                                            class="h3 text-decoration-none"><b>{{ $data->nama_buku }}</b></a>
                                        <ul class="w-100 list-unstyled d-flex justify-content-between mt-1">
                                            {!! $data->deskripsi ?? '' !!}
                                        </ul>

                                        <p class="text-center mb-0">Rp.{{ $data->harga }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    @endsection
