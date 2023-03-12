<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Surabaya</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/City_of_Surabaya_Logo.svg/1200px-City_of_Surabaya_Logo.svg.png">
    <link rel="stylesheet" href="{{asset('stylesheet.css')}}" />
    
    <!-- Normalisasi -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
      integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
</head>
<body>
    <div class="navigasi">
        <a href="{{route('home')}}">
            <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="logo sparkling Surabaya">
        </a>
        <div class="menu">
            <ul>
              <li><a class="menu_list" href="{{route('home')}}">BERANDA</a></li>
              <li><a class="menu_list" href="{{route('destinasi')}}">DESTINASI</a></li>
              <li><a class="menu_list" href="{{route('umkm')}}">UMKM</a></li>
              <li><a class="btn" href="#">LOG IN</a></li>
            </ul>
        </div>
    </div>

    @yield('section')

    <div class="footer">
        <div class="findUs">
            <h6>FIND US</h6>
            <p>Tourism Information Center</p>
            <p>Jl. Gubernur Suryo 15</p>
          <div class="hubungi">
            <span class="material-symbols-outlined"> call </span>
            <a href="">Kontak Kami</a>
          </div>
        </div>
        <div class="contactUs">
          <h6>CONTACT US</h6>
          <p>
            Dinas Kebudayaan, Kepemudaan dan Olahraga serta Pariwisata Kota
            Surabaya
          </p>
          <div class="sub-kontak">
            <span class="material-symbols-outlined"> location_on </span>
            <p>
              Jl. Tunjungan No. 1-3 Kelurahan Genteng Kecamatan Genteng, Kota
              Surabya Jawa Timur, Indonesia, 60275
            </p>
          </div>
          <div class="sub-kontak">
            <span class="material-symbols-outlined"> call </span>
            <p>031-5318409</p>
          </div>
          <div class="sub-kontak">
            <span class="material-symbols-outlined"> mail </span>
            <p>disbudporapar@surabaya.go.id</p>
          </div>
        </div>
        <div class="sites">
          <h6>OUR OTHER SITES</h6>
          <p>Disbudporapar Surabaya</p>
          <p>360° Surabaya</p>
          <p>Tiket Wisata Surabaya</p>
          <p>Katalog Museum Surabaya</p>
          <p>Bangga Surabaya</p>
        </div>
    </div>

</body>
</html>