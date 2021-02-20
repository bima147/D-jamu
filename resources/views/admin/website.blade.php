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
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                                {{session('success')}}
                                        </div>
                                    @endif
                                    <form action="{{ action('Admin\ConfigController@store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Nama Website <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input id="nama_web" name="nama_web" type="text" class="form-control" placeholder="Masukkan nama website" required="on" value="{{ $web->nama_web }}"> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-isi">Tentang Website <span class="text-danger">*</span><br>
                                                <small>Note : Maksimal 340 Huruf</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea name="tentang" id="tentang" cols="30" rows="5" class="form-control" placeholder="Masukkan tentang website" required="on" maxlength="340">{{ $web->tentang }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email Admin <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan email admin" required="on" value="{{ $web->email }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-instagram">Instagram <span class="text-danger">*</span><br>
                                                <small>Contoh : https://instagram.com/<span class="text-danger">instagram</span></small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  placeholder="Masukkan username Instagram" name="instagram" value="{{ $web->instagram }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-whatsapp">Whastapp <span class="text-danger">*</span><br>
                                                <small>Contoh : 0812345678910</small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input id="whatsapp" type="text" minlength="10" maxlength="13" class="form-control" placeholder="Nomer Whatsapp" name="whatsapp" value="{{ $web->whatsapp }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-twitter">Twitter <br>
                                                <small>Contoh : https://twitter.com/<span class="text-danger">twitter</span></small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input name="twitter" type="text" class="form-control" placeholder="Masukkan username Twitter" value="{{ $web->twitter }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-youtube">YouTube <br>
                                                <small>Contoh : https://www.youtube.com/user/<span class="text-danger">YouTube</span></small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" placeholder="Masukkan username channel YouTube" name="youtube" value="{{ $web->youtube }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-facebook">Facebook Fanspage <br>
                                                <small>Contoh : https://web.facebook.com/<span class="text-danger">facebook</span></small>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" placeholder="Masukkan username Facebook Fanspage" name="facebook" value="{{ $web->facebook }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-name">Gambar Tentang <span class="text-danger">*</span><br>
                                                <img src="/storage/img/config/{{ $web->gambar_tentang }}" alt="{{ $web->nama_web }}" width="100" height="100">
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="gambar_tentang" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Logo <span class="text-danger">*</span><br>
                                                <img src="/storage/img/config/{{ $web->logo }}" alt="{{ $web->nama_web }}" width="100" height="100">
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="logo" accept="image/*">
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