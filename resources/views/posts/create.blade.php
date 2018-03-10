@extends('main')

@section('content')
	<div class="container">
		<form method="POST" action="{{ route('posts.store') }}">
			{{ csrf_field() }}
			<label for="title" name="title"></label>
			<input class="form-control" name="title">

			<label for="body" name="body"></label>
			<input class="form-control" name="body">
			
			<button class="btn btn-lg btn-primary" type="submit">Submit</button>
		</form>	
	</div>
@endsection