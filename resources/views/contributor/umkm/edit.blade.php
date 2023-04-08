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
                                <h4 class="font-weight-bold text-warning">Edit UMKM</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a class="btn-close btn-outline-primary" aria-label="close" href="{{ route('umkmc') }}"
                                    role="button"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="form-group">
                                <form action="{{ route('updateUmkmc', [$umkm->id]) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="title">Produk UMKM</label>
                                        <input type="text" name="umkm_produk" value="{{ $umkm->umkm_produk }}"
                                            id="title" class="form-control">
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
                                        <input type="text" value="{{ $umkm->umkm_toko }}" name="umkm_toko" id="title"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Alamat Umkm</label>
                                        <input type="text" value="{{ $umkm->umkm_alamat }}" name="umkm_alamat"
                                            id="title" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Kontak</label>
                                        <input type="text" value="{{ $umkm->umkm_kontak }}" name="umkm_kontak"
                                            id="title" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Onlineshop</label>
                                        <input type="text" value="{{ $umkm->umkm_onlineshop }}" name="umkm_onlineshop"
                                            id="title" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="umkm_deskripsi" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="umkm_deskripsi" id="umkm_deskripsi" rows="3">{{ $umkm->umkm_deskripsi }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <p for=""> Gambar : </p>
                                        <img src="{{ asset('/cover/' . $umkm->umkm_cover) }}" class="img-responsive"
                                            style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                        <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                                            name="cover">
                                    </div>
                                    @if (count($umkm->photoumkms) > 0)
                                        @foreach ($umkm->photoumkms as $img)
                                            <img src="{{ asset('/umkm/' . $img->umkmphoto) }}" class="img-responsive"
                                                style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                                            <input type="file" id="input-file-now-custom-3" class="form-control m-2"
                                                name="image_{{ $img->id }}">
                                        @endforeach
                                    @endif
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-warning">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
    </div>
@endsection
