@extends('main')

@section('content')

	<div class="container">
		<h1>A new Vendor created</h1>
		<h3>Vendor Spesification</h3>
		<ul>
			<li>{{ $vendor->name}}</li>
			<li>{{ $vendor->description}}</li>
			<li>{{ $vendor->adress}}</li>
			<li>{{ $vendor->location_id}}</li>
			<li>{{ $vendor->category_id}}</li>
			<li>{{ $vendor->view_count}}</li>
		</ul>
	</div>
@endsection