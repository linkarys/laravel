@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')

{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup form-horizontal')) }}

<h2 class="form-signup-heading">Please Register</h2>

<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
<div class="row">
	<div class="form-group">
		{{ Form::text('firstname', null, array('class'=>'form-control col-sm-4', 'placeholder'=>'First Name')) }}
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::text('lastname', null, array('class'=>'form-control col-sm-4', 'placeholder'=>'Last Name')) }}
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::text('email', null, array('class'=>'form-control col-sm-4', 'placeholder'=>'Email Address')) }}
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::password('password', array('class'=>'form-control col-sm-4', 'placeholder'=>'Password')) }}
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::password('password_confirmation', array('class'=>'form-control col-sm-4', 'placeholder'=>'Confirm Password')) }}
	</div>
</div>

{{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}

@stop
