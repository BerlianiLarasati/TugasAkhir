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
                <!-- Content Row -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="font-weight-bold text-success">Tambah UMKM</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a class="btn-close btn-outline-primary" aria-label="close" href="{{ route('umkmc') }}"
                                    role="button"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <form action="{{ route('storeUmkmc') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li> {{ $error }} </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group mb-3">
                                    <label for="title">Produk UMKM</label>
                                    <input type="text" name="umkm_produk" id="title" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Kategori UMKM</label>
                                    <select name="umkm_kategori" class="form-select" aria-label="Default select">
                                        <option selected>Pilih Kategori</option>
                                        <option value="Fashion"> Kuliner</option>
                                        <option value="Fashion"> Fashion</option>
                                        <option value="Pendidikan"> Pendidikan</option>
                                        <option value="Otomotif"> Otomotif</option>
                                        <option value="Agribisnis"> Agribisnis</option>
                                        <option value="Tour & Travel"> Tour & Travel</option>
                                        <option value="Produk Kreatif"> Produk Kreatif</option>
                                        <option value="Teknologi Internet"> Teknologi Internet</option>
                                        <option value="Event Organizer"> Event Organizer</option>
                                        <option value="Jasa Kebersihan"> Jasa Kebersihan</option>
                                        <option value="Kebutuhan Anak"> Kebutuhan Anak</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Nama Toko</label>
                                    <input type="text" name="umkm_toko" id="title" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Alamat Umkm</label>
                                    <input type="text" name="umkm_alamat" id="title" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Kontak</label>
                                    <input type="text" name="umkm_kontak" id="title" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Onlineshop</label>
                                    <input type="text" name="umkm_onlineshop" id="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="event_desc" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="umkm_deskripsi" id="umkm_deskripsi" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Masukan Gambar</label>
                                    <input class="form-control" name="cover" type="file" id="formFile" required>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="images[]" type="file" id="formFile" multiple
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="images[]" type="file" id="formFile" multiple
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="images[]" type="file" id="formFile" multiple
                                        required>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
    @endsection
