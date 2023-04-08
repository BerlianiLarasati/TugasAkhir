@extends('admin.layout.master')
@section('judul')
    <li>
        <h2 class="page-title-main">Destinasi</h2>
    </li>
@endsection

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="font-weight-bold text-success">Tambah Destinasi</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a class="btn-close btn-outline-primary" aria-label="close" href="{{ route('destinasi') }}"
                                    role="button"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <form action="{{ route('storeDestinasi') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="title">Nama Destinasi</label>
                                    <input type="text" name="dest_name" id="title" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Destinasi Kategori</label>
                                    <select name="dest_category" class="form-select" aria-label="Default select">
                                        <option selected>Pilih Kategori</option>
                                        <option value="Pusat Perbelanjaan"> Pusat Perbelanjaan</option>
                                        <option value="Monumen"> Monumen</option>
                                        <option value="Religi"> Religi</option>
                                        <option value="Nature and Outdoor"> Nature and Outdoor</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Lokasi Destinasi</label>
                                    <input type="text" name="dest_location" id="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="dest_desc" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="dest_desc" id="dest_desc" rows="3"></textarea>
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
    </div>
@endsection
