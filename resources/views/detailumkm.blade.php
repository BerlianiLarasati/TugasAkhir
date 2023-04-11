<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Surabaya</title>
    <link rel="shortcut icon" href="{{asset('/adminto/images/surabaya-shortcuticon.png')}}">

    <!-- CDN Vue JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script> --}}

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href=" {{ asset('assets/css/styles.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/all-style.css') }}">

</head>

<body>
    <!-- Navigasi -->
    <section class="navigasi">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('/assets/img/header/surabaya.png')}}" class="putih" /></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-home navbar-nav">
                    <li><a class="nav-link" href="{{ route('home') }}">Home</a></lint=>
                    <li><a class="nav-link" href="{{ route('publicDestinasi') }}">Destinasi</a></li>   
                    <li><a class="nav-link active-nav" href="{{ route('publicUmkm') }}">UMKM</a></li> 
                    <li><a class="nav-link" href="{{ route('aboutus') }}">About Us</a></li> 
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li> 
                </ul>
                </div>
            </div>
        </nav>
    </section>

    {{-- Judul --}}
    <div class="text-center mt-5 mb-5">
        <div class="deskripsi judul-path">
            <p><a href="{{ route('home') }}"> Beranda </a>
                <span><a href="{{ route('publicUmkm') }}">> Produk UMKM </span>
                  <span>> Deskripsi </span>
              </p>
        </div>
        <h2 class="text-uppercase font-weight-bold mb-4" style="color:black"> {{ $umkm->umkm_produk }} </h2>
    </div>

    {{-- Content --}}
    <section class="py-7">
        <div class="container">
            <div class="umkm-detail row">
                <div class="col-lg-6 .col-md-12 .col-sm-12">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('cover/' . $umkm->umkm_cover) }}"
                                    class="d-block w-100" style="border-radius: 40px" alt="GambarEvent">
                            </div>
                            @foreach ($umkm->photoumkms as $photo)
                                <div class="carousel-item">
                                    <img src="{{ asset('umkm/' . $photo->umkmphoto) }}"
                                    class="d-block w-100" style="border-radius: 40px" alt="GambarEvent">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6 .col-md-12 .col-sm-12">
                    <div class="content">
                        <div class="label">{{$umkm->umkm_kategori}}</div>
                        <h1>{{$umkm->umkm_produk}}</h1>
                        <div class="nama-toko">
                            <i class="fas fa-store"></i>
                            <span>{{$umkm->umkm_toko}}</span>
                        </div>
                        <div class="deskripsi-toko">
                            <p>{{$umkm->umkm_deskripsi}}
                            </p>
                        </div>

                        <div class="umkm-icon-desc card">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{$umkm->umkm_alamat}}</span><br>
                            <i class="fa-solid fa-phone"></i>
                            <span>{{$umkm->umkm_kontak}}</span><br>
                            <i class="fa-solid fa-globe"></i>
                            <span>{{$umkm->umkm_onlineshop}}</span>
                        </div>

                </div>

                {{-- <div class="col-6">
                    <div class="card mb-2 shadow">
                        <div class="card-body px-1">
                            <div class="d-flex align-items-center">
                                <div class="text-center p-1 mr-2">
                                    <i class="fa fa-store" style="font-size: 30px;"></i>
                                </div>
                                <div>
                                    <h6 class="font-weight-bold mb-1">
                                        Nama Toko
                                    </h6>
                                    <p style="color: black">
                                        {{ $umkm->umkm_toko }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-6 my-2 shadow">
                        <div class="card-body px-1">
                            <div class="d-flex align-items-center">
                                <div class="text-center p-1 mr-2">
                                    <i class="fa fa-fw fa-calendar-alt" style="font-size: 30px;"></i>
                                </div>
                                <div>
                                    <h6 class="font-weight-bold mb-1">
                                        kategori
                                    </h6>
                                    <p style="color: black">
                                        {{ $umkm->umkm_kategori }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2 shadow">
                        <div class="card-body px-1">
                            <div class="d-flex align-items-center">
                                <div class="text-center p-1 mr-2">
                                    <i class="fa fa-fw fa-map-marked-alt" style="font-size: 30px;"></i>
                                </div>
                                <div>
                                    <h6 class="font-weight-bold mb-1">
                                        Alamat
                                    </h6>
                                    <p style="color: black">
                                        {{ $umkm->umkm_alamat }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2 shadow">
                        <div class="card-body px-1">
                            <div class="d-flex align-items-center">
                                <div class="text-center p-1 mr-2">
                                    <i class="fa fa-fw fa-user" style="font-size: 30px;"></i>
                                </div>
                                <div>
                                    <h6 class="font-weight-bold mb-1">
                                        Kontak
                                    </h6>
                                    <p style="color: black">
                                        {{ $umkm->umkm_kontak }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2 shadow">
                        <div class="card-body px-1">
                            <div class="d-flex align-items-center">
                                <div class="text-center p-1 mr-2">
                                    <i class="fa fa-basket-shopping" style="font-size: 30px;"></i>
                                </div>
                                <div>
                                    <h6 class="font-weight-bold mb-1">
                                        Onlineshop
                                    </h6>
                                    <p style="color: black">
                                        {{ $umkm->umkm_onlineshop }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 mb-5" style="margin: 0; text-indent: 2rem; text-align: justify; font-size: 15px;" class="mb-5"
                id="content">
                                    <p style="color: black">
                                        {{ $umkm->umkm_deskripsi }}
                                    </p>
            </div> --}}
        </div>
    </section>


    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
        style="transform:rotate(180deg);margin-bottom:-1px">
        <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.33"
            d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7
                    c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
        </path>
        <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.66"
            d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1
                    s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z">
        </path>
        <path class="elementor-shape-fill" fill="#4a4a8a"
            d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0
                    h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
        </path>
    </svg>
    <footer style="background-color: #4a4a8a; ">
        <div class="isi5 col-md-12 col-sm-12" >
            <div class="isi5-content1 col-md-12 col-sm-12">
                <div class="row1">
                    <h6 style="color: white">FIND US</h6>
                </div>
                <div class="row2">
                    <ul class="list1">
                        <li class="li1">
                            <a href="http://">Tourism Information Center <br> Jl. Gubernur Suryo 15</a>
                        </li>
                        <li class="li2">
                            <a href=""><i class="fa fa-fw fa-phone"></i> Kontak Kami</a>
                        </li>
                        <li class="li3">
                            <a href=""><i class="fab fa-lg fa-facebook text-white" aria-hidden="true"></i> </a>
                            &nbsp;
                            <a href=""></a><i class="fab fa-lg fa-instagram text-white" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="isi5-content2 col-md-12 col-sm-12">
                <div class="row1">
                    <h6>CONTACT US</h6>
                    <p>
                        Dinas Kebudayaan, Kepemudaan dan Olahraga serta Pariwisata Kota Surabaya Kota Surabaya
                    </p>
                    <ul class="list2">
                        <li class="li1">
                                <i class="fa fa-fw fa-map-marker-alt"></i>
                                <p>
                                    Jl. Tunjungan No.1-3 Kelurahan Genteng <br>
                                    Kecamatan Genteng, Kota Surabaya <br>
                                    Jawa Timur, Indonesia, 60275
                                </p>
                        </li>
                        <li class="li2" style="margin-top: 20px">
                            <i class="fa fa-lg fa-fw fa-phone pull-left"></i>
                            <p>
                                031-5318409
                            </p>
                        </li>
                        <li class="li3">
                            <i class="fa fa-lg fa-fw fa-envelope"></i>
                                <p>
                                    disbudporapar@surabaya.go.id
                                </p>
                        </li>
                    </ul>
                </div>
                <div class="row2"></div>
            </div>
            <div class="isi5-content3 col-md-12 col-sm-12">
                <div class="row1">
                    <h6>OUR OTHER SITE</h6>
                </div>
                <div class="row2">
                    <ul class="list3">
                        <li class="li1">
                            <a href="https://disbudporapar.surabaya.go.id">
                                Disbudporapar Surabaya
                            </a>
                        </li>
                        <li class="li1">
                            <a href="https://virtualtourism.surabaya.go.id">
                                360° Surabaya
                            </a>
                        </li>
                        <li class="li1">
                            <a href="https://tiketwisata.surabaya.go.id">
                                Tiket Wisata Surabaya
                            </a>
                        </li>
                        <li class="li1">
                            <a href="https://ka-mus.surabaya.go.id">
                                Katalog Museum Surabaya
                            </a>
                        </li>
                        <li class="li1">
                            <a href="https://bangga.surabaya.go.id/">
                                Bangga Surabaya
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="isi5-content4 col-md-12 col-sm-12">
                <div class="row1">
                    <h6>WISATA SURABAYA</h6>
                </div>
                <div class="row2"></div>
            </div>
        </div>
  </footer>
</div>
<!-- source -->
<script src="javascript.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
  crossorigin="anonymous"
></script>
</body>

</html>