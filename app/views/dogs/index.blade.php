@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')
	<ul class="nav nav-pills">
		<li class="active">
			<a href="#">Dogs<span class="badge pull-right"></span></a>
		</li>
	</ul>

	<table class="table table-responsive table-hover table-striped table-condensed">
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Last Updated</th>
			</tr>
		</thead>
		<tbody>
		@foreach($dogs as $dog)
			<tr>
				<td><a href="{{route('dogs.show', $dog->id)}}">{{ $dog->name }}</a></td>
				<td>{{ $dog->age }}</td>
				<td>{{ $dog->updated_at }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">6</a></li>
		<li><a href="#">7</a></li>
		<li><a href="#">8</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul>
	<ul class="pager">
		<li class="disabled previous"><a href="#">&larr; Older</a></li>
		<li class="previous"><a href="#">&larr; Previous</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li class="next"><a href="#">Next &rarr;</a></li>
	</ul>

	<div class="row">
		<span class="label label-default">default</span>
		<span class="label label-primary">primary</span>
		<span class="label label-success">success</span>
		<span class="label label-info">Info</span>
		<span class="label label-warning">warning</span>
		<span class="label label-danger">warning</span>
	</div>

	<a href="#">Inbox</a><span class="badge">42</span>
	<ul class="nav nav-pills nav-stacked">
	  <li class="active">
	    <a href="#">
	      <span class="badge pull-right">42</span>
	      Home
	    </a>
	  </li>
	  ...
	</ul>
@stop