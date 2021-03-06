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
                                    <form action="{{ action('Admin\JumboSliderController@store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-judul">Judul Jumbo Slider <span class="text-danger">*</span><br>
                                                <small>Note : Maksimal 20 Huruf</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input id="judul" name="judul" type="text" class="form-control" placeholder="Masukkan judul jumbo slider" required="on" maxlength="20"> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-isi">Isi Jumbo Slider <span class="text-danger">*</span><br>
                                                <small>Note : Maksimal 200 Huruf</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea name="isi" id="isi" cols="30" rows="5" class="form-control" placeholder="Masukkan isi jumbo slider" required="on" maxlength="200"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Tombol Pada Jumbotron <span class="text-danger">*</span><br>
                                                <small>Contoh : Kunjungi Toko D'Jamu</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input id="tulisan_link" name="tulisan_link" type="text" class="form-control" placeholder="Masukkan tulisan untuk di tombol jumbo slider" required="on">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Link Pada Tombol <span class="text-danger">*</span><br>
                                                <small>Contoh : http://domain.com</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input id="link" name="link" type="text" class="form-control" placeholder="Masukkan link jumbo slider" required="on">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Gambar Jumbo Slider <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="gambar" accept="image/*">
                                            </div>
                                        </div>
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