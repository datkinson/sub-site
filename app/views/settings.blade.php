@extends('layout')

@section('content')
<?php
$settings = Settings::where('user_id' ,'=', Auth::user()->id)->find(1);
?>
  <h2>Welcome "{{ Auth::user()->username }}" to the settings page!</h2>
  <p>Your user ID is: {{ Auth::user()->id }}</p>

	<div class="container-fluid">
		<div class="col-xs-12">
			<h3>Theme</h3>
		</div>
		<div class="col-xs-12">
			@include('partials.themes-list')
		</div>
	</div>
@stop
