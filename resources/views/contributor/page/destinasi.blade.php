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
                            <tr>
                                <td>1</td>
                                <td>MASJID NASIONAL AL-AKBAR SURABAYA</td>
                                <td>Religi</td>
                                <td>Jl. Genteng Kali No. 10</td>
                                <td>Surabaya Pusat</td>
                                <td>Gambar</td>
                                <td>Masjid Nasional Al Akbar atau biasa disebut Masjid Agung Surabaya terbesar di Surabaya memiliki ciri yang mudah dilihat adalah kubahnya yang besar didampingi 4 kubah kecil yang berwarna biru. Serta memiliki satu menara yang tingginya 99 meter dengan lift yang dapat digunakan pengunjung untuk melihat pemandangan Surabaya. Masjid ini dibangun pada tahun 1995 dan dapat menampung hingga 25.000 jamaah. </td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <a class="btn btn-warning width-xs waves-effect waves-light" href="{{route('Edestinasi_create')}}">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>MASJID NASIONAL AL-AKBAR SURABAYA</td>
                                <td>Religi</td>
                                <td>Jl. Genteng Kali No. 10</td>
                                <td>Surabaya Pusat</td>
                                <td>Gambar</td>
                                <td>Masjid Nasional Al Akbar atau biasa disebut Masjid Agung Surabaya terbesar di Surabaya memiliki ciri yang mudah dilihat adalah kubahnya yang besar didampingi 4 kubah kecil yang berwarna biru. Serta memiliki satu menara yang tingginya 99 meter dengan lift yang dapat digunakan pengunjung untuk melihat pemandangan Surabaya. Masjid ini dibangun pada tahun 1995 dan dapat menampung hingga 25.000 jamaah. </td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <a class="btn btn-warning width-xs waves-effect waves-light" href="{{route('Cdestinasi_create')}}">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div> <!-- end row -->
</div>
@endsection