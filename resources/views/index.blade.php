@extends('main')

@section('title', 'Home')

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('search', ['cat_key' => '1']) }}" class="col box bg-blue">
            <div class="text-center">
                <img src="{{ asset('img/equipment.png')}}" alt="" width="100px">
                <p class="white">equipment</p>
            </div>
        </a>
        <a href="{{ route('search', ['cat_key' => '2']) }}" class="col box bg-blue-semi-light">
            <div class="text-center">
                <img src="{{ asset('img/catering.png')}}" alt="" width="100px">
                <p class="white">catering</p>
            </div>
        </a>
        <a href="{{ route('search', ['cat_key' => '3']) }}" class="col box bg-blue-light">
            <div class="text-center">
                <img src="{{ asset('img/place.png')}}" alt="" width="100px">
                <p class="white">place</p>
            </div>
        </a>
    </div>

    <div id="middle" class="blue">
        <div class="title">
            <h1 class="text-center white">Vendoor</h1>
        </div>
        <div class="paragraf">
            <p class="text-center white">your door to the best vendors</p>
        </div>
    </div>

    <div class="row">
        <a href="{{ route('search', ['cat_key' => '4']) }}" class="col box bg-blue-light">
            <div class="text-center">
                <img src="{{ asset('img/printing.png')}}" alt="" width="100px">
                <p class="white">printing</p>
            </div>
        </a>
        <a href="{{ route('search', ['cat_key' => '5']) }}" class="col box bg-blue-semi-light">
            <div class="text-center">
                <img src="{{ asset('img/merchandise.png')}}" alt="" width="100px">
                <p class="white">merchandise</p>
            </div>
        </a>
        <a href="{{ route('search', ['cat_key' => '6']) }}" class="col box bg-blue">
            <div class="text-center">
                <img src="{{ asset('img/transportation.png')}}" alt="" width="100px">
                <p class="white">transportation</p>
            </div>
        </a>
    </div>

    <div class="row" style="margin-top: 45px; margin-bottom: 55px;">
        <div class="col box br-white">
            <div class="row">
                <div class="round bg-white col"></div>
                <div class="round bg-white col"></div>
                <div class="round bg-white col"></div>
                <div class="round bg-white col"></div>
                <div class="round bg-white col"></div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
