@extends('layout.navfoot')
@section('section')

<div class="namepage">
    <a href="">Beranda > UMKM</a>
    <h1>PRODUK UMKM</h1>
</div>

<div class="container_umkm">
<div class="grid-details">
    <div class="row">
        <img src="https://lh3.googleusercontent.com/p/AF1QipNA3g8VUZlf8uIr9ldG59Lp0Gu0hQh2RHwKuKqp=s1280-p-no-v1" alt="">
    </div>
    <div class="row">
        @foreach ($products as $id => $product )
        <div class="content">
            <div class="label">{{$product->category_id}}</div>
            <h1>{{$product->nama}}</h1>
            <i class="fas fa-store"></i>
            <span>{{$product->shop_name}}</span>
            <p>{{$product->description}}
            </p>

            <i class="fas fa-map-marker-alt"></i>
            <span>{{$product->address}}</span><br>
            <i class="fa-solid fa-phone"></i>
            <span>{{$product->contact}}</span><br>
            <i class="fa-solid fa-globe"></i>
            <span>{{$product->website}}</span>
        </div>
        @endforeach
    </div>
</div>
</div>

@endsection