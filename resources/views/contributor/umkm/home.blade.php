@extends('contributor.layout.master')
@section('judul')
    <li>
        <h2 class="page-title-main">UMKM</h2>
    </li>
@endsection

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold">Tabel UMKM</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('searchUmkmc') }}" method="GET">
                            <div class="row">
                                <div class="col-9 mb-3">
                                    <a href="{{ route('tambahUmkmc') }}"
                                        class="btn btn-success rounded-pill waves-effect waves-light">
                                        <span class="btn-label">
                                            <i class="mdi mdi-check-all"></i>
                                        </span>
                                        Tambah Data
                                    </a>
                                </div>
                                <div class="col-3 d-flex justify-content-end mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if (session('gagal'))
                            <div class="alert alert-danger">
                                <b> Oops! </b> {{ session('error') }}
                            </div>
                        @endif

                        @if (session('berhasil'))
                            <div class="alert alert-success">
                                <b> Hooray! </b> {{ session('berhasil') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">No</th> --}}
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Nama Toko</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Kontak</th>
                                        <th scope="col">Online Shop</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Gambar </th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($umkm as $ev)
                                        <tr>
                                            <td>{{ $ev->umkm_produk }}</td>
                                            <td>{{ $ev->umkm_kategori }}</td>
                                            <td>{{ $ev->umkm_toko }}</td>
                                            <td>{{ $ev->umkm_alamat }}</td>
                                            <td>{{ $ev->umkm_kontak }}</td>
                                            <td>{{ $ev->umkm_onlineshop }}</td>
                                            <td>{{ $ev->umkm_deskripsi }}</td>
                                            <td>
                                                <img src="{{ asset('cover/' . $ev->umkm_cover) }}" alt="image"
                                                    height="40px" width="40px" style="border-radius: 100%">
                                                @foreach ($ev->photoumkms as $photo)
                                                    <img class="mb-2" src="{{ asset('umkm/' . $photo->umkmphoto) }}"
                                                        alt="image" height="40px" width="40px"
                                                        style="border-radius: 100%">
                                                @endforeach
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="{{ route('editUmkmc', [$ev->id]) }}"
                                                        class="btn btn-warning waves-effect waves-light" role="button">
                                                        <span class="btn-label-right">
                                                            <i class="fas fa-edit"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $umkm->links('paginatecustom') }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        {{-- End Page Content --}}

    </div>
    <!-- End of Content Wrapper -->
@endsection