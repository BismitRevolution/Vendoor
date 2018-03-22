@extends('main')

@section('content')

	<div class="container">
		<h1>A New Vendor Has Been Created</h1>
		<h3>Vendor Spesification</h3>


		<form action="{{ route('vendors.update', $vendor->vendor_id) }}" method="POST">
	   		{{ csrf_field() }}
	   		<input type="hidden" name="_method" value="PUT" />


			<label for="">Vendor Name</label>
			<input name="name" placeholder="{{ $vendor->name }}">

			<label for="">Vendor Description</label>
			<input name="description" placeholder="{{ $vendor->description }}">

			<label for="">Vendor Address</label>
			<input name="address" placeholder="{{ $vendor->address }}">

			<label for="">Vendor Location</label>
			<input name="location_id" placeholder="{{ $vendor->location_name }}">

			<label for="">Vendor Category</label>
			<input name="category_id" placeholder="{{ $vendor->category_name }}">

			<label for="">Vendor email</label>
			<input name="email" type="email">

			<label for="">Vendor phone</label>
			<input name="phone">

			<label for="">Vendor website</label>
			<input name="website">

			<button type="submit">Update</button>
		</form>

		<form action="{{ route('vendors.destroy', ['id' => $vendor->vendor_id]) }}" method="POST">
	   		<input type="hidden" name="_method" value="DELETE" />
	   		<button type="submit">Delete Vendor</button>
	    	{!! csrf_field() !!}
		</form>

		<small>dilihat sebanyak {{ $vendor->view_count }}</small>

	</div>

@endsection
