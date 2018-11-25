@extends('layouts.app')

@section('title','Activities')

@section('content')
  <h1>Activities</h1>
  <table class="table table-striped">
      <thead>
      	 <th></th>
      	 <th>Name</th>
				 <th>Description</th>
				 <th>Communities</th>
         <th>Volunteers</th>
         <th></th>
      	 <th></th>
      </thead>
      <tbody>
        @foreach($activities as $activity)
           <tr>
               <td></td>
               <td>{{ $activity->name }}</td>
							 <td>{{ $activity->description }}</td>
               <td>
									@foreach ($activity->communities as $community)
										<span > {{ $community->name }} </span>
										<br>
									@endforeach
							 </td>
							 <td>
								 @foreach ($activity->volunteers as $volunteer)
									 <span > {{ $volunteer->firstName }} {{ $volunteer->lastName }}</span>
									 <br>
								 @endforeach
							</td>
               <td>
                 <a
								 	href="{{ route('activities.edit', $activity->id) }}"
									class="btn btn-warning">
									<span>Edit</span>
								</a>
               </td>
               <td>
                 <a
								 	href="{{ route('activities.destroy', $activity->id) }}"
									onclick="return confirm('are you sure?')"
									class="btn btn-danger">
                   <span>Delete</span>
                 </a>
               </td>
           </tr>
        @endforeach
      </tbody>
  </table>
  {!! $activities->links() !!}
@endsection
