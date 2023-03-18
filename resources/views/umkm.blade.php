@extends('layout.navfoot')
@section('section')

<div class="namepage">
    <a href="">Beranda > UMKM</a>
    <h1>PRODUK UMKM</h1>
</div>

<div class="container_umkm">

    <div class="filter-keyword">
        <form action="{{route("umkm")}}" method="get">
            <input type="text" name="search">
            <button type="submit">search</button>
        </form>
    </div>

    <div class="grid">
        @foreach ($products as $product)
        <div class="col">
            <a href="{{route("umkm-detail")}}">
                <div class="img-container">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipNA3g8VUZlf8uIr9ldG59Lp0Gu0hQh2RHwKuKqp=s1280-p-no-v1" alt="">
                </div>
                <div class="label">Food & Beverages</div>
                <h3 style="margin: 10px 0px">{{$product->nama}}</h3>
                <i class="fas fa-store"></i>
                <span>Aqisa Rumah Rosella</span>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection