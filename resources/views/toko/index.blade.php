@extends('layouts.toko.master')

@section('title')
    <title>{{ $web->nama_web }} | Toko</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png') }}">
@endsection

@section('navbar')
    @include('layouts.toko.navbar', ['web' => $web])
@endsection

@section('content')
    <!-- PRODUK -->
    <section id="Produk" class="Produk pb-4" style=" background-color:transparent;">
        <div class="container">
            <!-- search -->
            <div class="row my-5 pencarian">
                <form url="/" class="d-flex" method="GET" role="search">
                    <input class="form-control me-2" type="text" placeholder="Search" name="search" aria-label="Search" id="search">
                    <button class="btn btn2" type="submit"><i class="fa fa-search" style="font-size:20px"></i></button>
                </form>
            </div>
            
            <div class="row mb-5">
                <div class="col text-center">
                    <h1 style="font-family: playfair display; font-weight: bold; font-size: 30px;">Produk D'Jamu</h1>
                </div>
            </div>
            <!-- shop -->
            <div class="row mb-3 row-cols-2 row-cols-sm-2 row-cols-md-4">
                @foreach($products as $product)
                <div class="col mb-3">
                    <div class="card">
                        <a href="/toko/produk/{{ $product->nama_produk }}">
                            <img class="card-img-top rounded-top img-fluid img-thumbnail" src="/storage/img/products/{{ $product->gambar1 }}" alt="{{ $product->nama_produk }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->nama_produk }}</h5>
                                @if($product->harga2 != null)
                                    @if($product->harga3 != null)
                                        @if($product->harga4 != null)
                                            <p>Rp. {{ $product->harga }} - Rp. {{ $product->harga4 }}</p>
                                        @else
                                            <p>Rp. {{ $product->harga }} - Rp. {{ $product->harga3 }}</p>
                                        @endif
                                    @else
                                        <p>Rp. {{ $product->harga }} - Rp. {{ $product->harga2 }}</p>
                                    @endif
                                @else
                                    <p>Rp. {{ $product->harga }}</p>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            {{ $products->links() }}
    </section>

     @include('layouts.toko.footer', ['web' => $web])
@endsection