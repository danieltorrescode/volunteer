@extends('layouts.app')

@section('title','Volunteer')

@section('content')
			<div class="jumbotron my-3">
			 <h1 class="display-4">Community Service</h1>
			 <p class="lead text-justify">
				 @if (session('status'))
						 <div class="alert alert-success">
								 {{ session('status') }}
						 </div>
				 @endif

				 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
				 magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			 </p>
			 <hr class="my-4">
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do incididunt ut labore et dolore.</p>
			 <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			</div>
			<div class='row my-5'>
			 <div class='col-sm-4' align="center">
			   <img src="{{ asset('images/index/serv1.jpg') }}" alt="..." class="img-thumbnail" style="height: 100%;">
			 </div>
			 <div class='col-sm-4' align="center">
			   <img src="{{ asset('images/index/volunteer-icon.png') }}" alt="..." class="img-thumbnail" style="height: 100%;">
			 </div>
			 <div class='col-sm-4' align="center">
			   <img src="{{ asset('images/index/serv2.jpg') }}" alt="..." class="img-thumbnail" style="height: 100%;">
			 </div>
			</div>
@endsection
