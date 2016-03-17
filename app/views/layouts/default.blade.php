<!DOCTYPE html>
<html>
	<head>
	<title>
@section('title')
AlterApp
@show
	</title>

  </head>

	<body>
		
      <!--header start-->
      @section('header')
      @include('backend.layouts.header')
      @show    
      <!--header end-->
		<!-- Navbar 
		<div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="{{ URL::route('home') }}">{{trans('pages.name')}}</a>
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
				@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
					<li {{ (Request::is('users*') ? 'class="active"' : '') }}><a href="{{ URL::to('/users') }}">{{trans('pages.users')}}</a></li>
					<li {{ (Request::is('groups*') ? 'class="active"' : '') }}><a href="{{ URL::to('/groups') }}">{{trans('pages.groups')}}</a></li>
				@endif
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            @if (Sentry::check())
				<li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="{{ URL::to('users') }}/{{ Session::get('userId') }}">{{ Session::get('email') }}</a></li>
				<li><a href="{{ URL::to('logout') }}">{{trans('pages.logout')}}</a></li>
				@else
				<li {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ URL::to('login') }}">{{trans('pages.login')}}</a></li>
				
				@endif
	          </ul>
	        </div>
	      </div>
	    </div>
		<!--/.nav-collapse --><!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
			@include('layouts/notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>

		<!-- ./ container -->
   @section('scripts') 
    <!-- js placed at the end of the document so the pages load faster -->
    {{ HTML::script('assets/js/jquery.js') }}
    {{ HTML::script('assets/js/jquery-1.9.1.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/jquery.dcjqaccordion.2.7.js') }}
    {{ HTML::script('assets/js/jquery.scrollTo.min.js') }}
    {{ HTML::script('assets/js/jquery.nicescroll.js') }}
        <!--common script for all pages-->
        {{ HTML::script('assets/js/gritter/js/jquery.gritter.js') }}
    {{ HTML::script('assets/js/common-scripts.js') }}
		<!-- Javascripts================================================== -->
		<script src="{{ asset('public/js/jquery-2.0.2.min.js') }}"></script>
		<script src="{{ asset('public/js/restfulizer.js') }}"></script> 
		<!-- Thanks to Zizaco for the Restfulizer script.  http://zizaco.net  -->
	  @show
  </body>
</html>
