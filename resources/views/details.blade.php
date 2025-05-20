@extends('layouts.frontend')
@section('content')
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img src="{{ asset('storage/buku/' . $book->foto) }}" alt="Foto Buku"
                            style="auto">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{$book->nama_buku}}</h1>
                            <p class="h3 py-2">{{$book->harga}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Penulis:</h6>
                                </li> 
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$book->penulis->nama_penulis}}</strong></p>
                                </li>
                                <br>
                                <li class="list-inline-item">
                                    <h6>Kategori:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$book->kategori->nama_kategori}}</strong></p>
                                </li> <br>
                                <li class="list-inline-item">
                                    <h6>Genre:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$book->genre->nama_genre}}</strong></p>
                                </li>
                                
                                
                                
                            </ul>

                            <h6>Deskripsi:</h6>
                            <p>
                                {!! $book->deskripsi ?? '' !!}
                            </p>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Jumlah
                                                <input type="hidden" name="product-quanity" id="product-quanity"
                                                    value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary"
                                                    id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="buy">Buy</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
