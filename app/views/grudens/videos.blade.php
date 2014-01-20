@extends('layouts.scaffold')

@section('main')

<h1>All Grudens</h1>

<p>{{ link_to_route('grudens.create', 'Add new gruden') }}</p>

@if ($grudens->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User</th>
				<th>Addr</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($grudens as $gruden)
				<tr>
					<td>{{{ $gruden->user }}}</td>
					<td>{{{ $gruden->addr }}}</td>
                    <td>{{ link_to_route('grudens.edit', 'Edit', array($gruden->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('grudens.destroy', $gruden->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no grudens
@endif

@stop
