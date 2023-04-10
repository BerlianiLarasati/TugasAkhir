@extends('admin.layout.master')
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
                                <a class="btn-close btn-outline-primary" aria-label="close" href="{{ route('umkm') }}"
                                    role="button"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="form-group">
                                <form action="{{ route('updateUmkm', [$umkm->id]) }}" method="post"
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
                                            <option @if ($umkm->umkm_produk=='Kuliner') selected @endif > Kuliner</option>
                                            <option @if ($umkm->umkm_produk=='Fashion') selected @endif> Fashion</option>
                                            <option @if ($umkm->umkm_produk=='Pendidikan') selected @endif> Pendidikan</option>
                                            <option @if ($umkm->umkm_produk=='Otomotif') selected @endif> Otomotif</option>
                                            <option @if ($umkm->umkm_produk=='Agribisnis') selected @endif> Agribisnis</option>
                                            <option @if ($umkm->umkm_produk=='Tour & Travel') selected @endif> Tour & Travel</option>
                                            <option @if ($umkm->umkm_produk=='Produk Kreatif') selected @endif> Produk Kreatif</option>
                                            <option @if ($umkm->umkm_produk=='Teknologi Internet') selected @endif> Teknologi Internet</option>
                                            <option @if ($umkm->umkm_produk=='Event Organizer') selected @endif> Event Organizer</option>
                                            <option @if ($umkm->umkm_produk=='Jasa Kebersihan') selected @endif> Jasa Kebersihan</option>
                                            <option @if ($umkm->umkm_produk=='Kebutuhan Anak') selected @endif> Kebutuhan Anak</option>
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
