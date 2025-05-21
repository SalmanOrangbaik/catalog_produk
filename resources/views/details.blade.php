@extends('layouts.frontend')
@section('content')
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img src="{{ asset('storage/buku/' . $book->foto) }}" alt="Foto Buku" style="auto">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><b>{{ $book->nama_buku }}</b></h1>
                            <p class="h3 py-2">{{ $book->harga }}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Penulis:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $book->penulis->nama_penulis }}</strong></p>
                                </li>
                                <br>
                                <li class="list-inline-item">
                                    <h6>Kategori:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $book->kategori->nama_kategori }}</strong></p>
                                </li> <br>
                                <li class="list-inline-item">
                                    <h6>Genre:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $book->genre->nama_genre }}</strong></p>
                                </li>



                            </ul>

                            <h6>Deskripsi:</h6>
                            <p>
                                {!! $book->deskripsi ?? '' !!}
                            </p>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        @php
                                            $wa = '081214819098';
                                            $pesan = "Halo, saya ingin beli buku $book->nama_buku (Harga: Rp $book->harga)";
                                            $url = 'https://wa.me/' . $wa . '?text=' . urlencode($pesan);
                                        @endphp

                                        <a href="{{ $url }}" class="btn btn-success" target="_blank">Beli</a>
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
