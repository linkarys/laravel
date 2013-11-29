<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/main.less', array('rel'=>'stylesheet/less'))}}
	{{ HTML::script('js/jquery-1.10.2.min.js')}}
	{{ HTML::script('js/less-1.5.0.min.js')}}
	{{ HTML::script('packages/bootstrap/js/bootstrap.min.js')}}

	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<script>
		less = {
				env: "development",				// or "production"
				async: false,					// load imports async
				fileAsync: false,				// load imports async when in a page under a file protocol
				poll: 1000,						// when in watch mode, time in ms between polls
				functions: {},					// user functions, keyed by name
				dumpLineNumbers: "comments",	// or "mediaQuery" or "all"
				// rootpath: ":/a.com/",			// a path to add on to the start of every url resource
				relativeUrls: false				// whether to adjust url's to be relative if false, url's are already relative to the entry less file
			};
	</script>

	@section('header')
	@show
</head>
<body data-spy="scroll" target="#nav-slide">
	@section('nav')
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">linkarys</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="{{route('home.index')}}">Home</a></li>
			<li><a href="{{route('posts.index')}}">Post</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="{{route('dogs.index')}}">Dogs</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			</ul>
			</li>
		</ul>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			@if(!Auth::check())
				<li>{{ HTML::link('users/register', 'Register') }}</li>
				<!-- <li>{{ HTML::link('users/login', 'Login') }}</li> -->
				<li><a href="#login-form" data-target="#login-form" data-toggle="modal">Login</a></li>
			@else
				<li>{{ HTML::link('users/logout', 'logout') }}</li>
			@endif
		</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div id="fake-header"></div>

	@show

	<div class="container">
		@if(Session::has('message'))
			<div class="alert alert-info alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Alert!</strong> {{session::get('message')}}
			</div>
			<!-- Button trigger modal -->
		@endif
		<!-- login form -->
		<div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Please Login</h4>
					</div>
					<div class="modal-body">
						{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin form-horizontal')) }}

						<div class="row">
							<div class="form-group">
								{{ Form::text('firstname', null, array('class'=>'form-control col-sm-4', 'placeholder'=>'First Name')) }}
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								{{ Form::password('password', array('class'=>'form-control col-sm-4', 'placeholder'=>'Password')) }}
							</div>
						</div>

					</div>
					<div class="modal-footer">
						{{ Form::submit('Login', array('class'=>'btn btn-default btn-primary'))}}
						{{ Form::close() }}
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		@yield('content')
	</div>

	<div class="footer text-right">
		<address>
			<strong>linkary</strong><br>
			12345678<br>
			Qingdao, Shangdong<br>
			266-7345011<br>
		</address>
		<address>
			<strong>Full Name</strong><br>
			<a href="mailto:linkarys@gmail.com">linkarys@gmail.com</a>
		</address>
	</div>
</body>
</html>