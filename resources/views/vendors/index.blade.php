@extends('main')

@section('content')

	<div class="container">
		
		{{ $vendors }}
		<h1>list of vendor</h1>
		@foreach ($vendors as $vendor)
			<li>Vendor name : {{ $vendor->name }}</li>
			<li>Vendor description : {{ $vendor->description }}</li>
			<li>Vendor category : {{ $vendor->category_name }}</li>
			<li>Vendor location : {{ $vendor->location_name }}</li>
			<li>Vendor address : {{ $vendor->address }}</li>
			<hr>
		@endforeach

	</div>
	
@endsection