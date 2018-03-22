@extends('main')

@section('extra-css')
	<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection

@section('content')
	
	</form>

	<div class="container">

		<h1 id="header">Edit Vendor</h1>

		<form action="{{ route('admin.vendors.update', $vendor->vendor_id) }}" method="POST" class="form-settting">
	   		
	   		<input type="hidden" name="_method" value="PUT" />

			{{ csrf_field() }}
			
            <label class="form-group has-float-label form-setting">
            	<input id="name" name="name" for="name" class="form-control" type="text" value="{{ $vendor->name }}"/>
                <span>Name</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input id="description" name="description" for="description" class="form-control" type="text" value="{{ $vendor->description }}"/>
                <span>Description</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input id="address" name="address" for="address" class="form-control" type="text" value="{{ $vendor->address }}"/>
                <span>Address</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input id="location_id" name="location_id" for="location_id" class="form-control" type="text" value="{{ $vendor->location_name }}"/>
                <span>Location</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input id="category_id" name="category_id" for="category_id" class="form-control" type="text" value="{{ $vendor->category_name }}"/>
                <span>Category</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input id="email" name="email" for="email" class="form-control" type="email" value="{{ $vendor->email }}"/>
                <span>Email</span>
            </label>
			
			<label class="form-group has-float-label form-setting">

                <input id="website" name="website" for="website" class="form-control" type="text" value="{{ $vendor->website }}"/>
                <span>Website</span>

            </label>
				
			<button class="btn btn-primary btn-block btn-setting" type="submit">Edit</button>

    	</form>

    	<form action="{{ route('admin.vendors.destroy', ['id' => $vendor->vendor_id]) }}" method="POST">
	   		<input type="hidden" name="_method" value="DELETE" />
	   		<button type="submit" class="btn btn-danger btn-block btn-setting">Delete Vendor</button>
	    	{!! csrf_field() !!}
		</form>
	</div>

@endsection
