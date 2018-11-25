@extends('layouts.app')

@section('title', 'Edit Activity ' . $activity->name)

@section('content')
<div class="row justify-content-center">
	<div class="col-4 mt-3">
		<form class="" action="{{ route('activities.update', $activity->id) }}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="name">Name</label>
				<input
				type="text" class="form-control" name="name"
				value="{{ $activity->name }}" placeholder="Activity Name" required>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea
					class="form-control text-justify" name="description"
					rows="3" placeholder="Description" required
					>{{ $activity->description }}</textarea>
				<!-- <input
				type="text" class="form-control" name="description"
				value="{{ $activity->description }}" placeholder="Description" required> -->
			</div>

			<div class="form-group">
				<label for="communty_id">Assign Communities</label>
				<br>
				<select class="custom-select" multiple="multiple" name="communities[]" style="width: 50%;height: 4%;">
					@foreach ($communities as $community)
					<option value="{{ $community->id }}">{{ $community->name }}</option>
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
