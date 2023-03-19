@extends('contributor.layout.master')
<!-- third party css -->
@section('judul')
<li>
    <h4 class="page-title-main">Destinasi</h4>
</li>
@endsection
@section('content')
<div class="card-body">

    <h4 class="mb-3 header-title">Edit Data Destinasi</h4>

    <form class="form-horizontal">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-4 col-xl-3 col-form-label">Nama Destinasi</label>
            <div class="col-8 col-xl-9">
                <input type="text" class="form-control" id="form-control" placeholder="nama" value="{{$destination->name}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-4 col-xl-3 col-form-label">Kategori</label>
            <div class="col-8 col-xl-9">
                <select class="form-select">
                    <option selected="">Pilih Kategori</option>
                    <option value="1" @if($destination->category_id == 1) selected @endif >History & Heritage</option>
                    <option value="2" @if($destination->category_id == 2) selected @endif >Museum</option>
                    <option value="3" @if($destination->category_id == 3) selected @endif >Religi</option>
                    <option value="4" @if($destination->category_id == 4) selected @endif >Monumen & Landmark</option>
                    <option value="5" @if($destination->category_id == 5) selected @endif >Outdoor and Nature</option>
                    <option value="6" @if($destination->category_id == 6) selected @endif >Kampung Wisata</option>
                    <option value="7" @if($destination->category_id == 7) selected @endif >City Park</option>
                    <option value="8" @if($destination->category_id == 8) selected @endif >Pusat Perbelanjaan</option>
                    <option value="9" @if($destination->category_id == 9) selected @endif >Pasar Tradisional</option>
                    <option value="10" @if($destination->category_id == 10) selected @endif >Cagar Budaya</option>
                    <option value="11" @if($destination->category_id == 11) selected @endif >Art & Culture</option>
                    <option value="12" @if($destination->category_id == 12) selected @endif >Sport</option>
                    <option value="13" @if($destination->category_id == 13) selected @endif >Kuliner</option>
                    <option value="14" @if($destination->category_id == 14) selected @endif >Mice</option>
                    <option value="15" @if($destination->category_id == 15) selected @endif >Family Activities</option>
                    <option value="16" @if($destination->category_id == 16) selected @endif >SPA & Wellness</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Alamat</label>
            <div class="col-8 col-xl-9">
                <textarea class="form-control" placeholder="Tulis Alamat" id="floatingTextarea2" style="height: 100px">{{$destination->address}}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword5" class="col-4 col-xl-3 col-form-label">Wilayah</label>
            <div class="col-8 col-xl-9">
                <select class="form-select">
                    <option selected="">Pilih Wilayah</option>
                    <option value="1" @if($destination->area_id == 1) selected @endif >Surabaya Pusat</option>
                    <option value="2" @if($destination->area_id == 2) selected @endif >Surabaya Barat</option>
                    <option value="3" @if($destination->area_id == 3) selected @endif >Surabaya Timur</option>
                    <option value="4" @if($destination->area_id == 4) selected @endif >Surabaya Utara</option>
                    <option value="5" @if($destination->area_id == 5) selected @endif >Surabaya Selatan</option>
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
                <textarea class="form-control" placeholder="Tulis Deskripsi" id="example-textarea" rows="5">{{$destination->description}}</textarea>
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