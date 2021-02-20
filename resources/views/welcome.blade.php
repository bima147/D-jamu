@extends('layouts.landing-page.master')

@section('title')
    <title>{{ $web->nama_web }} | Home</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png') }}">
@endsection

@section('content')
    @include('layouts.landing-page.header', [
      'web' => $web,
      'jumboslider' => $jumboslider
    ])

<!-- TENTANG -->
<section id="About" class="about">
  <div class="container"> 
    <div class="row">
      <div class="col text-center judul" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
        <p>Tentang</p>
        <H1>{{ $web->nama_web }}</H1>
      </div>
    </div>

    <div class="row justify-content-center isi">
      <div class="col" data-aos="fade-right" data-aos-duration="1000">
        <img class="shadow rounded"src="/storage/img/config/{{ $web->gambar_tentang }}" alt="">
      </div>
      <div class="col text-jutify" data-aos="fade-left" data-aos-duration="1000">
        <p>{{ $web->tentang }}
        </p>
      </div>
    </div>
  </div>
  </section>
  <!-- PRODUK -->
  <section id="Produk" class="pb-4" class="produk">
    <div class="container">
      <div class="row mb-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
        <div class="col text-center">
          <h1>Produk Rekomendasi </h1><hr>
        </div>
      </div>
      <div class="row mb-3">
        @foreach($product as $products)
          <div class="col-sm mb-3">
          <a href="/toko/{{ $products->nama_produk }}">
            <div class="card produk">
                <img class="card-img-top rounded-top" src="/storage/img/products/{{ $products->gambar1 }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $products->nama_produk }}</h5>
                  @if($products->harga2 != null)
                    @if($products->harga3 != null)
                      @if($products->harga4 != null)
                        <p>Rp. {{ $products->harga }} - Rp. {{ $products->harga4 }}</p>
                      @else
                        <p>Rp. {{ $products->harga }} - Rp. {{ $products->harga3 }}</p>
                      @endif
                    @else
                      <p>Rp. {{ $products->harga }} - Rp. {{ $products->harga2 }}</p>
                    @endif
                  @else
                    <p>Rp. {{ $products->harga }}</p>
                  @endif
                </div>
            </div>
          </a>
          </div>
        @endforeach
      </div>
      <div class="row mb-3 mt-3">
        <div class="col text-center">
          <a href="/toko" class="btn2">Lihat Semua</a>
        </div>
      </div>
    </div>
  </section>
  <!-- review -->
  <section id="review" class="review" style="background-color: #ffeabd;">
    <div class="row text-center pt-5 pb-5 katanya">
      <h3>Apa kata pelanggan?</h3>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide text-center" style="background-color: transparent; height: 50vh;" data-bs-ride="carousel">
      <div class="carousel-inner" style="height: 50vh;">
        <div class="carousel-item active">
          <div class="row justify-content-center komen mt-5">
            <div class="col">
              <img class="shadow"src="{{ asset('image/jamu3.png') }}" alt="">
            </div>
            <div class="col tulisan">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis labore modi ab laborum possimus? Quos?</p>
              <h3>namanya</h3>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row justify-content-center komen mt-5">
            <div class="col">
              <img class="shadow"src="{{ asset('image/jamu3.png') }}" alt="">
            </div>
            <div class="col tulisan">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis labore modi ab laborum possimus? Quos?</p>
              <h3>namanya</h3>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row justify-content-center komen mt-5">
            <div class="col">
              <img class="shadow"src="{{ asset('image/jamu3.png') }}" alt="">
            </div>
            <div class="col tulisan">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis labore modi ab laborum possimus? Quos?</p>
              <h3>namanya</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--kontak -->
  <section id="kontak" class="kontak" style="background-color: #662D21;">
    <div class="container" style="height: 50vh;">
      <div class="row">
        <div class="col text-center mt-5" >
          <h1 style="font-family: playfair display; font-weight: bold; font-size: 30px; color: #ffeabd;">Kontak kami </h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!-- isi kontaknya kolom 1 -->
        </div>
        <div class="col">
          <!-- isi kontaknya kolom 2 -->
        </div>
        <div class="col">
          <!-- isi kontak kolom 3 -->
        </div>
      </div>
    </div>
  </section>
@endsection
