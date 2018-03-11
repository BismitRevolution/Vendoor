@extends('main')

@section('title', 'Explore Vendor')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/explore.css') }}">
@endsection

@section('content')
<div class="container row">
    <div class="col-sm-12 col-md-4">
        <div id="filter" class="btn-group-vertical btn-block">
            <select id="filter-category" class="btn btn-secondary btn-block text-center bg-blue">
                <option>Equipment</option>
                <option>Catering</option>
                <option>Place</option>
                <option>Printing</option>
                <option>Merchandise</option>
                <option>Transportation</option>
            </select>
            <select id="filter-location" class="btn btn-secondary btn-block bg-blue">
                <option>Jakarta</option>
                <option>Jakarta</option>
                <option>Jakarta</option>
            </select>
            <button type="button" class="btn btn-secondary btn-block bg-blue">most viewed</button>
            <button id="filter-fill" type="button" class="btn btn-secondary bg-blue" disabled style="height: 100%;"></button>
        </div>
    </div>
    <div class="col-sm-12 col-md-8">
        <div class="flex-row">
            <div class="col-12" style="height: 200px; background-color: red;">

            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/pages/explore.js') }}"></script>
@endsection
