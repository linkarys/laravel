@extends('layouts.master')

@section('nav')
@parent
@stop

@section('content')
<form method="POST" action="http://laravel.net/users/create" accept-charset="UTF-8" class="form-signup form-horizontal"><input name="_token" type="hidden" value="2GleudNtHhS8YXsCcaUNxS7Y81LDbReCqn0mJpHo">
	<h2 class="form-signup-heading">Please Register</h2>

	<div class="row">
		<div class="form-group">
			<label for="ContactForm_name" class="control-label col-md-3">First Name:</label>
			<div class="col-md-8">
				<input class="form-control" placeholder="First Name" name="firstname" type="text" id="ContactForm_name">
			</div>
		</div>
	</div>



	<div class="row">
		<div class="form-group">
			<label for="lastname" class="control-label col-md-3">Last Name:</label>		<div class="col-md-8"><input class="form-control" placeholder="Last Name" name="lastname" type="text" id="lastname"></div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label for="email" class="control-label col-md-3">Email:</label>		<div class="col-md-8"><input class="form-control" placeholder="Email Address" name="email" type="text" id="email"></div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label for="password" class="control-label col-md-3">Password:</label>		<div class="col-md-8"><input class="form-control" placeholder="Password" name="password" type="password" value="" id="password"></div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<label for="password_confirmation" class="control-label col-md-3">Confirmation:</label>		<div class="col-md-8"><input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" value="" id="password_confirmation"></div>
		</div>
	</div>
	<div class="row">
		<div class="form-group">
			<input class="btn btn-default btn-primary" type="submit" value="Register">	</div>
		</div>
	</form>
@stop