@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')
	{{ is_array($dogs)}}
	<table class="table table-responsive table-hover">
	@foreach($dogs as $dog)
			<tr>
				<th>Name</th>
				<th>Age</th>
			</tr>
			<tbody>
				<tr>
					<td><a href="{{route('dogs.show', $dog->id)}}">{{ $dog->name }}</a></td>
					<td>{{ $dog->age }}</td>
				</tr>
			</tbody>
	@endforeach
	</table>
@stop