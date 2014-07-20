<!-- app/views/login.blade.php -->
@extends('layout')

@section('content')

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

		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}

@stop

