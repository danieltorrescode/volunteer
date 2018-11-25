@extends('layouts.app')
@section('title','Communities')
@section('content')
  <h3>Communities</h3>
  <table class="table table-striped">
      <thead>
      	 <th></th>
         <th>Name</th>
         <th>Lider</th>
         <th>Phone</th>
         <th>N° Projects</th>
         <th>Direction</th>
				 <th>Description</th>
         <th>Activities</th>
         <th></th>
      	 <th></th>
      </thead>
      <tbody>
        @foreach($communities as $community)
           <tr>
               <td></td>
               <td>{{ $community->name }}</td>
               <td>{{ $community->lider_name }}</td>
               <td>{{ $community->lider_phone }}</td>
               <td>{{ $community->num_proj }}</td>
               <td>{{ $community->direction }}</td>
               <td>{{ $community->description }}</td>
							 <td>
								 @foreach ($community->activities as $activity)
								 <span > {{ $activity->name }} </span>
								 <br>
								 @endforeach
							</td>
               <td>
                 <a
							 		href="{{ route('communities.edit', $community->id) }}" class="btn btn-warning">
                   <span>Edit</span>
                 </a>
               </td>
               <td>
                 <a
								 	href="{{ route('communities.destroy', $community->id) }}"
									onclick="return confirm('are you sure?')"
									class="btn btn-danger">
                   <span>Delete</span>
                 </a>
               </td>
           </tr>
        @endforeach
      </tbody>
  </table>
	{!! $communities->links() !!}
@endsection
