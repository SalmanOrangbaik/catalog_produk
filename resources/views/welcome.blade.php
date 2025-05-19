@extends('layouts.frontend')
@section('content')
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/img/813vo6pZn7L._AC_UF1000,1000_QL80_.jpg') }}"
                                style="max-width: 50%; margin-left: 20%;" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Komi Can't Communicate</b></h1>
                                <h3 class="h2">Komik dari Jepang</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quasi numquam et sunt cum
                                    ipsum itaque ex, maxime maiores commodi perspiciatis impedit repudiandae recusandae.
                                    Repellendus aperiam quam similique vero fuga.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{ asset('frontend/assets/img/9786020332956_Bumi-New-Cover.jpg') }}"
                                style="max-width: 50%; margin-left: 20%;" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>Bumi</b></h1>
                                <h3 class="h2">Novel Remaja</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dignissimos unde
                                    excepturi illum ipsa ullam non, eaque voluptates at illo. Repellat aliquam culpa
                                    quibusdam alias, excepturi repellendus? Dignissimos, inventore cum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/img/Sebuah-seni-untuk-bersikap-bodoh-amat.jpg') }}"
                                style="max-width: 50%; margin-left: 20%;" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">Sebuah Seni Untuk Bersikap Bodoh Amat</h1>
                                <h3 class="h2">Buku Self Improvment </h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut atque provident odit
                                    laboriosam est asperiores dolores nihil eius aliquam excepturi autem rem commodi omnis
                                    enim, ex alias, iste temporibus obcaecati.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Recomended Book</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($book as $data)
                    <div class="col-12 col-md-4 mb-4">



                        <div class="card h-100">
                            <a href="shop-single.html">
                                <img src="{{ asset('storage/buku/' . $data->foto) }}" alt="Foto Buku"
                                    style="width: 414px; height: 600px;">
                            </a>
                            <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li class="text-muted text-right">{{ $data->harga }}</li>
                                </ul>
                                <a href="shop-single.html"
                                    class="h2 text-decoration-none text-dark">{{ $data->nama_buku }}</a>
                                <p class="card-text">
                                    {!! $data->deskripsi ?? '' !!}
                                </p>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection
