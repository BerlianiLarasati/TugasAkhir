@extends('contributor.layout.master')
@section('judul')
    <li>
        <h2 class="page-title-main">Destinasi</h2>
    </li>
@endsection

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Destinasi</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('searchDestinasic') }}" method="GET">
                            <div class="row">
                                <div class="col-9 mb-3">
                                    <a href="{{ route('tambahDestinasic') }}"
                                        class="btn btn-success rounded-pill waves-effect waves-light">
                                        <span class="btn-label">
                                            <i class="mdi mdi-check-all"></i>
                                        </span>
                                        Tambah Data
                                    </a>
                                </div>
                                <div class="col-3 d-flex justify-content-end mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if (session('gagal'))
                            <div class="alert alert-danger">
                                <b> Oops! </b> {{ session('error') }}
                            </div>
                        @endif

                        @if (session('berhasil'))
                            <div class="alert alert-success">
                                <b> Hooray! </b> {{ session('berhasil') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">No</th> --}}
                                        <th scope="col">Nama</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Cover</th>
                                        <th scope="col"> Image </th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($destinasi as $dest)
                                        <tr>
                                            {{-- <td>{{ $no++ }}</td> --}}
                                            <td>{{ $dest->dest_name }}</td>
                                            <td>{{ $dest->dest_category }}</td>
                                            <td>{{ $dest->dest_location }}</td>
                                            <td>{{ $dest->dest_desc }}</td>
                                            <td>
                                                <img src="{{ asset('cover/' . $dest->dest_cover) }}" alt="image"
                                                    height="40px" width="40px" style="border-radius: 100%">
                                            </td>
                                            <td>
                                                @foreach ($dest->photodests as $photo)
                                                    <img class="mb-2" src="{{ asset('destinasi/' . $photo->destphoto) }}"
                                                        alt="image" height="40px" width="40px"
                                                        style="border-radius: 100%">
                                                @endforeach
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="{{ route('editDestinasic', [$dest->id]) }}"
                                                        class="btn btn-warning waves-effect waves-light" role="button">
                                                        <span class="btn-label-right">
                                                            <i class="fas fa-edit"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $destinasi->links('paginatecustom') }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        {{-- End Page Content --}}

    </div>
@endsection
