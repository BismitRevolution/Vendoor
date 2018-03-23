@extends('main')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')

</form>

<div class="container">
<h1 id="header">Create a New Vendoor!</h1>
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="form-template">

	<form id="form" method="POST" action="{{  route('admin.vendors.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<label class="form-group has-float-label form-setting">
			<input id="name" name="name" for="name" class="form-control" type="text" placeholder="Vendor Name" required/>
			<span>Name</span>
		</label>
		<label class="form-group has-float-label form-setting">
			<input id="description" name="description" for="description" class="form-control" type="text" placeholder="Vendor Description"  required/>
			<span>Description</span>
		</label>
		<label class="form-group has-float-label form-setting">
			<input id="address" name="address" for="address" class="form-control" type="text" placeholder="Vendor Address"  required/>
			<span>Address</span>
		</label>
		<label class="form-group has-float-label form-setting">
			<input id="phone" name="phone" for="phone" class="form-control" type="text" placeholder="Vendor Phone" required/>
			<span>Phone</span>
		</label>
		<label class="form-group has-float-label form-setting">
			<input id="email" name="email" for="email" class="form-control" type="email" placeholder="Vendor Email" required/>
			<span>Email</span>
		</label>

		<div class="row">
			<div class="col-6">
				<label class="form-group has-float-label form-setting">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Location</label>
						<select required class="custom-select" name="location_id">
							<option selected>Choose Location</option>
							@foreach($locations as $location)
							<option value="{{ $location->location_id }}">{{ $location->location_name }}</option>
							@endforeach
						</select>
					</div>
				</label>
			</div>

			<div class="col-6">
				<label class="form-group has-float-label form-setting">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Category</label>
						<select required class="custom-select" name="category_id">
							<option selected>Choose Category</option>
							@foreach($categories as $category)
							<option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
							@endforeach
						</select>
					</div>
				</label>
			</div>
		</div>

	</div>

	<label class="form-group has-float-label form-setting">
		<input id="website" name="website" for="website" class="form-control" type="text" placeholder="Vendor Website" required/>
		<span>Website</span>
	</label>

	<div id="tags"></div>

	<label class="form-group has-float-label form-setting">
		<input id="media" name="media[]" class="form-control-file" type="file" multiple="multiple"/>
		<span>Photos</span>
	</label>

	<button class="btn btn-danger btn-setting" style="padding-left: 30px; padding-right: 30px" type="button" onclick="makeField()">Add Tags</button>

	<button id="submit" class="btn btn-block btn-primary btn-setting" type="button" onclick="save()">Submit</button>

</form>
</div>
</div>

@section('extra-js')
	<script>
		counter = 1;
		function makeField(){
			var f = document.getElementById('tags');
			f.innerHTML +=
			`<label class="form-group has-float-label form-setting">
				<input name="tags` + counter +`" class="form-control" type="text" placeholder="Tag Name" required/>
				<span>Tag ` + counter + `</span>
			</label>
			`
			counter++;
		}

		function save() {
			console.log($('#form').serialize());
		}
	</script>
@endsection
@endsection
