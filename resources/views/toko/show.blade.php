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
  <!-- tentang produk -->
  <section id="shop" class="shop" >
    <div class="container"> 
                            <div class="col-lg-12">
                                @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif

                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{session('error')}}
                                    </div>
                                @endif
                            </div>
                        </div>
      <div class="row justify-content-center produk-isi">
        <div class="col text-end" data-aos="fade-left" data-aos-duration="1000">
          <img class="shadow rounded img-fluid"src="/storage/img/products/{{ $myProduct->gambar1 }}" alt="{{ $myProduct->nama_produk }}">
        </div>
        <div class="col text-jutify belanja" data-aos="fade-right" data-aos-duration="1000">
          <h2>{{ $myProduct->nama_produk }}</h2>
          @if($myProduct->harga2 != null)
            @if($myProduct->harga3 != null)
              @if($myProduct->harga4 != null)
                <p>Rp. {{ $myProduct->harga }} - Rp. {{ $myProduct->harga4 }}</p>
              @else
                <p>Rp. {{ $myProduct->harga }} - Rp. {{ $myProduct->harga3 }}</p>
              @endif
            @else
              <p>Rp. {{ $myProduct->harga }} - Rp. {{ $myProduct->harga2 }}</p>
            @endif
          @else
            <p>Rp. {{ $myProduct->harga }}</p>
          @endif
          <br>
          <form action="{{ action('TokoController@store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $myProduct->id }}">
            </div>
            <div class="form-group">
                <select name="isi" id="isi">
                  <option value="">Pilih salah satu</option>
                  @if($myProduct->isi2 != null)
                    @if($myProduct->isi3 != null)
                      @if($myProduct->isi4 != null)
                        <option value="{{ $myProduct->isi }}">Isi {{ $myProduct->isi }} ml Harganya Rp.{{ $myProduct->harga }} </option>
                        <option value="{{ $myProduct->isi2 }}">Isi {{ $myProduct->isi2}} ml Harganya Rp.{{ $myProduct->harga2 }}</option>
                        <option value="{{ $myProduct->isi3 }}">Isi {{ $myProduct->isi3 }} ml Harganya Rp.{{ $myProduct->harga3 }}</option>
                        <option value="{{ $myProduct->isi4 }}">Isi {{ $myProduct->isi4 }} ml Harganya Rp.{{ $myProduct->harga4 }}</option>
                      @else
                        <option value="{{ $myProduct->isi }}">Isi {{ $myProduct->isi }} ml Harganya Rp.{{ $myProduct->harga }} </option>
                        <option value="{{ $myProduct->isi2 }}">Isi {{ $myProduct->isi2}} ml Harganya Rp.{{ $myProduct->harga2 }}</option>
                        <option value="{{ $myProduct->isi3 }}">Isi {{ $myProduct->isi3 }} ml Harganya Rp.{{ $myProduct->harga3 }}</option>
                      @endif
                    @else
                      <option value="{{ $myProduct->isi }}">Isi {{ $myProduct->isi }} ml Harganya Rp.{{ $myProduct->harga }} </option>
                      <option value="{{ $myProduct->isi2 }}">Isi {{ $myProduct->isi2}} ml Harganya Rp.{{ $myProduct->harga2 }}</option>
                    @endif
                  @else
                    <option value="{{ $myProduct->isi }}">Isi {{ $myProduct->isi }} ml Harganya Rp.{{ $myProduct->harga }} </option>
                  @endif
                </select>
            </div>
            <div class="form-group">
                <input type="number" name="jumlah" value="1" placeholder="Masukkan jumlahnya">
            </div>
            <div class="form-group">
                <button class="btn produk-btn" type="submit">Masukkan ke keranjang</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="row" style="margin: 5% 10%; height: 250px;"> <!-- kuu buat fix heightnya biar yang produk rekomendasi ga naik turun-->
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link produk-menu active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Deskripsi</button>
            <button class="nav-link produk-menu" id="nav-benefits-tab" data-bs-toggle="tab" data-bs-target="#nav-benefits" type="button" role="tab" aria-controls="nav-benefits" aria-selected="false">Manfaat</button>
            <button class="nav-link produk-menu" id="nav-composition-tab" data-bs-toggle="tab" data-bs-target="#nav-composition" type="button" role="tab" aria-controls="nav-composition" aria-selected="false">Komposisi</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">{{ $myProduct->deskripsi }}</div>
          <div class="tab-pane fade" id="nav-benefits" role="tabpanel" aria-labelledby="nav-benefits-tab">{{ $myProduct->manfaat }}</div>
          <div class="tab-pane fade" id="nav-composition" role="tabpanel" aria-labelledby="nav-composition-tab">{{ $myProduct->komposisi }}</div>
        </div>
      </div>
    </div>
  </section>

     @include('layouts.toko.recommended', ['products' => $products])
     @include('layouts.toko.footer', ['web' => $web])

    <script>
      $(document).ready(function(){
        $('select[name="isi"]').on('change', function(){
          // membuat variable hargaku untuk mendapatkan atribut harganya
          var pilihanku = $("#isi option:selected").attr("harganya");
          // name total harga di dapat dari inputan harga
          let jumlahnya = $("input[name=jumlah]").val();
          $("#total_harga").val(parseInt(pilihanku)*parseInt(jumlahnya));
        });

        $('input[name="jumlah"]').on('change', function(){
          var jumlah = $("input[name=jumlah]");
          // name total harga di dapat dari inputan harga
          let beratTotal = $("input[name=berat]").val();
          $("#berat").val(parseInt(jumlah)+parseInt(beratTotal));
        });
      });
    </script>
@endsection