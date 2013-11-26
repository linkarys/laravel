@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')
{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin form-horizontal')) }}

<h2 class="form-signin-heading">Please Login</h2>

<div class="row">
	<div class="form-group">
		{{ Form::text('firstname', null, array('class'=>'form-control col-sm-4', 'placeholder'=>'First Name')) }}
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::password('password', array('class'=>'form-control col-sm-4', 'placeholder'=>'Password')) }}
	</div>
</div>

{{ Form::submit('Login', array('class'=>'btn btn-default btn-primary'))}}
{{ Form::close() }}
@stop
