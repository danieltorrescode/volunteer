@extends('layouts.app')

@section('title','Activities')

@section('content')
<div class="row justify-content-center">
	<div class="col-4 mt-3">
			<h1>Add Activity</h1>

		 @if(count($errors) > 0)
		   <ul>
		   @foreach($errors->all() as $error)
		     <li>{{$error}}</li>
		   @endforeach
		 </ul>
		 @endif

		 <form class="" action="{{ action('ActivitiesController@store') }}" method="POST">
		 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		 	<div class="form-group">
		 		<label for="name">Name</label>
		 		<input
		 			type="text" class="form-control" name="name"
		 			placeholder="Activity Name" required>
		 	</div>
		 	<div class="form-group">
		 		<label for="description">Description</label>
				<textarea
					class="form-control text-justify" name="description"
					rows="3" placeholder="Description" required></textarea>
		 	</div>
		 	<div class="form-group">
		 		<button type="submit" class="btn btn-primary">Add</button>
		 	</div>
		 </form>

	</div>
</div>
@endsection
