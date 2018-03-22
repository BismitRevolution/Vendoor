@extends('main')

@section('extra-css')

	<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">

@endsection

@section('content')
	
	</form>

	<div class="container">

		<h1 id="header">Create a New Vendoor!</h1>
		
		<div class="form-template">
			
				<form method="POST" action="{{  route('admin.vendors.store') }}">

					{{ csrf_field() }}

	                <label class="form-group has-float-label form-setting">
	                	<input id="name" name="name" for="name" class="form-control" type="text" placeholder="Vendor Name"/>
	                    <span>Name</span>
	                </label>

	                <label class="form-group has-float-label form-setting">
	                    <input id="description" name="description" for="description" class="form-control" type="text" placeholder="Vendor Description"/>
	                    <span>Description</span>
	                </label>

	                <label class="form-group has-float-label form-setting">
	                    <input id="address" name="address" for="address" class="form-control" type="text" placeholder="Vendor Address"/>
	                    <span>Address</span>
	                </label>

	                <label class="form-group has-float-label form-setting">
	                    <input id="location_id" name="location_id" for="location_id" class="form-control" type="text" placeholder="Vendor Location"/>
	                    <span>Location</span>
	                </label>

	                <label class="form-group has-float-label form-setting">
	                    <input id="category_id" name="category_id" for="category_id" class="form-control" type="text" placeholder="Vendor Category"/>
	                    <span>Category</span>
	                </label>

	                <label class="form-group has-float-label form-setting">
	                    <input id="email" name="email" for="email" class="form-control" type="email" placeholder="Vendor Email"/>
	                    <span>Email</span>
	                </label>
					
					<label class="form-group has-float-label form-setting">
	                    <input id="website" name="website" for="website" class="form-control" type="email" placeholder="Vendor Website"/>
	                    <span>Website</span>
	                </label>

					<button class="btn btn-block btn-primary" type="submit">Submit</button>

            	</form>

		</div>
	</div>
@endsection
