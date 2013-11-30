@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')

{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup form-horizontal')) }}

<legend>Please Register</legend>

<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
<div class="row">
	<div class="form-group">
		{{ Form::label('username', 'First Name:', array('class'=>'control-label col-md-3'))}}
		<div class="col-md-8">{{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}</div>
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::label('lastname', 'Last Name:', array('class'=>'control-label col-md-3'))}}
		<div class="col-md-8">{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}</div>
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::label('email', 'Email:', array('class'=>'control-label col-md-3'))}}
		<div class="col-md-8">{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}</div>
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::label('pwd', 'Password:', array('class'=>'control-label col-md-3'))}}
		<div class="col-md-8">{{ Form::password('pwd', array('class'=>'form-control', 'placeholder'=>'Password')) }}</div>
	</div>
</div>
<div class="row">
	<div class="form-group">
		{{ Form::label('password_confirmation', 'Confirmation:', array('class'=>'control-label col-md-3'))}}
		<div class="col-md-8">{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}</div>
	</div>
</div>
<div class="row">
	<div class="form-group">
		<div class="col-md-offset-3 col-md-8">
			{{ Form::submit('Register', array('class'=>'btn btn-default btn-primary'))}}
		</div>
	</div>
</div>

{{ Form::close() }}

@stop
