@extends('layouts.app')

@section('title','Add Volunteer')

@section('content')
<div class="row justify-content-center">
	<div class="col-4 mt-3">
		<h1>Add Volunteer</h1>

	 @if(count($errors) > 0)
		 <ul>
		 @foreach($errors->all() as $error)
			 <li>{{$error}}</li>
		 @endforeach
	 </ul>
	 @endif

	 <form class="" action="{{ action('VolunteersController@store') }}" method="POST">
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		 <div class="form-group">
			 <label for="firstName">First Name</label>
			 <input
				 type="text" class="form-control" name="firstName"
				 placeholder="First Name" required>
		 </div>

		 <div class="form-group">
			 <label for="lastName">Last Name</label>
			 <input
				 type="text" class="form-control" name="lastName"
				 placeholder="Last Name" required>
		 </div>

		 <div class="form-group">
			 <label for="email">E-mail</label>
			 <input
				 type="email" class="form-control" name="email"
				 placeholder="E-mail" required>
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

<!-- <div class="form-group">
	<label for="password">Password</label>
	<input
		type="password" class="form-control" name="password"
		placeholder="Password" required>
</div>

<div class="form-group">
	<label for="password_confirmation">Confirm Password</label>
	<input
		type="password" class="form-control" name="password_confirmation"
		placeholder="Confirm Password" required>
</div> -->
