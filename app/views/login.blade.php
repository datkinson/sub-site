<!-- app/views/login.blade.php -->
@extends('layout')

@section('content')
	<div class="row">
		<div class="col-xs-12 col-md-6">
			@include('partials.login')
		</div>
		<div class="col-xs-12 col-md-6">
			@include('partials.register')
		</div>
	</div>
@stop

