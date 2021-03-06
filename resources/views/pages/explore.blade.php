@extends('main')

@section('title', 'Explore')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/explore.css') }}">
@endsection

@section('content')
<div class="container row">
    <div class="col-sm-12 col-md-3">
        <div id="filter" class="btn-group-vertical btn-block">
            <select id="filter-category" name="cat_key" onchange="this.form.submit()" class="btn-block jquery-select2">
                @foreach ($categories as $category)
                    @if (!empty($vendors->current_cat) and $category->category_id == $vendors->current_cat)
                    <option selected value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                    @else
                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                    @endif
                @endforeach
            </select>
            <select id="filter-location" name="loc_key" onchange="this.form.submit()" class="btn-block jquery-select2">
                @foreach ($locations as $location)
                    @if (!empty($vendors->current_loc) and $location->location_id == $vendors->current_loc)
                    <option selected value="{{ $location->location_id }}">{{ $location->location_name }}</option>
                    @else
                    <option value="{{ $location->location_id }}">{{ $location->location_name }}</option>
                    @endif
                @endforeach
            </select>
        </form>
        <!-- <form class="btn-block" role="form" action="{{ route('search') }}" method="GET"> -->
            <!-- <input type="hidden" name="sorted" value="true"/> -->
            <button type="submit" class="btn btn-secondary btn-block bg-blue" onclick="sortedFlag()">most viewed</button>
        </form>
            <button id="filter-fill" type="button" class="btn btn-secondary bg-blue" disabled style="height: 100%;"></button>
        </div>
    </div>

    <div class="col-sm-12 col-md-9">
        <div class="flex-row">
            <div id="field" class="col-12">
                @foreach ($vendors as $vendor)
                <div class="mobile vendor-item flex-row d-flex post shadow-bottom">
                    <div class="col-xs-auto trailer">
                        @foreach ($vendor->media as $photo)
                            @if ($loop->first)
                            <a class="" href="{{ url('storage/'.$photo->path) }}" data-lightbox="{{ $vendor->name }}" data-title="{{ $vendor->name }}">
                                <div style="width: 85px; height: 85px; background: url('storage/{{ $photo->path }}') no-repeat center top; background-size: cover;"></div>
                            </a>
                            @endif
                        @endforeach

                        <div class="flip row" style="max-width: 85px;">
                            @foreach ($vendor->media as $photo)
                            <a class="col-4" href="{{ url('storage/'.$photo->path) }}" data-lightbox="{{ $vendor->name }}" data-title="{{ $vendor->name }}">
                                <div style="margin: 0 auto; margin-top: 10px; width: 25px; height: 25px; background: url('storage/{{ $photo->path }}') no-repeat center top; background-size: cover;"></div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col">
                        <div class="title d-flex">
                            <div id="clickable" class="blue bold">{{ $vendor->name }}</div>
                            <div id="clickable" class="ml-auto triangle-down"></div>
                        </div>
                        <div class="paragraf">
                            <div class="tag">
                                <p class="unflip">
                                    @foreach ($vendor->tags as $tag)
                                        {{ $tag->tag_name }},
                                    @endforeach
                                </p>
                                @foreach ($vendor->tags as $tag)
                                <a href="#" class="flip badge badge-light badge-outlined">{{ $tag->tag_name }}</a>
                                @endforeach
                            </div>
                            <p class="flip description" style="line-height: 1.5;">{{ $vendor->description }}</p>
                            <div class="flip divider"></div>
                            <p class="flip address">{{ $vendor->address }}</p>
                            <p class="unflip location" style="margin-top: -20px;">{{ $vendor->location_name }}</p>
                            <div class="flip divider"></div>
                            <p class="flip email">{{ $vendor->email }}</p>
                            <p class="flip phone">{{ $vendor->phone }}</p>
                            <p class="flip website">{{ $vendor->website }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/pages/explore.js') }}"></script>
<script>
    function sortedFlag() {
        window.location.href = window.location.href + '&sorted=true';
    }
</script>
@endsection
