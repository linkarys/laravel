@extends('layouts.master')

@section('header')
	{{ HTML::script('js/d3.v3.min.js')}}
	{{ HTML::style('css/chart.less', array('rel'=>'stylesheet/less'))}}
@stop

@section('content')

<ol class="breadcrumb">
	<li><a href="{{route('home.index')}}">Home</a></li>
	<li class="active">Sunshine</li>
</ol>

<div class="jumbotron">
	<h1 class="text-primary text-center jumbotron-header">告旺海同胞书</h1>
	<div class="jumbtron-content">
		<p>本期我大旺海集团运作细则如下文所示，消费总量较去年同期增长250%，结果非常惊喜！</p>
		<p>望滋同胞不骄不燥，继续努力，再创佳绩！</p>
	</div>
	<div class="jumbtron-footer text-right">政哥 / 2013年12月1日</div>
</div>

<h2 class="head-link" data-href="#summary">概览</h2>
<div id="chart-summary"></div>
<!-- <svg id="svg"></svg> -->

<h2 class="head-link" data-href="#gas">瓦斯气与水</h2>
<svg id="svg-gas" class="chart"></svg>

<script>

	var data = [4, 8, 15, 16, 23, 42];
	// d3.select('#chart-summary').selectAll()
	// .data(data)
	// .enter().append('p')
	// .style('height', '20px')
	// .style('width', 0)
	// .transition()
	// .style({
	// 	width: function(d) {
	// 		return d + '%'
	// 	},
	// 	color: function(d) {
	// 		return 'hsl(' + Math.random() * 360 + ', 100%, 50%)';
	// 	},
	// 	'background-color': function() {
	// 		return 'hsl(' + Math.random() * 360 + ', 100%, 50%)';
	// 	}
	// })

	var width = 400;
	var height = 20;

	x = d3.scale.linear().domain([0, d3.max(data)]).range([0, width]);

	var svg_gas = d3.select('#svg-gas')
		.attr({
			width: width,
			height: height * data.length
		})
		.selectAll('g')
		.data(data).enter()
		.append('g')
		.attr({
			transform: function(d, i) {
				return 'translate(0,' + i * height + ')';
			}
		});
	svg_gas.append('rect')
		.attr({
			width: 0,
			height: height - 1
		})
		.transition().attr('width', x);
	svg_gas.append('text')
		.text(function(d) {return d})
		.attr({
			x: function(d, i) {
				return x(d) - 3
			},
			y: height / 2,
			dy: '0.35em'
		})


// 	svg.selectAll("circle")
// 	.data(data)
// 	.enter().append("circle")
// 	.attr("cx", function(d) { return d.x; })
// 	.attr("cy", function(d) { return d.y; })
// 	.attr("r", 2.5);
</script>
@stop

@section('footer')
	@parent
	{{ HTML::script('js/head-link.js')}}
@stop