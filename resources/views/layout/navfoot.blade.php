<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wisata Surabaya</title>
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/City_of_Surabaya_Logo.svg/1200px-City_of_Surabaya_Logo.svg.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('stylesheet.css')}}" />

  <!-- Normalisasi -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
  <div class="navigasi">
    <a href="{{route('home')}}">
      <img src="https://tourism.surabaya.go.id/assets/front/images/img-logo-sparkling.png" alt="logo sparkling Surabaya">
    </a>
    <div class="hamburger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <div class="menu">
      <ul>
        <li><a class="menu__list" href="{{route('home')}}">BERANDA</a></li>
        <li><a class="menu__list" href="{{route('destinasi')}}">DESTINASI</a></li>
        <li><a class="menu__list" href="{{route('umkm')}}">UMKM</a></li>
        <li><a class="btn" href="{{route('login')}}">LOG IN</a></li>
      </ul>
    </div>
  </div>

  @yield('section')

  <div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="transform:rotate(180deg);margin-bottom:-1px; display: block">
      <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
      </path>
      <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
      <path class="elementor-shape-fill" fill="#4a4a8a" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
  </svg>
  </div>
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

  <script>
    hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function() {
      menu = document.querySelector(".menu");
      menu.classList.toggle("active");
    }
  </script>

</body>

</html>