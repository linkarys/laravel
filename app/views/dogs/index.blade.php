@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')


	<div class="panel panel-default">
		<div class="panel-heading text-center"><strong>Dogs list</strong></div>
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
	</div>

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
	<br>
	<a href="#" data-toggle="tooltip" title="first tooltip">Hover over me</a>

	<div class="tooltip">
	  <div class="tooltip-inner">
	    Tooltip!
	  </div>
	  <div class="tooltip-arrow"></div>
	</div>
	<button type="button" class="btn btn-primary" data-toggle="button" data-loading-text="正在加载..." >Single toggle</button>
	<br><br>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-0" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-1" data-slide-to="1"></li>
			<li data-target="#carousel-2" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="" alt="" data-src="holder.js/1200x300/text:zhuxiaoya/auto">
				<div class="carousel-caption">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ut, veritatis ad omnis in eius molestias similique minus neque quasi provident hic nisi voluptatum accusantium et repellendus natus reiciendis soluta.
				</div>
			</div>
			<div class="item">
				<img src="" alt="" data-src="holder.js/1200x300/text:zhuxiaoyang/auto">
				<div class="carousel-caption">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ut, veritatis ad omnis in eius molestias similique minus neque quasi provident hic nisi voluptatum accusantium et repellendus natus reiciendis soluta.
				</div>
			</div>
			<div class="item">
				<img src="" alt="" data-src="holder.js/1200x300/auto">
				<div class="carousel-caption">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ut, veritatis ad omnis in eius molestias similique minus neque quasi provident hic nisi voluptatum accusantium et repellendus natus reiciendis soluta.
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>

@stop