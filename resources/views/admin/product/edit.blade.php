@if(Auth::user()->level == "Admin")
  @extends('layouts.admin.master')

  @section('title')
      <title>{{ $web->nama_web }} - Halaman Admin</title>
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png') }}">
  @endsection

  @section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form action="{{ action('Admin\ProductController@update', $products->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-judul">Nama Produk <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input id="nama_produk" name="nama_produk" type="text" class="form-control" placeholder="Masukkan nama produk" required="on" value="{{ $products->nama_produk }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Deskripsi Produk <span class="text-danger">*</span><br>
                                                <small>Note : Maksimal 200 Huruf</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control" placeholder="Masukkan deskripsi produk" required="on" maxlength="200">{{ $products->deskripsi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-manfaat">Manfaat Produk <span class="text-danger">*</span><br>
                                                <small>Note : Maksimal 200 Huruf</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea name="manfaat" id="manfaat" cols="30" rows="5" class="form-control" placeholder="Masukkan manfaat produk" required="on" maxlength="200">{{ $products->manfaat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-komposisi">Komposisi Produk <span class="text-danger">*</span><br>
                                                <small>Note : Maksimal 200 Huruf</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea name="komposisi" id="komposisi" cols="30" rows="5" class="form-control" placeholder="Masukkan komposisi produk" required="on" maxlength="200">{{ $products->komposisi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-isi">Isi (ml) pertama <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input id="isi" name="isi" type="number" class="form-control" placeholder="Masukkan isi produk" required="on" value="{{ $products->isi }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Harga pertama <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input id="harga" name="harga" type="text" class="form-control" placeholder="Masukkan harga produk" required="on" value="{{ $products->harga }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-isi2">Isi (ml) kedua</label>
                                            <div class="col-lg-6">
                                                <input id="isi2" name="isi2" type="number" class="form-control" placeholder="Masukkan isi produk" value="{{ $products->isi2 }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-harga2">Harga kedua</label>
                                            <div class="col-lg-6">
                                                <input id="harga2" name="harga2" type="text" class="form-control" placeholder="Masukkan harga produk" value="{{ $products->harga2 }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-isi3">Isi (ml) ketiga</label>
                                            <div class="col-lg-6">
                                                <input id="isi3" name="isi3" type="number" class="form-control" placeholder="Masukkan isi produk" value="{{ $products->isi3 }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-harga3">Harga ketiga</label>
                                            <div class="col-lg-6">
                                                <input id="harga3" name="harga3" type="text" class="form-control" placeholder="Masukkan harga produk" value="{{ $products->harga3 }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-isi4">Isi (ml) keempat</label>
                                            <div class="col-lg-6">
                                                <input id="isi4" name="isi4" type="number" class="form-control" placeholder="Masukkan isi produk" value="{{ $products->isi4 }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-harga4">Harga keempat</label>
                                            <div class="col-lg-6">
                                                <input id="harga4" name="harga4" type="text" class="form-control" placeholder="Masukkan harga produk" value="{{ $products->harga4 }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Gambar Produk 1 <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="gambar1" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Gambar Produk 2</label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="gambar2" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Gambar Produk 3</label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="gambar3" accept="image/*">
                                            </div>
                                        </div>
                                        @method('PUT')
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
  @endsection
@else
<script type="text/javascript">
    window.location = "{{ url('/404') }}";//here double curly bracket
</script>
@endif