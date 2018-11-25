@extends('layouts.app')

@section('title', 'Edit Community ' . $community->name)

@section('content')
<div class="row justify-content-center">
	<div class="col-4 mt-3">
		<form class="" action="{{ route('communities.update', $community->id) }}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="name">Name</label>
				<input
					type="text" class="form-control" name="name"
					value="{{ $community->name }}" placeholder="Community Name" required>
			</div>

			<div class="form-group">
				<label for="lider_name">Lider</label>
				<input
					type="text" class="form-control" name="lider_name"
					value="{{ $community->lider_name }}" placeholder="Lider Name" required>
			</div>

			<div class="form-group">
				<label for="lider_phone">Phone</label>
				<input
					type="text" class="form-control" name="lider_phone"
					value="{{ $community->lider_phone }}" placeholder="Lider phone" required>
			</div>

			<div class="form-group">
				<label for="direction">Address</label>
				<input
					type="text" class="form-control" name="direction"
					value="{{ $community->direction }}" placeholder="Address" required>
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea
					class="form-control text-justify" name="description"
					rows="3" placeholder="Description" required
					>{{ $community->description }}</textarea>

				<!-- <input
					type="text" class="form-control" name="description"
					value="{{ $community->description }}" placeholder="Description" required>
				</div> -->

			<div class="form-group mt-2">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>
@endsection
