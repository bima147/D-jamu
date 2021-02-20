<!-- produuk rekomendasi -->
    <section id="Produk" class="Produk pb-4" style=" background-color:#ffeabd;">
      <div class="container">
          <div class="row">
              <div class="col text-center my-5">
              <h1 style="font-family: playfair display; font-weight: bold; font-size: 30px;">Produk Rekomendasi</h1>
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
                      </div></a>
                  </div>
              </div>
            @endforeach
          </div>
      </div>
    </section>