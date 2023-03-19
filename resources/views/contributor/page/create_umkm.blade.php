@extends('contributor.layout.master')
<!-- third party css -->
@section('judul')
<li>
    <h4 class="page-title-main">Destinasi</h4>
</li>
@endsection
@section('content')
<div class="card-body">

    <h4 class="mb-3 header-title">Tambah Data Destinasi</h4>

    <form class="form-horizontal" action="{{route('Cdestinasi_insert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-4 col-xl-3 col-form-label">Nama Produk</label>
            <div class="col-8 col-xl-9">
                <input type="text" name="name" class="form-control" id="form-control" placeholder="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Kategori</label>
            <div class="col-8 col-xl-9">
                <select name="category_id" class="form-select">
                    <option value="1">Food & Beverages</option>
                    <option value="2">Fashion</option>
                    <option value="3">Handicraft</option>
                    <option value="4">Decoration</option>
                    <option value="5">Jewelry & Accessories</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-4 col-xl-3 col-form-label">Nama Toko</label>
            <div class="col-8 col-xl-9">
                <input type="text" name="name" class="form-control" id="form-control" placeholder="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Alamat</label>
            <div class="col-8 col-xl-9">
                <textarea name="address" class="form-control" placeholder="Tulis Alamat" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Wilayah</label>
            <div class="col-8 col-xl-9">
                <select name="area_id" class="form-select">
                    <option selected="">Pilih Wilayah</option>
                    <option value="1">Surabaya Pusat</option>
                    <option value="2">Surabaya Barat</option>
                    <option value="3">Surabaya Timur</option>
                    <option value="4">Surabaya Utara</option>
                    <option value="5">Surabaya Selatan</option>
                </select>
            </div>
        </div>
        {{-- <div class="row mb-3">
            <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Gambar (Maksimal 2MB)</label>
            <div class="col-8 col-xl-9">
                <input type="file" id="example-fileinput" class="form-control">
            </div>
        </div> --}}
        <div class="row mb-3">
            <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Deskripsi</label>
            <div class="col-8 col-xl-9">
                <textarea name="description" class="form-control" placeholder="Tulis Deskripsi" id="example-textarea" rows="5"></textarea>
            </div>
        </div>
        <div class="justify-content-end row">
            <div class="col-8 col-sm-1">
                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
            </div>
            <div class="col-8 col-sm-1">
                <a type="submit" href="{{route('Cdestinasi')}}" class="btn btn-danger waves-effect waves-light">Kembali</a>
            </div>
        </div>
    </form>

</div>
@endsection