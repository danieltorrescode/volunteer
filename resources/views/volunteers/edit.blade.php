@extends('layouts.app')

@section('title', 'Edit Volunteer ' . $volunteer->name)

@section('content')
<div class="row justify-content-center">
	<div class="col-4 mt-3">
			@if(count($errors) > 0)
			  <ul>
			  @foreach($errors->all() as $error)
			    <li>{{$error}}</li>
			  @endforeach
			</ul>
			@endif

			<form class="" action="{{ route('volunteers.update', $volunteer->id) }}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input
						type="text" class="form-control" name="firstName"
						value="{{ $volunteer->firstName }}" placeholder="First Name" required>
				</div>

				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input
						type="text" class="form-control" name="lastName"
						value="{{ $volunteer->lastName }}" placeholder="Last Name" required>
				</div>

				<div class="form-group">
					<label for="email">E-mail</label>
					<input
						type="email" class="form-control" name="email"
						value="{{ $volunteer->email }}" placeholder="E-mail" required>
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea
						class="form-control text-justify" name="description"
						rows="3" placeholder="Description" required
						>{{ $volunteer->description }}</textarea>
					<!-- <input
						type="text" class="form-control" name="description"
						value="{{ $volunteer->description }}" placeholder="Description" required> -->
				</div>

				<div class="form-group">
					<label for="activity">Activity: </label>
					<select class="custom-select custom-select-lg mb-3" name="activity">

						@if($volunteer->activity)
						<option selected value="{{ $volunteer->activity }}"> {{$volunteer->activity_data->name}}</option>
						@else
						<option selected>Select Activity</option>
						@endif
						<option value="">No Activity</option>

						@foreach ($activities as $activity)
							<option value="{{ $activity->id }}">{{ $activity->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
	</div>
</div>
@endsection

<!-- <div class="form-group">
	<label for="password">Password</label>
	<input
		type="password" class="form-control" name="password"
		value="{{ $volunteer->password }}" placeholder="Password" required>
</div>


<div class="form-group">
	<label for="password_confirmation">Confirm Password</label>
	<input
		type="password" class="form-control" name="password_confirmation"
		placeholder="Confirm Password" required>
</div> -->
