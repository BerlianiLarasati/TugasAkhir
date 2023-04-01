<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destinasi</title>
    <link rel="shortcut icon" href="{{ asset ('css/assets')}}/favicon.png">
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

    <header>
        <nav class="navbar-destinasi">
          <a href="{{route('home')}}" class="nav-logo"
            ><img
              src="{{ asset ('css/assets')}}/logo-white.png"
              alt=""
          /></a>
          <ul class="nav-link">
            <li class="nav-item2"><a href="{{ route('home') }}">HOME</a></li>
            <li class="nav-item2"><a href="{{ route('destinasi') }}">DESTINASI</a></li>
            <li class="nav-item2"><a href="{{ route('kuliner') }}">UMKM</a></li>
            <li class="nav-item2"><a class="btn" href="{{ route('auth') }}">LOG IN</a></li>
          </ul>
        </nav>
      </header>

    <div class="destinasi-nav">
      <p><a href="{{ route('home') }}">Beranda</a> > Destinasi</p>
    </div>
    <div class="destinasi-judul">
        <h2>PRODUK UMKM</h2>
      </div>
    
    <div class="container">
    <div class="grid-details-umkm">
        <div class="row-umkm">
            <img src="https://lh3.googleusercontent.com/p/AF1QipNA3g8VUZlf8uIr9ldG59Lp0Gu0hQh2RHwKuKqp=s1280-p-no-v1" alt="">
        </div>
        <div class="row-umkm">
            <div class="content">
                <div class="label">Foods & Beverages</div>
                <h1>Teh Rosella</h1>
                <i class="fas fa-store"></i>
                <span>Rumah Teh Aqisa</span>
                <p>
                    Merupakan produk Minuman Herbal yg Terbuat Dari Bunga Rosella Asli dan Bercampur Rempah Pilihan.
                    Terdiri dari Bermacam -macam Olahan dri Bunga Rosella seperti Teh Rosella Siap Minum, Sirup Rosella, Kopi Biji Rosella, dan Bunga Rosella Kering.
                </p>
    
                <i class="fas fa-map-marker-alt"></i>
                <span>Jl. Kali Kepiting 11A Surabaya</span><br>
                <i class="fa-solid fa-phone"></i>
                <span>081615058918</span><br>
                <i class="fa-solid fa-globe"></i>
                <span>https://shopee.co.id/aqisarosella10</span>
            </div>
        </div>
    </div>
    </div>
  </body>