<!-- main nav begin -->
@section('nav')
<nav class="navbar navbar-default navbar-fixed-top main-nav-bar" role="navigation">
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
		<a href="#" class="dropdown-toggle">More Action <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="{{route('dogs.index')}}">Dogs</a></li>
			<li><a href="{{route('merry.index')}}">Merry Christmas Eve</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="{{route('sunshine.index')}}">Separated link</a></li>
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
			<!-- <li><a href="users/register"><button class="btn btn-default">Register</button></a></li> -->
			<li>{{ HTML::link('users/register', 'Register') }}</li>
			<li>{{ HTML::link('#login-form', 'Login', array('data-toggle'=>'modal', 'data-target'=>'#login-form')) }}</li>
			<!-- <li><a href="#login-form" data-target="#login-form" data-toggle="modal">Login</a></li> -->
		@else
			<li>{{ HTML::link('users/logout', 'logout') }}</li>
		@endif
	</ul>
	</div><!-- /.navbar-collapse -->
</nav>

<div id="fake-header"></div>

@show
<!-- main nav end -->
