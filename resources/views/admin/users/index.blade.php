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
                                @if(session('success'))
                                    <div class="alert alert-success">
                                            {{session('success')}}
                                    </div>
                                @endif
                                @if(session('danger'))
                                    <div class="alert alert-danger">
                                            {{session('danger')}}
                                    </div>
                                @endif
                                
                                <h4 class="card-title">Pengguna</h4>
                                <a href="{{ url('admin/users/create') }}" title="Buat Pengguna">
                                    <button class="btn btn-primary btn-sm">
                                        Buat Pengguna
                                    </button>
                                </a>
                                
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                                <th>Avatar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0 ?>
                                            @foreach ($users as $user)
                                            <?php $no++ ?>
                                            <tr>
                                              <td style="text-align: center;">{{ $no }}</td>
                                              <td>{{ $user->name }}</td>
                                              <td>{{ $user->email }}</td>
                                              <td>{{ $user->level }}</td>
                                              <td><img src="/storage/img/avatar/{{ $user->avatar }}" style="height: 100px;" alt="{{ $user->name }}"></td>
                                              <td>
                                                <a href="{{ url('/admin/jumboslider/' . $user->id . '/edit') }}" title="Edit Jumbtron">
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
                                                <th style="text-align: center;">No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                                <th>Avatar</th>
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