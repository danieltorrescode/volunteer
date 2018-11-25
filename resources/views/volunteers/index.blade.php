@extends('layouts.app')

@section('title','Volunteers')

@section('content')
  <h1>Volunteers</h1>
  <table class="table table-striped">
      <thead>
      	 <th></th>
				 <th>Name</th>
				 <th>E-mail</th>
				 <th>Activity</th>
				 <th></th>
      	 <th></th>
      </thead>
      <tbody>
        @foreach($volunteers as $volunteer)
           <tr>
               <td></td>
							 <td>{{ $volunteer->firstName }} {{ $volunteer->lastName }}</td>
							 <td>{{ $volunteer->email }}</td>
							 <td>
								 @if( $volunteer->activity_data)
								 <span>{{ $volunteer->activity_data->name  }}</span>
								 @endif
							 </td>
               <td>
                 <a
								 	href="{{ route('volunteers.edit', $volunteer->id) }}"
									class="btn btn-warning">
									<span>Edit</span>
								</a>
               </td>
               <td>
                 <a
								 	href="{{ route('volunteers.destroy', $volunteer->id) }}"
									onclick="return confirm('want delete the volunteer: {{$volunteer->firstName}}  {{$volunteer->lastName}} ?')"
									class="btn btn-danger">
                   <span>Delete</span>
                 </a>
               </td>
           </tr>
        @endforeach
      </tbody>
  </table>
  {!! $volunteers->links() !!}
@endsection
