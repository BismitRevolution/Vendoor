@if(Request::is('/'))
<div class="mobile container d-flex flex-row align-items-center bg-transparent white">
    <div id="nav-search" class="col blue">
        <div class="">
            <form role="form" action="{{ route('search') }}" method="GET">
                <label class="form-group has-float-label">
                    @if (!empty($vendors->current_key))
                    <input name="key" class="form-control white bg-transparent" type="text" value="{{ $vendors->current_key }}" style="border-color: white !important;"/>
                    @else
                    <input name="key" class="form-control white bg-transparent" type="text" placeholder="cari vendor" style="border-color: white !important;"/>
                    @endif
                    <span class="white">cari</span>
                </label>
            <!-- </form> -->
        </div>
    </div>
</div>
@else
<div id="nav" class="mobile mobile-col-12 container d-flex flex-row align-items-center blue bg-white">
    <div id="nav-brand" class="mobile-top col-sm-auto blue">
        <a href="{{ route('index') }}" class="mobile-text blue">VENDOOR</a>
    </div>
    <div id="nav-search" class="mobile-bottom col blue">
        <div class="">
            <form role="form" action="{{ route('search') }}" method="GET">
                <label class="form-group has-float-label">
                    @if (!empty($vendors->current_key))
                    <input name="key" class="form-control" type="text" placeholder="{{ $vendors->current_key }}" value="{{ $vendors->current_key }}"/>
                    @else
                    <input name="key" class="form-control" type="text" placeholder="search vendor"/>
                    @endif
                    <span>cari</span>
                </label>
            <!-- </form> -->
        </div>
    </div>
</div>
@endif
