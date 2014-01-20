<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/gruden.less', array('rel'=>'stylesheet/less'))}}
	{{ HTML::script('js/jquery-1.10.2.min.js')}}
	{{ HTML::script('packages/holder/holder.js')}}

	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	@section('header')

	@show

	{{ HTML::script('js/less-1.5.0.min.js')}}
	{{ HTML::script('packages/bootstrap/js/bootstrap.min.js')}}

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
</head>
<body data-spy="scroll" target="#nav-slide">
	<div class="container">
		@yield('content')
	</div>
</body>
</html>