@extends('layouts.scaffold')

@section('main')

<h1>Create Gruden</h1>

{{ Form::open(array('route' => 'grudens.store')) }}
	<ul>
        <li>
            {{ Form::label('user', 'User:') }}
            {{ Form::text('user') }}
        </li>

        <li>
            {{ Form::label('addr', 'Addr:') }}
            {{ Form::text('addr') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


