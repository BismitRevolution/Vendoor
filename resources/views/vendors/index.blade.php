@extends('main')
@section('extra-css')
	<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')
</form>

<div class="container">
<div class="row">
	<div class="col-6">
		<h1 id="header">Vendor List</h1>
	</div>
	<div class="col-6">
		<a href="{{ route('index') }}" class="btn btn-default">Home</a>
		<a href="{{ route('admin.vendors.create') }}" class="btn btn-primary">Create a New Vendor</a>
	</div>
</div>	

<table class="table list-table table-hover table-striped table-setting table-responsive">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Description</th>
			<th scope="col">Address</th>
			<th scope="col">Email</th>
			<th scope="col">Phone</th>
			<th scope="col">Category</th>
			<th scope="col">Location</th>
			<th scope="col">Tags</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($vendors as $vendor)
		<tr>
			<th scope="row">{{ $vendor->vendor_id }}</th>
			<td>{{ $vendor->name }}</td>
			<td>{{ $vendor->description }}</td>
			<td>{{ $vendor->address }}</td>
			<td>{{ $vendor->email }}</td>
			<td>{{ $vendor->phone }}</td>
			<td>{{ $vendor->category_name }}</td>
			<td>{{ $vendor->location_name }}</td>
			<td>Tags</td>
			<td>
				<a href="{{ route('admin.vendors.edit', ['id' => $vendor->vendor_id]) }}" class="btn btn-primary btn-block">Edit</a>
				<form action="{{ route('admin.vendors.destroy', ['id' => $vendor->vendor_id]) }}" method="POST">
					{{ csrf_field() }}
					<input name="_method" type="hidden" value="DELETE">
					<button type="submit" class="btn btn-danger btn-block">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection