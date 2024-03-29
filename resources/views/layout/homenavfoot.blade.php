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
    <div class="container">
      <div class="slide-1">
        <video autoplay muted loop>
          <source
            src="https://tourism.surabaya.go.id/assets/front/videos/surabaya.mp4"
          />
        </video>
        
        <div class="navigasi-home">
          <a href="{{route('home')}}">
          <img
            src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png"
            alt=""
          />
          </a>


          <div class="menu-home">
            <ul>
              <li><a class="menu_list" href="{{route('home')}}">BERANDA</a></li>
              <li><a class="menu_list" href="{{route('destinasi')}}">DESTINASI</a></li>
              <li><a class="menu_list" href="{{route('umkm')}}">UMKM</a></li>
              <li><a class="btn" href="{{route('login')}}">LOG IN</a></li>
            </ul>
          </div>
        </div>

        <div class="welcome">
          <h1>WISATA SURABAYA</h1>
          <h2>You will love every corner of it</h2>
          <h5>
            Let's explore one of the biggest city in Indonesia with famous name
            called City of Heroes.
          </h5>
        </div>
        <div class="icon">
          <div class="destinasi">
            <div class="sub-destinasi">
              <span class="material-symbols-outlined"> pin_drop </span>
              <a href="">DESTINASI WISATA</a>
            </div>
          </div>
          <div class="budaya">
            <div class="sub-destinasi">
              <span class="material-symbols-outlined"> temple_buddhist </span>
              <a href="">CAGAR BUDAYA</a>
            </div>
          </div>
          <div class="event">
            <div class="sub-destinasi">
              <span class="material-symbols-outlined"> campaign </span>
              <a href="">EVENT SURABAYA</a>
            </div>
          </div>
          <div class="peta">
            <div class="sub-destinasi">
              <span class="material-symbols-outlined"> map </span>
              <a href="">PETA DIGITAL</a>
            </div>
          </div>
        </div>

      </div>

      <!-- keyword ini akan berubah sesuai dengan file lain yang extend dia atau ini disebut tema ppt-->
      <!-- ditaroh di tengah diantara header dan footer ya karena dia kan yang tetep -->
      @yield('section')

      <div class="slide-4">
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
    </div>
  </body>
</html>
