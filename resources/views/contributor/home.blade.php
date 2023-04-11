@extends('contributor.layout.master')
@section('judul')
    <li>
        <h2 class="page-title-main">Dashboard</h2>
    </li>
@endsection

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="text-center">
                                    <h2 class="fw-normal text-primary" data-plugin="counterup">{{ $user }}</h2>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="text-center">
                                    <h2 class="fw-normal text-pink" data-plugin="counterup">{{ $contri }}</h2>
                                    <h5>Kontributor</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="text-center">
                                    <h2 class="fw-normal text-warning" data-plugin="counterup">{{ $dest }}</h2>
                                    <h5>Destinasi</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="text-center">
                                    <h2 class="fw-normal text-info" data-plugin="counterup">{{ $umkm }}</h2>
                                    <h5>UMKM</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Content Row -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                    </div>
                    <div class="card-body">
                        <p style="color:grey">Selamat Datang, {{ Auth::user()->name }}</p>
                        <p style="color:grey">Anda login dengan role ( {{ Auth::user()->role }} ) </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
@endsection
