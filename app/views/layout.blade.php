<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multi-site Generator</title>
	{{ HTML::style('/bootstrap/dist/css/bootstrap.min.css') }}
	{{ HTML::style('/themes/slate/bootstrap.min.css') }}
	{{ HTML::style('/css/style.css') }}
</head>
<body>
	<div id="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Multi-Site</a>
				</div>

				<div id="nav" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href='/'>Home</a></li>
						@if(Auth::check())
							<li><a href='/profile'>Profile</a></li>
						@endif
					</ul>
					<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
							<li><a href='/settings'>Settings</a></li>
							<li><a href='/logout'>Logout</a></li>
					@else
							<li><a href='/login'>Login</a></li>
					@endif
          </ul>
				</div><!-- end nav -->
			</div>
		</div>

		<!-- check for flash notification message -->
		@if(Session::has('flash_notice'))
			<div class="alert alert-info" role="alert">
				<div id="flash_notice">{{ Session::get('flash_notice') }}</div>
			</div>
		@endif

		@yield('content')
			</div><!-- end container -->
			<div class="footer">
				{{ HTML::script('bootstrap/dist/js/bootstrap.min.js') }}
			</div>
		</body>
	</html>
