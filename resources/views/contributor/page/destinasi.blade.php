@extends('contributor.layout.master')
<!-- third party css -->
@section('judul')
<li>
    <h4 class="page-title-main">Destinasi</h4>
</li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-sm-2">
                            <h4>List Destinasi</h4>
                        </div>
                        <div class="col-sm-10">

                            <a class="btn btn-sm btn-success waves-effect waves-light" href="{{route('Cdestinasi_create')}}">
                                + Tambah Destinasi
                            </a>

                        </div>
                    </div>
                    <br>
                    <table class="table table-centered mb-0" id="btn-editable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Destinasi</th>
                                <th>Kategori</th>
                                <th>Alamat</th>
                                <th>Wilayah</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th class="tabledit-toolbar-column">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($data as $destinasi)
                                <tr>
                                    {{-- <td>{{ $no++ }}</td> --}}
                                    <td scope="rom">{{ $destinasi->id }}</td>
                                    <td>{{ $destinasi->name }}</td>
                                    <td>{{ $destinasi->category_id }}</td>
                                    <td>{{ $destinasi->address }}</td>
                                    <td>{{ $destinasi->area_id }}</td>
                                    <td>Gambar</td>
                                    <td>{{ $destinasi->description }}</td>
                                    <td style="white-space: nowrap; width: 1%;">
                                        <a class="btn btn-warning width-xs waves-effect waves-light" href="/'Edestinasi_edit/{id}">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div> <!-- end row -->
</div>
@endsection