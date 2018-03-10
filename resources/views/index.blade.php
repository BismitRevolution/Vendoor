@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="mid_container">

    <div class="box-menu">
      <div class="box bg-blue">
        <img src="{{ asset('img/cinema.png')}}" alt="" width="100px">
      </div>
      <div class="box bg-blue-semi-light">
        <img src="{{ asset('img/cinema.png')}}" alt="" width="100px">
      </div>
      <div class="box bg-blue-light">
        <img src="{{ asset('img/cinema.png')}}" alt="" width="100px">
      </div>
    </div>

    <div class="middle">
      <h1>Vendoor</h1>
    </div>

    <div class="box-menu">
      <div class="box bg-blue">
        <img src="{{ asset('img/cinema.png')}}" alt="" width="100px">
      </div>
      <div class="box bg-blue-semi-light">
        <img src="{{ asset('img/cinema.png')}}" alt="" width="100px">
      </div>
      <div class="box bg-blue-light">
        <img src="{{ asset('img/cinema.png')}}" alt="" width="100px">
      </div>
    </div>

  </div>
</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
