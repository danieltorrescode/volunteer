@extends('layouts.app')

@section('title','Add Community')

@section('content')
<div class="row justify-content-center">
	<div class="col-4 mt-3">
		<h1>Add Community</h1>

	 @if(count($errors) > 0)
	   <ul>
	   @foreach($errors->all() as $error)
	     <li>{{$error}}</li>
	   @endforeach
	 </ul>
	 @endif

	 <form class="" action="{{ action('CommunitiesController@store') }}" method="POST">
	 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	 	<div class="form-group">
	 		<label for="name">Name</label>
	 		<input
	 			type="text" class="form-control" name="name"
	 			placeholder="Community Name" required>
	 	</div>

	 	<div class="form-group">
	 		<label for="lider_name">Lider</label>
	 		<input
	 			type="text" class="form-control" name="lider_name"
	 			placeholder="Lider Name" required>
	 	</div>

	 	<div class="form-group">
	 		<label for="lider_phone">Phone</label>
	 		<input
	 			type="text" class="form-control" name="lider_phone"
	 			placeholder="Lider phone" required>
	 	</div>

	 	<div class="form-group">
	 		<label for="direction">Address</label>
	 		<input
	 			type="text" class="form-control" name="direction"
	 			placeholder="Address" required>
	 	</div>

	 	<div class="form-group">
	 		<label for="description">Description</label>
			<textarea
				class="form-control text-justify" name="description"
				rows="3" placeholder="Description" required></textarea>
	 		<!-- <input
	 			type="text" class="form-control" name="description"
	 			placeholder="Description" required> -->
	 	</div>
	 	<div class="form-group">
	 		<button type="submit" class="btn btn-primary">Add</button>
	 	</div>
	 </form>

	</div>
</div>



@endsection
