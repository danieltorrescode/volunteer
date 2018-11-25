<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>@yield('title', 'Home') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta charset="UTF-8">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{ asset('plugins/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('plugins/css/styles.css') }}">
		<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/png" /> <!--FAVICON-->
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
      <a class="navbar-brand" href="{{ url('/') }}">Community Service</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							Communities
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="nav-link dropdown-item" href="{{ route('communities.create') }}">Add Community</a></li>
							<li><a class="nav-link dropdown-item" href="{{ route('communities.index') }}">List</a></li>
						</ul>
					</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Activity
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="nav-link dropdown-item" href="{{ route('activities.create') }}">Add Activity</a></li>
              <li><a class="nav-link dropdown-item" href="{{ route('activities.index') }}">List</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              Volunteers
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="nav-link dropdown-item" href="{{ route('volunteers.create') }}">Add Volunteer</a></li>
              <li><a class="nav-link dropdown-item" href="{{ route('volunteers.index') }}">List</a></li>
            </ul>
          </li>
        </ul>

				<!-- Right Side Of Navbar -->
				<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						@guest
								<li class="nav-item" >
									<a class="nav-link" href="{{ route('login') }}">
										Login
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">
										Sign-up
									</a>
								</li>
						@else
								<li class="nav-item dropdown">
										<a
											href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
											role="button" aria-expanded="false" style="margin-right: 70px;">
												{{ Auth::user()->name }} <span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
												<li>
														<a href="{{ route('logout') }}" class="nav-link dropdown-item"
																 onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
																Logout
														</a>
														<form
																id="logout-form" action="{{ route('logout') }}"
																method="POST" style="display: none;">
																{{ csrf_field() }}
														</form>
												</li>
										</ul>
								</li>
						@endguest
				</ul>

      </div>
    </nav>
    <div class='fringe'></div>
    <div class="container">
			<div class="row  justify-content-center">
				<div class='col-sm-12 my-5 content'>
					@yield('content')
				</div>
			</div>
    </div>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
		<script src="{{ asset('plugins/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('plugins/js/popper.min.js') }}"></script>
		<script src="{{ asset('plugins/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/js/scripts.js') }}"></script>

  </body>
</html>
