@extends('user.layout.master')


@push('css')
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('THEMEWAGON') }}/template/assets/vendors/select2/select2.min.css">
<link rel="stylesheet" href="{{ asset('THEMEWAGON') }}/template/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
<!-- End plugin css for this page -->
@endpush
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Edit UMKM </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit UMKM</li>
          </ol>
        </nav>
      </div>
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form action="/updatekuliner/{{$kuliner->id}}" method="POST" enctype="multipart/form-data">
            @csrf
          <h4 class="card-title">Kuliner Form Edit</h4>
          <p class="card-description"> Input Below Here </p>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputName1">Nama</label>
              <input name='nama' type="text" class="form-control" value="{{ $kuliner->nama }}" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleSelectGender">Kategori</label>
              <select name='kategori' class="form-control" id="exampleSelectGender">
                <option selected>{{ $kuliner->kategori }}</option>
                <option value="Main Course">Main Course</option>
                <option value="Beverages">Beverages</option>
                <option value="Snack">Snack</option>
                <option value="Food Court">Food Court</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Wilayah</label>
              <input name='alamat' type="text" value="{{ $kuliner->alamat }}" class="form-control" id="exampleInputCity1" placeholder="Location">
            </div>
            <div class="form-group">
              <label>File upload</label>
              <input name='foto' type="file" class="file-upload-default">
              @if ($kuliner->foto)
                <img src="{{ asset('storage/umkm/'.$kuliner->foto) }}" alt="" style="width: 100px; height: auto;">
              @endif
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Deskripsi</label>
              <textarea name='deskripsi' class="form-control" id="exampleTextarea1" rows="4">{{ $kuliner->deskripsi }}</textarea>
            </div>

            <div class="row mt-4">
              <div class="col-sm-6 text-start">
                <a href="{{ route('contributor.datakuliner') }}" class="btn btn-secondary mr-2">Cancel</a>
              </div>
              <div class="col-sm-6 text-end">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
@push('js')
        <!-- Plugin js for this page -->
        <script src="{{ asset('THEMEWAGON') }}/template/assets/vendors/select2/select2.min.js"></script>
        <script src="{{ asset('THEMEWAGON') }}/template/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
        <!-- End plugin js for this page -->
            <!-- Custom js for this page -->
    <script src="{{ asset('THEMEWAGON') }}/template/assets/js/file-upload.js"></script>
    <script src="{{ asset('THEMEWAGON') }}/template/assets/js/typeahead.js"></script>
    <script src="{{ asset('THEMEWAGON') }}/template/assets/js/select2.js"></script>
    <!-- End custom js for this page -->
@endpush