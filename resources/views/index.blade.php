@extends('main')

@section('title', 'Home')

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="mobile container">
    <div class="row">
        <a href="{{ route('search', ['cat_key' => '1']) }}" class="col box bg-blue">
            <div class="text-center">
                <img class="mobile-logo" src="{{ asset('img/equipment.png')}}" alt="" width="80px">
                <p class="mobile-text white">perlengkapan</p>
            </div>
        </a>
        <a href="{{ route('search', ['cat_key' => '2']) }}" class="col box bg-blue-semi-light">
            <div class="text-center">
                <img class="mobile-logo" src="{{ asset('img/catering.png')}}" alt="" width="80px">
                <p class="mobile-text white">katering</p>
            </div>
        </a>
        <a href="{{ route('search', ['cat_key' => '3']) }}" class="col box bg-blue-light">
            <div class="text-center">
                <img class="mobile-logo" src="{{ asset('img/place.png')}}" alt="" width="80px">
                <p class="mobile-text white">tempat</p>
            </div>
        </a>
    </div>

    <div id="middle">
        <div class="title">
            <h1 class="mobile-text text-center white">Vendoor</h1>
        </div>
        <div class="paragraf">
            <p class="mobile-text text-center white">your door to the best vendors</p>
        </div>
    </div>

    <div class="row">
        <a href="{{ route('search', ['cat_key' => '4']) }}" class="col box bg-blue-light">
            <div class="text-center">
                <img class="mobile-logo" src="{{ asset('img/printing.png')}}" alt="" width="80px">
                <p class="mobile-text white">percetakan</p>
            </div>
        </a>
        <a href="{{ route('search', ['cat_key' => '5']) }}" class="col box bg-blue-semi-light">
            <div class="text-center">
                <img class="mobile-logo" src="{{ asset('img/merchandise.png')}}" alt="" width="80px">
                <p class="mobile-text white">merchandise</p>
            </div>
        </a>
        <a href="{{ route('search', ['cat_key' => '6']) }}" class="col box bg-blue">
            <div class="text-center">
                <img class="mobile-logo" src="{{ asset('img/transportation.png')}}" alt="" width="80px">
                <p class="mobile-text white">transportasi</p>
            </div>
        </a>
    </div>

    <div class="row" style="margin-top: 45px;">
        <div class="col box br-white">
            <div class="row">
                <div class="mobile-round round bg-white col"></div>
                <div class="mobile-round round bg-white col"></div>
                <div class="mobile-round round bg-white col"></div>
                <div class="mobile-round round bg-white col"></div>
                <div class="mobile-round round bg-white col"></div>
            </div>
        </div>
    </div>

    <div id="bottom" style="margin-bottom: 55px;">
        <div class="title">
            <h1 class="text-center white"></h1>
        </div>
        <div class="paragraf">
            <p class="mobile-text text-center blue">Vendoor adalah sebuah portal yang menghubungkan UMKM penyedia produk &amp; jasa untuk keperluan berbagai acara. Untuk info lebih lanjut hubungi kami di vendoor@vendoor.co.id</p>
        </div>
    </div>

</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
