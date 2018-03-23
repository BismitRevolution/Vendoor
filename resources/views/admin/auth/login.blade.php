@extends('main')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')

</form>

<div class="container">
<h1 id="header">Admin Login</h1>
<form action="{{ url('/admin/login') }}" method="POST" class="form-settting">
	{{ csrf_field() }}
	<label class="form-group has-float-label form-setting">
		<input id="email" name="email" for="email" class="form-control" type="text"/>
		<span>Email</span>
	</label>
	<label class="form-group has-float-label form-setting">
		<input id="password" name="password" for="password" class="form-control" type="password"/>
		<span>Password</span>
	</label>
	<div class="row">
		<div class="col-12 btn-wrapped">
			<button class="btn btn-primary btn-block btn-setting" type="submit">Login</button>
		</div>
    </div>
</form>
</div>
@endsection
