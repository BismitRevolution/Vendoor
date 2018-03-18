@if(Request::is('/'))
<div class="container d-flex flex-row align-items-center blue bg-white">
    <div id="nav-search" class="col blue">
        <div class="">
            <form role="form">
                <label class="form-group has-float-label">
                    <input class="form-control" type="email" placeholder="search vendor"/>
                    <span>search</span>
                </label>
            </form>
        </div>
    </div>
</div>
@else
<div id="nav" class="container-fluid d-flex flex-row align-items-center blue bg-white">
    <div id="nav-brand" class="col-sm-auto blue">
        <a href="#" class="blue">VENDOOR</a>
    </div>
    <div id="nav-search" class="col blue">
        <div class="">
            <form role="form">
                <label class="form-group has-float-label">
                    <input class="form-control" type="email" placeholder="search vendor"/>
                    <span>searchs</span>
                </label>
            </form>
        </div>
    </div>
</div>
@endif
