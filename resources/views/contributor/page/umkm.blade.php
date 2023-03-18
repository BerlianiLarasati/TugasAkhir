@extends('contributor.layout.master')
<!-- third party css -->
@section('judul')
<li>
    <h4 class="page-title-main">UMKM</h4>
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
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Nama Toko</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                                <th>Online Shop</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th class="tabledit-toolbar-column">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Batik Tulis</td>
                                <td>Fashion</td>
                                <td>Batik Tulis Jarak Arum</td>
                                <td>Kupang Gunung Jaya IX/9 Kecamatan Sawahan</td>
                                <td>082131394619</td>
                                <td>https://shopee.co.id/aqisarosella10</td>
                                <td>Gambar</td>
                                <td>UMKM Batik Tulis Jarak Arum memproduksi batik tulis berupa kain dan baju jadi.</td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <a class="btn btn-warning width-xs waves-effect waves-light" href="#">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Batik Tulis</td>
                                <td>Fashion</td>
                                <td>Batik Tulis Jarak Arum</td>
                                <td>Kupang Gunung Jaya IX/9 Kecamatan Sawahan</td>
                                <td>082131394619</td>
                                <td>https://shopee.co.id/aqisarosella10</td>
                                <td>Gambar</td>
                                <td>UMKM Batik Tulis Jarak Arum memproduksi batik tulis berupa kain dan baju jadi.</td>
                                <td style="white-space: nowrap; width: 1%;">
                                    <a class="btn btn-warning width-xs waves-effect waves-light" href="#">
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