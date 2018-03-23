@extends('main')

@section('extra-css')
	<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection

@section('content')

	</form>
	
	<div class="container">

		<h1 id="header">{{ $vendor->name }} Vendor</h1>

		<label class="form-group has-float-label form-setting">
            	<input disabled id="name" name="name" for="name" class="form-control" type="text" value="{{ $vendor->name }}"/>
                <span>Name</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input disabled id="description" name="description" for="description" class="form-control" type="text" value="{{ $vendor->description }}"/>
                <span>Description</span>
            </label>

           <label class="form-group has-float-label form-setting">
                <input disabled id="email" name="email" for="email" class="form-control" type="text" value="{{ $vendor->email }}"/>
                <span>Email</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input disabled id="phone" name="phone" for="phone" class="form-control" type="text" value="{{ $vendor->phone }}"/>
                <span>Phone</span>
            </label> 

            <label class="form-group has-float-label form-setting">
                <input disabled id="address" name="address" for="address" class="form-control" type="text" value="{{ $vendor->address }}"/>
                <span>Address</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input disabled id="location_id" name="location_id" for="location_id" class="form-control" type="text" value="{{ $vendor->location_name }}"/>
                <span>Location</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input disabled id="category_id" name="category_id" for="category_id" class="form-control" type="text" value="{{ $vendor->category_name }}"/>
                <span>Category</span>
            </label>

            <label class="form-group has-float-label form-setting">
                <input disabled id="email" name="email" for="email" class="form-control" type="email" value="{{ $vendor->email }}"/>
                <span>Email</span>
            </label>
			
			<div class="row">
				<div class="col-6 btn-wrapped">
					<form action="{{ route('admin.vendors.edit', ['id' => $vendor->vendor_id]) }}" method="GET">
						<button type="submit" class="btn btn-primary btn-block btn-setting">Edit Vendor</button>	
					</form>
				</div>
	            
				<div class="col-6 btn-wrapped" style="padding-left: 20px;">
					<form action="{{ route('admin.vendors.destroy', ['id' => $vendor->vendor_id]) }}" method="POST">
				   		<input disabled type="hidden" name="_method" value="DELETE" />
				   		<button type="submit" class="btn btn-danger btn-block btn-setting">Delete Vendor</button>
				    	{!! csrf_field() !!}
					</form>
				</div>
			</div>

	</div>

@endsection