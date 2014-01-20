@extends('layouts.scaffold')

@section('main')

<h1>Edit Gruden</h1>
{{ Form::model($gruden, array('method' => 'PATCH', 'route' => array('grudens.update', $gruden->id))) }}
	<ul>
        <li>
            {{ Form::label('user', 'User:') }}
            {{ Form::text('user') }}
        </li>

        <li>
            {{ Form::label('addr', 'Addr:') }}
            {{ Form::textArea('addr') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('grudens.show', 'Cancel', $gruden->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
