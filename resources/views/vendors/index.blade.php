@extends('main')

@section('content')

	<div class="container">
		<h1>A New Vendor Has Been Created</h1>
		<h3>Vendor Spesification</h3>

		@foreach ($vendors as $vendor)
			<li>Vendor name : {{ $vendor->name }}</li>
			<li>Vendor description : {{ $vendor->description }}</li>
			<li>Vendor category : {{ $vendor->category_id }}</li>
			<li>Vendor location : {{ $vendor->location_id }}</li>
			<li>Vendor address : {{ $vendor->address }}</li>
			<hr>
		@endforeach

	</div>
	
@endsection