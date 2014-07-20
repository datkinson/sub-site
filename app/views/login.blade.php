<!-- app/views/login.blade.php -->
@extends('layout')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
		{{ Form::open(array('url' => 'login')) }}
			<h1>Login</h1>
			<!-- check for login error flash var -->
			@if (Session::has('flash_error'))
	 			<div id="flash_error">{{ Session::get('flash_error') }}</div>
			@endif

			<!-- if there are login errors, show them here -->
			<p>
				{{ $errors->first('email') }}
				{{ $errors->first('password') }}
			</p>

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

@stop

