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
                <option>equipment</option>
                <option>catering</option>
                <option>place</option>
                <option>printing</option>
                <option>merchandise</option>
                <option>transportation</option>
            </select>
            <select id="filter-location" class="btn btn-secondary btn-block bg-blue">
                <option>Jakarta</option>
                <option>Bogor</option>
                <option>Depok</option>
            </select>
            <button type="button" class="btn btn-secondary btn-block bg-blue">most viewed</button>
            <button id="filter-fill" type="button" class="btn btn-secondary bg-blue" disabled style="height: 100%;"></button>
        </div>
    </div>
    <div class="col-sm-12 col-md-8">
        <div class="flex-row">
            <div id="field" class="col-12">
                @foreach($vendors as $vendor)
                <div class="vendor-item flex-row d-flex post shadow-bottom">
                    <div class="col-sm-auto trailer">
                        <div style="width: 75px; height: 75px; background-color: green;"></div>
                    </div>
                    <div class="col">
                        <div class="title">{{ $vendor->name }}</div>
                        <div class="paragraf">
                            <div class="tag">
                                <a href="#" class="badge badge-light badge-outlined">sound system</a>
                                <a href="#" class="badge badge-light badge-outlined">table &amp; chair</a>
                                <a href="#" class="badge badge-light badge-outlined">tent</a>
                            </div>
                            <p class="flip description">{{ $vendor->description }}</p>
                            <div class="flip divider"></div>
                            <p class="flip address">{{ $vendor->address }}</p>
                            <p class="unflip location">{{ $vendor->location_name }}</p>
                            <div class="flip divider"></div>
                            <p class="flip email">mtzequipment@gmail.com</p>
                            <p class="flip phone">0812xxxxxxx</p>
                            <p class="flip website">www.mtzeq.com</p>
                        </div>
                    </div>
                </div>

                @endforeach

                <div class="vendor-item flex-row d-flex post shadow-bottom">
                    <div class="col-sm-auto trailer">
                        <div style="width: 75px; height: 75px; background-color: green;"></div>
                    </div>
                    <div class="col">
                        <div class="title">MTZ Equipment</div>
                        <div class="paragraf">
                            <div class="tag">
                                <a href="#" class="badge badge-light badge-outlined">sound system</a>
                                <a href="#" class="badge badge-light badge-outlined">table &amp; chair</a>
                                <a href="#" class="badge badge-light badge-outlined">tent</a>
                            </div>
                            <p class="flip description">Berdiri sejak 1997, telah melayani 10.000 project, beroperasi di Jabodetabek</p>
                            <div class="flip divider"></div>
                            <p class="flip address">Jalan raya margonda no. 525, Depok, Jawa Barat</p>
                            <p class="unflip location">Depok</p>
                            <div class="flip divider"></div>
                            <p class="flip email">mtzequipment@gmail.com</p>
                            <p class="flip phone">0812xxxxxxx</p>
                            <p class="flip website">www.mtzeq.com</p>
                        </div>
                    </div>
                </div>

                <div class="vendor-item flex-row d-flex post shadow-bottom">
                    <div class="col-sm-auto trailer">
                        <div style="width: 75px; height: 75px; background-color: green;"></div>
                    </div>
                    <div class="col">
                        <div class="title">MTZ Equipment</div>
                        <div class="paragraf">
                            <div class="tag">
                                <a href="#" class="badge badge-light badge-outlined">sound system</a>
                                <a href="#" class="badge badge-light badge-outlined">table &amp; chair</a>
                                <a href="#" class="badge badge-light badge-outlined">tent</a>
                            </div>
                            <p class="flip description">Berdiri sejak 1997, telah melayani 10.000 project, beroperasi di Jabodetabek</p>
                            <div class="flip divider"></div>
                            <p class="flip address">Jalan raya margonda no. 525, Depok, Jawa Barat</p>
                            <p class="unflip location">Depok</p>
                            <div class="flip divider"></div>
                            <p class="flip email">mtzequipment@gmail.com</p>
                            <p class="flip phone">0812xxxxxxx</p>
                            <p class="flip website">www.mtzeq.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/pages/explore.js') }}"></script>
@endsection
