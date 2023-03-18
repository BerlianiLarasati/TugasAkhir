@extends('layout.navfoot')
@section('section')

<div class="namepage">
        <a href="">Beranda > Destinasi Wisata</a>
        <h1>DESTINASI WISATA</h1>
    </div>
    <div class="filter">
      <div class="col">
        <select id="filter-wiayah" class="form-control">
          <option value="">Filter Wilayah</option>
          <option value="">Semua</option>
          <option value="">Surabaya Pusat</option>
          <option value="">Surabaya Barat</option>
          <option value="">Surabaya Timur</option>
          <option value="">Surabaya Utara</option>
          <option value="">Surabaya Selatan</option>
        </select>
      </div>
      <div class="col">
        <select id="filter-kategori" class="form-control">
          <option value="">Filter Kategori</option>
          <option value="">Semua</option>
          <option value="">History and Heritage</option>
          <option value="">Museum</option>
          <option value="">Religi</option>
          <option value="">Kampung Wisata</option>
          <option value="">City Park</option>
          <option value="">Outdoor and Nature</option>
          <option value="">Pusat Perbelanjaan</option>
          <option value="">Pasar Tradisional</option>
        </select>
      </div>
      <div class="col">
        <select id="filter-kategori" class="form-control">
          <option value="">Filter Keyword</option>
        </select>
      </div>
      <div class="col">
        <button>Filter</button>
      </div>
    </div>
    <div class="destination">
        <div class="pendidikan">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1648709900_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="#">Museum</a>
                    <h5>Museum Pendidikan Surabaya</h5>
                    <h6>Jl. Genteng Kali No. 10</h6>
                </div>     
            </div>
        </div>
        <div class="olahraga">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1648710891_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="">Museum</a>
                    <h5>Museum Olahraga Surabaya</h5>
                    <h6> Jl. Indragiri No.6, Gelora Pancasila</h6>
                </div>
            </div>
        </div>
        <div class="religi">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1648711246_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="">Religi</a>
                    <h5>Masjid Nasional Al Akbar</h5>
                    <h6> Jl. Masjid Agung Timur No.1</h6>
                </div>
            </div>
        </div>
        <div class="kampung">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1648712049_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="">Kampung Wisata</a>
                    <h5>Kampung Lawas Maspati</h5>
                    <h6>Jl. Maspati Gg. VI, Bubutan</h6>
                </div>
            </div>
        </div>
        <div class="park">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1654138693_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="">City Park</a>
                    <h5>Taman Mozaik</h5>
                    <h6>Jalan Wiyung Praja, Wiyung</h6>
                </div>
            </div>
        </div>
        <div class="outdoor">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1648713405_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="">Outdor and Nature</a>
                    <h5>Kebun Binatang Surabaya</h5>
                    <h6>Jl. Setail No. 1, Darmo, Wonokromo</h6>
                </div>
            </div>
        </div>
        <div class="outdoor">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1648713708_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="">History and Heritage</a>
                    <h5>Monumen Tugu Pahlawan</h5>
                    <h6>Jl. Pahlawan</h6>
                </div>
            </div>
        </div>
        <div class="belanja">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1648714528_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="">Pusat Perbelanjaan</a>
                    <h5>Tunjungan Plaza</h5>
                    <h6>JL. Jendral Basuki Rachmat no.8-12, Surabaya</h6>
                </div>   
            </div>
        </div>
        <div class="pasar">
            <div class="sub-destination">
                <img
                  src="https://tourism.surabaya.go.id/storage/tour/1648714823_1.jpg"
                  alt=""
                />
                <div class="desc">
                    <a href="">Pasar Tradisional</a>
                    <h5>Pasar Genteng</h5>
                    <h6> Jl. Genteng Besar</h6>
                </div>
            </div>
        </div>
    </div>

@endsection