@extends('main')

@section('title', 'Explore Vendor')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/explore.css') }}">
@endsection

@section('content')
<div class="container row">
    <div class="col-sm-12 col-md-4">
        <div id="filter" class="btn-group-vertical btn-block">
            <select id="filter-category" name="cat_key" onchange="this.form.submit()" class="btn btn-secondary btn-block text-center bg-blue">
                @foreach ($categories as $category)
                <optgroup>
                    @if (!empty($vendors->current_cat) and $category->category_id == $vendors->current_cat)
                    <option selected value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                    @else
                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                    @endif
                </optgroup>
                @endforeach
                <optgroup>
                </optgroup>
            </select>
            <select id="filter-location" name="loc_key" onchange="this.form.submit()" class="btn btn-secondary btn-block bg-blue">
                @foreach ($locations as $location)
                <optgroup>
                    @if (!empty($vendors->current_loc) and $location->location_id == $vendors->current_loc)
                    <option selected value="{{ $location->location_id }}">{{ $location->location_name }}</option>
                    @else
                    <option value="{{ $location->location_id }}">{{ $location->location_name }}</option>
                    @endif
                </optgroup>
                @endforeach
                <optgroup>
                </optgroup>
            </select>
        </form>
            <button type="button" class="btn btn-secondary btn-block bg-blue">most viewed</button>
            <button id="filter-fill" type="button" class="btn btn-secondary bg-blue" disabled style="height: 100%;"></button>
        </div>
    </div>
    <div class="col-sm-12 col-md-8">
        <div class="flex-row">
            <div id="field" class="col-12">
                @foreach ($vendors as $vendor)
                <div class="vendor-item flex-row d-flex post shadow-bottom">
                    <div class="col-sm-auto trailer">
                        <div style="width: 75px; height: 75px; background-color: green;"></div>
                    </div>
                    <div class="col">
                        <div class="title blue bold">{{ $vendor->name }}</div>
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
@endsection
