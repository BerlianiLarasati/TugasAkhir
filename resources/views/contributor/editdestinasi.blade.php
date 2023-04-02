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
        <h3 class="page-title"> Edit Destination </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Destination</li>
          </ol>
        </nav>
      </div>
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form action="/updatedestinasi/{{$destinasi->id}}" method="POST" enctype="multipart/form-data">
            @csrf
          <h4 class="card-title">Destination Form Edit</h4>
          <p class="card-description"> Input Below Here </p>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputName1">Nama</label>
              <input name='name' type="text" value="{{$destinasi->name}}" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleSelectGender">Kategori</label>
              <select name='address' class="form-control" id="exampleSelectGender">
                <option selected>{{$destinasi->name}}</option>
                <option value="History & Heritage">History & Heritage</option>
                <option value="Museum">Museum</option>
                <option value="religi">religi</option>
                <option value="Outdoor & Nature">Outdoor & Nature</option>
                <option value="Pusat Perbelanjaan">Pusat Perbelanjaan</option>
                <option value="Pasar Tradisional">Pasar Tradisional</option>
                <option value="Kampung Wisata">Kampung Wisata</option>
                <option value="Sport">Sport</option>
                <option value="Cagar Budaya">Cagar Budaya</option>
                <option value="City Park">City Park</option>
                <option value="Monumen & Landmark">Monumen & Landmark</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Wilayah</label>
              <input name='address' value="{{$destinasi->address}}" type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
            </div>
            <div class="form-group">
              <label>File upload</label>
              <input name='foto' type="file" class="file-upload-default">
              @if ($destinasi->foto)
                <img src="{{ asset('fotodestinasi/'.$destinasi->foto) }}" alt="" style="width: 100px; height: auto;">
              @endif
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Deskripsi</label>
              <textarea name='description' class="form-control" id="exampleTextarea1" rows="4">{{$destinasi->address}}</textarea>
            </div>
            <div class="row mt-4">
              <div class="col-sm-6 text-start">
                <a href="{{ route('contributor.datadestinasi') }}" class="btn btn-secondary mr-2">Cancel</a>
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