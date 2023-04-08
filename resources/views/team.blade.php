<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>team</title>
    <link rel="shortcut icon" href="{{asset('css/assets')}}/favicon.png">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{asset('css/tes.css')}}" />
  </head>
  
    <body>
        <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('css/assets/logo-white.png')}}" class="putih" /></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-home navbar-nav">
                <li><a class="nav-link" href="{{ route('home') }}">Home</a></lint=>
                <li><a class="nav-link" href="{{ route('destinasi') }}">Destinasi</a></li>  
                <li><a class="nav-link" href="{{ route('kuliner') }}">UMKM</a></li> 
                <li><a class="nav-link active-nav" href="{{ route('team') }}">The Team</a></li> 
                <li><a class="nav-link" href="{{ route('auth') }}">Login</a></li> 
            </ul>
            </div>
        </div>
        </nav>

        <div class="judul-path">
        <p><a href="{{ route('home') }}"> Beranda</a>
            <span>> The Team </span>
        </p>
        </div>
        <div class="judul-page">
        <h2>KELOMPOK 4</h2>
        </div>

        {{-- content contributors --}}
        <div class="responsive-container-block container">
            <div class="responsive-container-block">
              <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                  <div class="team-image-wrapper">
                    <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert1.png">
                  </div>
                  <p class="text-blk name">
                    Berliani Larasati
                  </p>
                  <p class="text-blk position">
                    Front-End Web Developer
                  </p>
                  {{-- <p class="text-blk feature-text">
                    Sixth semester Statistic student from Universitas Airlangga.
                  </p> --}}
                  <div class="social-icons">
                    <a href="https://www.twitter.com" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                  <div class="team-image-wrapper">
                    <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert2.png">
                  </div>
                  <p class="text-blk name">
                    Putu Althea Putri
                  </p>
                  <p class="text-blk position">
                    Front-End Web Developer
                  </p>
                  {{-- <p class="text-blk feature-text">
                    Fresh graduate electrical engineering student from Universitas Udayana.
                  </p> --}}
                  <div class="social-icons">
                    <a href="https://www.twitter.com" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                  <div class="team-image-wrapper">
                    <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET7.14.png">
                  </div>
                  <p class="text-blk name">
                    Reynisa Beta Nurlyan
                  </p>
                  <p class="text-blk position">
                    Front-End Web Developer
                  </p>
                  {{-- <p class="text-blk feature-text">
                    Sixth semester Informatics Engineering student from Universitas Negeri Surabaya.
                  </p> --}}
                  <div class="social-icons">
                    <a href="https://www.twitter.com" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                  <div class="team-image-wrapper">
                    <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET7.15.png">
                  </div>
                  <p class="text-blk name">
                    Gede Ardi Pratama
                  </p>
                  <p class="text-blk position">
                    Back-End Web Developer
                  </p>
                  {{-- <p class="text-blk feature-text">
                    Sixth semester Informatics Engineering student from UPN Veteran Jawa Timur.
                  </p> --}}
                  <div class="social-icons">
                    <a href="https://www.twitter.com" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
                <div class="card">
                  <div class="team-image-wrapper">
                    <img class="team-member-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/expert2.png">
                  </div>
                  <p class="text-blk name">
                    Bagus Untoro
                  </p>
                  <p class="text-blk position">
                    Back-End Web Developer
                  </p>
                  {{-- <p class="text-blk feature-text">
                    Fourth semester Informatics Engineering student from Universitas Airlangga..
                  </p> --}}
                  <div class="social-icons">
                    <a href="https://www.twitter.com" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="kosong"> <br> </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="transform:rotate(180deg);margin-bottom:-1px">
        <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
        </path>
        <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
        <path class="elementor-shape-fill" fill="#4a4a8a" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
        </svg>
        <footer style="background-color: #4a4a8a; ">
            <div class="isi-footer" >
                <div class="isifoot-content1">
                    <div class="row1">
                        <h6>FIND US</h6>
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
                <div class="isifoot-content2">
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
                            <br>
                            <li class="li2">
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
                <div class="isifoot-content3">
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
                <div class="isifoot-content4">
                    <div class="row1">
                        <h6>WISATA SURABAYA</h6>
                    </div>
                    <div class="row2"></div>
                </div>
            </div>
        </footer>
    </body>
</html>