@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')
	{{ is_array($dogs)}}
	<table class="table table-responsive table-hover table-striped table-condensed">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
		</tr>
	</thead>
	<tbody>
	@foreach($dogs as $dog)
		<tr>
			<td><a href="{{route('dogs.show', $dog->id)}}">{{ $dog->name }}</a></td>
			<td>{{ $dog->age }}</td>
		</tr>
	@endforeach
	</tbody>
	</table>
@stop