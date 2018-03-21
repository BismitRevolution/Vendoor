@extends('main')

@section('content')

	<div class="container">
		<ul>
			<li>Vendor Name :		{{ $vendor->name }}</li>
			<li>Vendor Description: {{ $vendor->description }}</li>
			<li>Vendor Address : 	{{ $vendor->address }}</li>
			<li>Vendor Location : {{ $vendor->location_name }}</li>
			<li>Vendor Category : 	{{ $vendor->category_name }}</li>
			<li>Vendor ViewCount:	{{  $vendor->view_count }}</li>
		</ul>
	</div>
	

	<form action="{{ route('vendors.edit', ['id' => $vendor->vendor_id]) }}" method="GET">
		<button type="submit">Edit Vendor</button>	
	</form>
	

	<form action="{{ route('vendors.destroy', ['id' => $vendor->vendor_id]) }}" method="POST">
   		<input type="hidden" name="_method" value="DELETE" />
   		<button type="submit">Delete Vendor</button>
    	{!! csrf_field() !!}
	</form>

@endsection