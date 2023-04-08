<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Surabaya</title>
    <link rel="shortcut icon" href="{{asset('css/assets/favicon.png')}}">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
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
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <div class="logo">
          <a href="{{route('home')}}"><img src="{{asset('css/assets/logo-white.png')}}" class="putih" /></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-home navbar-nav">
            <li><a class="nav-link active-nav" href="{{ route('home') }}">Home</a></lint=>
            <li><a class="nav-link" href="{{ route('destinasi') }}">Destinasi</a></li>  
            <li><a class="nav-link" href="{{ route('kuliner') }}">UMKM</a></li> 
            <li><a class="nav-link" href="{{route('team')}}">The Team</a></li> 
            <li><a class="nav-link" href="{{ route('auth') }}">Login</a></li> 
          </ul>
        </div>
      </div>
    </nav>

    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="{{ asset ('css/assets')}}/myVideo.mp4" type="video/mp4"/>
        </video>
        <div class="intro">
          <h2>WISATA SURABAYA</h2>
          <h3>You will love every corner of it</h3>
          <span class="slidein">
            Let's explore on of the biggest city in Indonesia with famous name
            called City of Heroes
          </span>
          <div class="ripple">
            <div class="icon">
              <a class="a1" href="{{ route('destinasi') }}"
                ><i class="fa-solid fa-archway"></i><br />
                Destinasi <br />
                Wisata</a
              >
              <a class="a1" href="{{ route('kuliner') }}"
                ><i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i> <br />
                UMKM <br />
                Surabaya</a
                >
            </div>
          </div>
        </div>
      </header>
      <!-- section bagian icon -->
      <div class="container">
        <div class="col-10 mx-auto">
          <div class="isi-satu row justify-content-center">
            <div class="col-3 text-center my-2">
              <a href="">
                <img class="img-fluid" style="object-fit: cover" src="{{ asset ('css/assets')}}/icon-event.png" alt="" />
                <br />
                <h6 class="font-weight-bold my-2">Event</h6>
              </a>
            </div>
            <div class="col-3 text-center my-2">
              <a href="">
                <img class="img-fluid" style="object-fit: cover" src="{{ asset ('css/assets')}}/icon-maps.png" alt="" />
                <br />
                <h6 class="font-weight-bold my-2">Peta</h6>
              </a>
            </a>
            </div>            
            <div class="col-3 text-center my-2">
              <a href="{{ route('kuliner') }}">
                <img class="img-fluid" style="object-fit: cover" src="{{ asset ('css/assets')}}/icon-culinary.png" alt="" />
                <br />
                <h6 class="font-weight-bold my-2">Kuliner</h6>
              </a>
            </a>
            </div>            
            <div class="col-3 text-center my-2">
              <a href="">
                <img class="img-fluid" style="object-fit: cover" src="{{ asset ('css/assets')}}/icon-shopping.png" alt="" />
                <br />
                <h6 class="font-weight-bold my-2">Shopping</h6>
              </a>
            </div>  
            <div class="col-3 text-center my-2">
              <a href="">
                <img class="img-fluid" style="object-fit: cover" src="{{ asset ('css/assets')}}/icon-outdoornature.png" alt="" />
                <br />
                <h6 class="font-weight-bold my-2">Outdoor</h6>
              </a>
            </div>            
            <div class="col-3 text-center my-2">
              <a href="">
                <img class="img-fluid" style="object-fit: cover" src="{{ asset ('css/assets')}}/icon-hotel.png" alt="" />
                <br />
                <h6 class="font-weight-bold my-2">Hotel</h6>
              </a>
            </a>
            </div>            
            <div class="col-3 text-center my-2">
              <a href="">
                <img class="img-fluid" style="object-fit: cover" src="{{ asset ('css/assets')}}/icon-heritage.png" alt="" />
                <br />
                <h6 class="font-weight-bold my-2">Heritage</h6>
              </a>
            </div>            
            <div class="col-3 text-center my-2">
              <a href="">
                <img class="img-fluid" style="object-fit: cover" src="{{ asset ('css/assets')}}/icon-faq.png" alt="" />
                <br />
                <h6 class="font-weight-bold my-2">FAQ</h6>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- section bagian 360-->
      <section class="section-explore360 py-3">
        <div class="py-4">
          <div class="container">
            <div class="row">
              <div class="col-8">
                <h4 class="title-highlight">
                  <div class="h4-1" style="color: #039be5">Explore 360</div> <br>
                  <div class="h4-2" style="color: #ff9800">Wisata Surabaya</div>
                </h4>
              </div>
              <div class="col-4">
                <div class="text-right">
                  <img
                    src="{{ asset ('css/assets')}}/icon-360.png"
                    class="img-fluid text-right img-icon"
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="container_video_overlay">
                  <video
                    class="w-100 video-front"
                    autoplay
                    muted
                    loop
                    id="myVideo"
                    class="w-100 video-front"
                    style="object-fit: cover"
                  >
                    <source src="{{ asset ('css/assets')}}/Wisata.mp4" type="video/mp4" />
                  </video>
                  <div class="video_overlay">
                    <a
                      href="http://virtualtourism.surabaya.go.id"
                      class="btn btn-white btn-primary-shadow"
                      target="_blank"
                    >
                      <h6 class="font-weight-bold mb-0 video_text_explore360">
                        VISIT <br />
                        virtualtourism.surabaya.go.id
                      </h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section sub menu -->
      <section class="section-article py-3">
        <div class="py-6">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="text-center">
                  <img src="{{ asset ('css/assets')}}/icon-sign.png" alt="" />
                  <h3>
                    Start Your Best <br />
                    Journey In Surabaya
                  </h3>
                </div>
              </div>
            </div>
            {{-- codingan yang lama --}}
            {{-- <div class="gridEventSby">
              <div class="grid-block1">
                <div class="history-grid">
                  <img
                    src="https://tourism.surabaya.go.id/storage/tour/1672116704_1.jpg"
                    alt=""
                  />
                  <div class="sub-grid">
                    <div class="eventnya">
                      <a href="">History & Heritage</a>
                    </div>
                    <div class="namaevent">
                      <a href=""
                        >GEDUNG ESCOMPTO (Bank Mandiri KCP Kembang Jepun)</a
                      >
                    </div>
                    <div class="alamat">
                      <span class="material-symbols-outlined"> location_on </span>
                      <a href="">Jl. Kembang Jepun No 180</a>
                    </div>
                  </div>
                </div>
                <div class="event-grid">
                  <img
                    src="https://tourism.surabaya.go.id/storage/event/Muhibah%20Budaya%20Jalur%20Rempah%202022_1653638056.jpeg"
                    alt=""
                  />
                  <div class="sub-grid">
                    <div class="eventnya">
                      <a href="">Event</a>
                    </div>
                    <div class="namaevent">
                      <a href="">Muhibah Budaya Jalur Rempah 2022</a>
                    </div>
                    <div class="alamat">
                      <span class="material-symbols-outlined"> location_on </span>
                      <a href="">
                        Jl. Gubernur Suryo No.15, Embong Kaliasin, Kec. Genteng,
                        Kota SBY, Jawa Timur 60271
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-block2">
                <div class="hotel-grid">
                  <img
                    src="https://tourism.surabaya.go.id/storage/accomodation/Bekizaar%20Business%20Hotel_1653624861_1.jpg"
                    alt=""
                  />
                  <div class="sub-grid">
                    <div class="eventnya">
                      <a href="">Hotel</a>
                    </div>
                    <div class="namaevent">
                      <a href="">Bekizaar Business Hotel</a>
                    </div>
                    <div class="alamat">
                      <span class="material-symbols-outlined"> location_on </span>
                      <a href="">
                        Jl. Basuki Rahmat No.15, Embong Kaliasin, Kec. Genteng, Kota
                        SBY, Jawa Timur 60271
                      </a>
                    </div>
                  </div>
                </div>
                <div class="history-grid">
                  <img
                    src="https://tourism.surabaya.go.id/storage/tour/1672116409_1.jpg"
                    alt=""
                  />
                  <div class="sub-grid">
                    <div class="eventnya">
                      <a href="">History & Heritage</a>
                    </div>
                    <div class="namaevent">
                      <a href="">Rumah Abu Keluarga Han</a>
                    </div>
                    <div class="alamat">
                      <span class="material-symbols-outlined"> location_on </span>
                      <a href="">Jl. Karet No 72</a>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- codingan baru --}}
            <div class="row my-4">
              <div class="col-md-6 mb-2">
                <div class="row">
                  <div class="col-md-12 my-4">
                    <a class="text-dark w-100">
                      <div
                        class="card card-img"
                        style="
                          box-shadow: none;
                          border: none;
                        "
                      >
                        <div class="img-hover">
                          <img
                            src="{{ asset ('css/assets')}}/Gedung.jpg"
                            class="img-fluid card-img-top img-1"
                            style="border-radius: 10px"
                          />
                        </div>
                      </div>
                      <div class="py-3">
                        <div class="mb-2 label">
                          <label> History &amp; Heritage </label>
                        </div>
                        <h5 class="font-weight-bold home-title-destination">
                          GEDUNG ESCOMPTO (Bank Mandiri KCP Kembang Jepun)
                        </h5>
                        <div class="home-address-destination">Jl. Kembang Jepun No 180</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-12 my-4">
                    <div
                      class="card card-img"
                      style="
                        box-shadow: none;
                        border: none;
                      "
                    >
                      <div class="img-hover">
                        <img
                          src="{{ asset ('css/assets')}}/Piala Walikota.png"
                          class="img-fluid card-img-top img-2"
                          style="border-radius: 10px"
                        />
                      </div>
                    </div>
                    <div class="text-dark py-3">
                      <div class="mb-2 label">
                        <label> Event </label>
                      </div>
                      <h5 class="font-weight-bold home-title-destination">
                        Piala Walikota Tournament Skateboard
                      </h5>
                      <div class="mb-2 home-address-destination">
                        Skate &amp; BMX Park Ketabang (Parkir Timur Delta
                        Plaza) | Jl. Pemuda No. 31-37 (Jl. Plaza Boulevard)
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="row">
                  <div class="col-md-12 my-4">
                    <div
                      class="card card-img"
                      style="
                        box-shadow: none;
                        border: none;
                      "
                    >
                      <div class="img-hover">
                        <img
                          src="{{ asset ('css/assets')}}/hotel.jpg"
                          class="img-fluid card-img-top img-3"
                          style="border-radius: 10px"
                        />
                      </div>
                    </div>
                    <div class="text-dark py-3">
                      <div class="mb-2 label">
                        <label> Hotel </label>
                      </div>
                      <h5 class="font-weight-bold home-title-destination">
                        Hotel JW Marriott Surabaya
                      </h5>
                      <div class="mb-2 home-address-destination">Jl. Embong Malang No.85 - 89</div>
                    </div>
                  </div>
                  <div class="col-md-12 my-4">
                    <div
                      class="card card-img"
                      style="
                        box-shadow: none;
                        border: none;
                      "
                    >
                      <div class="img-hover">
                        <img
                          src="{{asset('css/assets')}}/balai.jpg"
                          class="img-fluid card-img-top img-4"
                          style="border-radius: 10px"
                        />
                      </div>
                    </div>
                    <div class="text-dark py-3">
                      <div class="mb-2 label">
                        <label> History &amp; Heritage </label>
                      </div>
                      <h5 class="font-weight-bold home-title-destination">Balai Pemuda</h5>
                      <div class="mb-2 home-address-destination">Jl. Gubernur Suryo No.15</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- dekorasi footer -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="transform:rotate(180deg);margin-bottom:-5px">
        <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
        </path>
        <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
        <path class="elementor-shape-fill" fill="#4a4a8a" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
      </svg>
      <!-- footer -->
      <footer style="background-color: #4a4a8a; ">
        <div class="isi5" >
            <div class="isi5-content1">
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
            <div class="isi5-content2">
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
            <div class="isi5-content3">
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
            <div class="isi5-content4">
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
</html>