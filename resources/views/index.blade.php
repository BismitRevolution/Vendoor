@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col box bg-blue">
            <img src="{{ asset('img/equipment.png')}}" alt="" width="100px">
        </div>
        <div class="col box bg-blue-semi-light">
            <img src="{{ asset('img/catering.png')}}" alt="" width="100px">
        </div>
        <div class="col box bg-blue-light">
            <img src="{{ asset('img/place.png')}}" alt="" width="100px">
        </div>
    </div>

    <div id="middle" class="blue">
        <div class="title">
            <h1 class="text-center">Vendoor</h1>
        </div>
        <div class="paragraf">
            <p class="text-center">your door to the best vendors</p>
        </div>
    </div>

    <div class="row">
        <div class="col box bg-blue-light">
            <img src="{{ asset('img/printing.png')}}" alt="" width="100px">
        </div>
        <div class="col box bg-blue-semi-light">
            <img src="{{ asset('img/merchandise.png')}}" alt="" width="100px">
        </div>
        <div class="col box bg-blue">
            <img src="{{ asset('img/transportation.png')}}" alt="" width="100px">
        </div>
    </div>

    <div class="row" style="margin-top: 45px; margin-bottom: 55px;">
        <div class="col box br-blue">
            <div class="row">
                <div class="round bg-blue col"></div>
                <div class="round bg-blue col"></div>
                <div class="round bg-blue col"></div>
                <div class="round bg-blue col"></div>
                <div class="round bg-blue col"></div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
