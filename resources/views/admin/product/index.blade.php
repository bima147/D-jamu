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
                                
                                <h4 class="card-title">Produk</h4>
                                <a href="{{ url('admin/produk/create') }}" title="Buat Jumbo Slider">
                                    <button class="btn btn-primary btn-sm">
                                        Buat Produk
                                    </button>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Id</th>
                                                <th>Nama Produk</th>
                                                <th>Gambar Ke-1</th>
                                                <th>Gambar Ke-2</th>
                                                <th>Gambar Ke-3</th>
                                                <th>Deskripsi</th>
                                                <th>Komposisi</th>
                                                <th>Manfaat</th>
                                                <th>Isi (ml) = Harga</th>
                                                <th>Isi (ml) = Harga</th>
                                                <th>Isi (ml) = Harga</th>
                                                <th>Isi (ml) = Harga</th>
                                                <th>Dibuat oleh</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0 ?>
                                            @foreach ($myItem as $product)
                                            <?php $no++ ?>
                                            <tr>
                                              <td style="text-align: center;">{{ $no }}</td>
                                              <td>{{ $product->nama_produk }}</td>
                                              <td><img src="/storage/img/products/{{ $product->gambar1 }}" style="height: 100px;" alt="{{ $product->nama_produk }}"></td>
                                              <td><img src="/storage/img/products/{{ $product->gambar2 }}" style="height: 100px;" alt="{{ $product->nama_produk }}"></td>
                                              <td><img src="/storage/img/products/{{ $product->gambar3 }}" style="height: 100px;" alt="{{ $product->nama_produk }}"></td>
                                              <td>{{ $product->deskripsi }}</td>
                                              <td>{{ $product->komposisi }}</td>
                                              <td>{{ $product->manfaat }}</td>
                                              <td>{{ $product->isi }} ml = Rp {{ $product->harga }}</td>
                                              <td>{{ $product->isi2 }} ml = Rp {{ $product->harga2 }}</td>
                                              <td>{{ $product->isi3 }} ml = Rp {{ $product->harga3 }}</td>
                                              <td>{{ $product->isi4 }} ml = Rp {{ $product->harga4 }}</td>
                                              <td>{{ $product->name }}</td>
                                              <td>
                                                <a href="{{ url('/admin/produk/' . $product->id . '/edit') }}" title="Edit Jumbtron">
                                                  <button class="btn btn-warning btn-sm">
                                                    <i class="mdi mdi-pencil" aria-hidden="true"></i>
                                                  </button>
                                                </a>
                                                <form method="POST" action="{{ action('Admin\ProductController@destroy', $product->id) }}" style="display: inline;">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger btn-sm" title="Delete Jumbotron" onclick="return confirm('Apakah kamu yakin mau menghapus produk ini?')">
                                                    <i class="mdi mdi-delete" aria-hidden="true"></i>
                                                  </button>
                                                </form>
                                              </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="text-align: center;">Id</th>
                                                <th>Nama Produk</th>
                                                <th>Gambar Ke-1</th>
                                                <th>Gambar Ke-2</th>
                                                <th>Gambar Ke-3</th>
                                                <th>Deskripsi</th>
                                                <th>Komposisi</th>
                                                <th>Manfaat</th>
                                                <th>Isi (ml) = Harga</th>
                                                <th>Isi (ml) = Harga</th>
                                                <th>Isi (ml) = Harga</th>
                                                <th>Isi (ml) = Harga</th>
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