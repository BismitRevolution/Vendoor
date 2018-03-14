@extends('main')

@section('content')

	<div class="container">
		<h1>A New Vendor Has Been Created</h1>
		<h3>Vendor Spesification</h3>
		<ul>
			<li>Vendor Name :		{{ $vendor->name }}</li>
			<li>Vendor Description: {{ $vendor->description }}</li>
			<li>Vendor Address : 	{{ $vendor->address }}</li>
			<li>Vendor Location : 	{{ $vendor->location_id }}</li>
			<li>Vendor Category : 	{{ $vendor->category_id }}</li>
			<li>Vendor ViewCount:	{{  $vendor->view_count }}</li>
		</ul>
	</div>
	
@endsection