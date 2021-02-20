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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="card-title">Jumbo Slider</h4>
                                @if($countJumbo < 3)
                                <a href="{{ url('admin/jumboslider/create') }}" title="Buat Jumbo Slider">
                                    <button class="btn btn-primary btn-sm">
                                        Buat Jumbo Slider
                                    </button>
                                </a>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Id</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Tulisan tombol</th>
                                                <th>Link</th>
                                                <th>Gambar</th>
                                                <th>Dibuat oleh</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0 ?>
                                            @foreach ($myItem as $jumbo)
                                            <?php $no++ ?>
                                            <tr>
                                              <td style="text-align: center;">{{ $no }}</td>
                                              <td>{{ $jumbo->judul }}</td>
                                              <td>{{ $jumbo->isi }}</td>
                                              <td>{{ $jumbo->tulisan_link }}</td>
                                              <td><a href="{{ $jumbo->link }}">{{ $jumbo->link }}</a></td>
                                              <td><img src="/storage/img/jumboslider/{{ $jumbo->gambar }}" style="height: 100px;" alt="{{ $jumbo->judul }}"></td>
                                              <td>{{ $jumbo->name }}</td>
                                              <td>
                                                <a href="{{ url('/admin/jumboslider/' . $jumbo->id . '/edit') }}" title="Edit Jumbtron">
                                                  <button class="btn btn-warning">
                                                    <i class="mdi mdi-pencil" aria-hidden="true"></i>
                                                  </button>
                                                </a>
                                              </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="text-align: center;">Id</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Tulisan tombol</th>
                                                <th>Link</th>
                                                <th>Gambar</th>
                                                <th>Dibuat oleh</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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