<!-- app/views/partials/login.blade.php -->
<div class="row">
	<div class="col-md-10 col-md-offset-1 col-sm-12">
		{{ Form::open(array('url' => 'login')) }}
			<h1>Login</h1>
			<!-- check for login error flash var -->
			@if (Session::has('flash_error'))
			<div class="alert alert-danger" role="alert">
	 			<div id="flash_error">{{ Session::get('flash_error') }}</div>
			</div>
			@endif

			<!-- if there are login errors, show them here -->
			<div class="" role="alert">
				{{ $errors->first('email') }}
				{{ $errors->first('password') }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email Address') }}
				{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password', array('class' => 'form-control')) }}
			</div>

			<p>{{ Form::submit('Submit!', array('class' => 'btn btn-default')) }}</p>
		{{ Form::close() }}
	</div>
</div>
