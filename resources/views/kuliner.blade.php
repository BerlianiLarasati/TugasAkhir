<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UMKM</title>
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
            <li><a class="nav-link active-nav" href="{{ route('kuliner') }}">UMKM</a></li> 
            <li><a class="nav-link" href="#">The Team</a></li> 
            <li><a class="nav-link" href="{{ route('auth') }}">Login</a></li> 
          </ul>
        </div>
      </div>
    </nav>

    <div class="judul-path">
      <p><a href="{{ route('home') }}"> Beranda</a>
        <span>> UMKM </span>
      </p>
    </div>
    <div class="judul-page">
      <h2>PRODUK UMKM</h2>
    </div>
    <div><br /></div>
    <form action="">    
      <p class="kuliner-filter">

        <button
          class="btn btn-primary collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse2"
          aria-expanded="false"
          aria-controls="collapse2"
        >
          Filter Kategori
        </button>

        <button
          class="btn btn-primary collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapse3"
          aria-expanded="false"
          aria-controls="collapse3"
        >
          Filter Keyword
        </button>

        <button type="submit" class="btn btn-primary filter">
          <i class="fa fa-fw fa-search"></i>
          Filter
        </button>
      </p>

      <div class="container">
        <div class="collapse" id="collapse2">
          <div class="card card-body">
            Filter Kategori
            <ul class="list1">
              <li>
                <input type="radio" name="filter_kategori" value="Semua" />
                <span>Semua</span>
              </li>
              <li>
                <input
                  type="radio"
                  name="filter_kategori"
                  value="History & Heritage"
                />
                <span>Food & Beverages</span>
              </li>
              <li>
                <input type="radio" name="filter_kategori" value="Museum" />
                <span>Fashion</span>
              </li>
              <li>
                <input type="radio" name="filter_kategori" value="Religi" />
                <span>Decoration</span>
              </li>
              <li>
                <input
                  type="radio"
                  name="filter_kategori"
                  value="Monumen & Landmark"
                />
                <span>Jewelries & Accesories</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="collapse" id="collapse3">
          <div class="card card-body">
            <h6>Filter Kata Kunci</h6>
            <div class="form-group">
              <form action="{{route('kuliner')}}" method="get">
                <input type="text" class="form-control" name="keyword" value="{{ app('request')->input('keyword') }}"/>
                <button type="submit">Filter</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </form>
    {{-- ----- content ----- --}}
    <div class="container">
    <div class="row">
      <div class="col-md-4 my-2">
        <a
          href="{{ route('deskripsi.tehrosella') }}"
        >
          <img
            class="img-fluid "
            src="https://lh3.googleusercontent.com/p/AF1QipNA3g8VUZlf8uIr9ldG59Lp0Gu0hQh2RHwKuKqp=s1280-p-no-v1" alt=""
            alt="Teh Rosella"
            style="border-radius: 20px"
          />
        </a>
        <div class="mt-2 picture-title">
          <span class="label"> Foods & Beverages </span>
          <h5 class="font-weight-bold">Teh Rosella</h5>
          <h6>
            <i class="fa-solid fa-shop"></i>
            Rumah Teh Aqisa
          </h6>
        </div>
      </div>

      @foreach ($kuliner as $row)
      {{-- <div class="col">
        <a href="{{route("umkm-detail", ['id' => $product['id']])}}">
            <div class="img-container">
                <img src="https://lh3.googleusercontent.com/p/AF1QipNA3g8VUZlf8uIr9ldG59Lp0Gu0hQh2RHwKuKqp=s1280-p-no-v1" alt="">
            </div>
            <div class="label">{{$product->category_id}}</div>
            <h3 style="margin: 10px 0px">{{$product->nama}}</h3>
            <i class="fas fa-store"></i>
            <span>{{$product->shop_name}}</span>
        </a>
    </div> --}}

      <div class="col-md-4 text-center my-2">
        <a
          href="/deskripsi/deskripsikuliner/{{$row->id}}"
        >
          <img
            class="img-fluid"
            style="border-radius: 20px"
            src="{{asset('fotokuliner/'.$row->foto)}}"
            alt="{{$row->name}}"
          />
        </a>
        <div class="mt-2 picture-title">
          <span class="label">{{$row->address}}</span>
          <h5 class="font-weight-bold">{{$row->name}}</h5>
          <h6>
            <i class="fa-solid fa-shop"></i>
            {{$row->kategori}}
          </h6>
        </div>
      </div>
      </div>
      @endforeach

      {{-- <div class="col-md-4 text-center my-2">
        <a
          href="https://goo.gl/maps/1aFS9ykFx3iBsabF8"
        >
          <img
            class="img-fluid-kuliner"
            src="{{ asset ('css/assets')}}/G-WALK.jpg"
            alt="G-WALK"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori"> Kuliner </span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">G WALK Citraland</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Ruko Taman Gapura, Jl. Niaga Gapura No.14
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a
          href="https://goo.gl/maps/9y86EMNGgCmFtc8E9"
        >
          <img
            class="img-fluid-kuliner"
            src="{{ asset ('css/assets')}}/sate-kelopo.jpg"
            alt="Sate Kelopo"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori"> Kuliner </span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Sate Kelopo Ondomohen</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Walikota Mustajab No.36
          </h6>
        </div>
      </div> --}}

      {{-- <div class="col-md-4 text-center my-2">
        <a href="https://goo.gl/maps/5EKT9nickJmDDbEj6">
          <img
            class="img-fluid-kuliner"
            src="{{ asset ('css/assets')}}/es-coklat.jpg"
            alt="Es Coklat Tambah Umur"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Kuliner</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Es Coklat Tambah Umur</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Simokerto No.49, Simokerto
          </h6>
        </div>
      </div> --}}

      {{-- <div class="col-md-4 text-center my-2">
        <a
          href="https://goo.gl/maps/wsHTQ7beYUNcTfLv8"
        >
          <img
            class="img-fluid-kuliner"
            src="{{ asset ('css/assets')}}/es-campur.jpg"
            alt="Es Campur Tidar"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Kuliner</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Es Campur Tidar</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Tidar, Sawahan
          </h6>
        </div>
      </div> --}}

      {{-- <div class="col-md-4 text-center my-2">
        <a
          href="https://goo.gl/maps/TRSE3yvyYx44eA3g6"
        >
          <img
            class="img-fluid-kuliner"
            src="{{ asset ('css/assets')}}/bratang-binangun.jpg"
            alt="Sentra Wisata Kuliner Bratang Binangun"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Kuliner</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Sentra Wisata Kuliner Bratang Binangun</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Raya Manyar No.80A, Baratajaya
          </h6>
        </div>
      </div> --}}

      <!-- <div class="col-md-4 text-center my-2">
        <a href="asset/8.jpg">
          <img
            class="img-fluid-kuliner"
            src="asset/8.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Pusat Perbelanjaan</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Tunjungan Plaza</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            JL. Jendral Basuki Rachmat no.8-12, Surabaya
          </h6>
        </div>
      </div> -->

      <!-- <div class="col-md-4 text-center my-2">
        <a href="asset/9.jpg">
          <img
            class="img-fluid-kuliner"
            src="asset/9.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Pasar Tradisional</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Pasar Genteng</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Genteng Besar
          </h6>
        </div>
      </div> -->
    </div>
  </div>
  </div>

    <!-- <div class="nav-list-page">
      <nav>
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="" rel="prev" aria-label="« Previous"
              >‹</a
            >
          </li>
          <li class="page-item">
            <a class="page-link" href="index.html">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="destinasi.html">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">5</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">6</a>
          </li>
          <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">...</span>
          </li>
          <li class="page-item">
            <a class="page-link" href="">45</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">46</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">47</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">48</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">49</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="" rel="next" aria-label="Next »">›</a>
          </li>
        </ul>
      </nav>
    </div> -->

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