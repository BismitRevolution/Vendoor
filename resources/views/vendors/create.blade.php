@extends('main')

@section('content')

	<div class="container">
		<h1>Add a new Vendoor!</h1>
		<form method="POST" action="{{  route('vendors.store') }}" class="form-group">
			{{ csrf_field() }}
			<label for="name">Vendor name</label>
			<input id="name" name="name">

			<label for="description">Vendor description</label>
			<input id="description" name="description">

			<label for="address">Vendor address</label>
			<input id="address" name="address">

			<label for="location_id">Vendor Location</label>
			<input id="location_id" name="location_id">

			<label for="category_id">Vendor Category</label>
			<input id="category_id" name="category_id">

			<button class="btn btn-lg" type="submit">Submit</button>

		</form>
	</div>
@endsection