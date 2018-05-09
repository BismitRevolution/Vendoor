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
		<input id="email" name="email" for="email" class="form-control" type="email" value="{{ $vendor->email }}"/>
		<span>Email 1</span>
	</label>
	<label class="form-group has-float-label form-setting">
		<input id="email-secondary" name="email_secondary" for="email-secondary" class="form-control" type="email" value="{{ $vendor->email_secondary }}"/>
		<span>Email 2</span>
	</label>
	<label class="form-group has-float-label form-setting">
		<input id="phone" name="phone" for="phone" class="form-control" type="text" value="{{ $vendor->phone }}"/>
		<span>Phone</span>
	</label>
	<label class="form-group has-float-label form-setting">
		<input id="address" name="address" for="address" class="form-control" type="text" value="{{ $vendor->address }}"/>
		<span>Address</span>
	</label>
	<div class="row">
		<div class="col-6">
			<label class="form-group has-float-label form-setting">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">Location</label>
					<select required class="custom-select" name="location_id">
						<option selected>Choose Location</option>
						@foreach($locations as $location)
						@if($location->location_name == $vendor->location_name)
						<option selected value="{{ $location->location_id }}">{{ $location->location_name }}</option>
						@else
						<option value="{{ $location->location_id }}">{{ $location->location_name }}</option>
						@endif
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
						@if($category->category_name == $vendor->category_name)
						<option selected value="{{ $category->category_id }}">{{ $category->category_name }}</option>
						@else
						<option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
						@endif
						@endforeach
					</select>
				</div>
			</label>
		</div>
	</div>
	<label class="form-group has-float-label form-setting">
		<input id="email" name="email" for="email" class="form-control" type="email" value="{{ $vendor->email }}"/>
		<span>Email</span>
	</label>

	<label class="form-group has-float-label form-setting">
		<input id="website" name="website" for="website" class="form-control" type="text" value="{{ $vendor->website }}"/>
		<span>Website</span>
	</label>

	<div id="tags"></div>

	<button class="btn btn-danger btn-setting" style="padding-left: 30px; padding-right: 30px" type="button" onclick='makeField("")'>Add Tags</button>

	<div class="row">
		<div class="col-6 btn-wrapped">

			<button class="btn btn-primary btn-block btn-setting" type="submit">Save</button>
		</div>
	</form>
	<div class="col-6 btn-wrapped">

		<form action="{{ route('admin.vendors.destroy', ['id' => $vendor->vendor_id]) }}" method="POST">
			<input type="hidden" name="_method" value="DELETE" />
			<button type="submit" class="btn btn-danger btn-block btn-setting">Delete Vendor</button>
			{!! csrf_field() !!}
		</form>
	</div>
</div>
</div>
@endsection

@section('extra-js')
<script>
	counter = 1;

	function makeField(value) {
		alert("CLICKED!");
		$(`<label class="form-group has-float-label form-setting">
			<input name="tags` + counter +`" class="form-control" type="text" placeholder="Tag Name" value="` + value +`"/>
			<span>Tag ` + counter + `</span>
		</label>
		`).appendTo('#tags');
		counter++;
	}

	function save() {
		$("#form").submit();
	}
</script>

@foreach($tags as $tag)
	<script type="text/javascript">
		makeField('{{ $tag->tag_name }}');
	</script>
@endforeach
@endsection
