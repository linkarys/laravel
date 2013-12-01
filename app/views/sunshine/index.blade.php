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
<div id="chart-summary">
	<svg class="chart" viewBox="0 0 960 500" preserveAspectRatio="xMidYMid"></svg>
</div>
<!-- <svg id="svg"></svg> -->

<h2 class="head-link" data-href="#gas">瓦斯气与水</h2>
<!-- <div class="chart-scale">
	<svg id="chart-gas" class="chart" viewBox="0 0 600 120" preserveAspectRatio="xMidYMid"></svg>
</div> -->
<script>

var chandler = d3.scale.category10();
var width = 960;
var height = 500;
var offsetX = 10;
var margin = {'t': 20, 'r': 20, 'b': 20, 'l': 20};
var data = [
	{name: '水费', value: 240 },
	{name: '电费', value: 120 },
	{name: '伙食', value: 520 },
	{name: '煤气费', value: 620 },
	{name: '物业费', value: 420 },
	{name: '网费', value: 120 }
];

var x = d3.scale.ordinal()
	.rangeRoundBands([0, width - margin.l - margin.r], .2)
	.domain(data.map(function(d){return d.name; }));

var y = d3.scale.linear()
	.range([height - margin.t - margin.b, 0])
	.domain([0, d3.max(data.map(function(d){return d.value; }))]);

var x_axis = d3.svg.axis()
	.scale(x)
	.orient('bottom');

var y_axis = d3.svg.axis()
	.scale(y)
	.orient('left');

var chart = d3.select('.chart')
	.attr({
		width: width,
		height: height,
		fill: '#eee'
	})
	.append('g').attr('transform', 'translate(' + margin.l + ', ' + margin.t + ')');


//	append axis x
chart.append('g')
	.attr({
		transform: 'translate(' + offsetX + ',' + (height - margin.t - margin.b) + ')',
		class: 'x axis'
	})
	.call(x_axis);

// append axis y
chart.append('g')
	.attr({
		transform: 'translate(' + offsetX + ',0)',
		class: 'y axis'
	})
	.call(y_axis);

chart.selectAll('.bar')
	.data(data).enter()
	.append('rect')
	.attr({
		class: 'bar',
		fill: function(d, i) {return chandler(i % data.length)},
		x: function(d) {return x(d.name) + offsetX},
		y: function(d) {return y(d.value)},
		height: function(d) {return (height - y(d.value) - margin.t - margin.b)},
		width: function(d) {return x.rangeBand()}
	})

// console.log(x);


	// x = d3.scale.linear().domain([0, d3.max(data)]).range([0, width]);

	// var svg_gas = d3.select('#chart-gas')
	// 	.attr({
	// 		width: width,
	// 		height: height * data.length
	// 	})
	// 	.selectAll('g')
	// 	.data(data).enter()
	// 	.append('g')
	// 	.attr({
	// 		transform: function(d, i) {
	// 			return 'translate(0,' + i * height + ')';
	// 		}
	// 	});
	// svg_gas.append('rect')
	// 	.attr({
	// 		width: 0,
	// 		height: height - 1,
	// 		fill: function(d, i) {
	// 			return chandler(i % data.length);
	// 		}
	// 	})
	// 	.transition().attr('width', x);
	// svg_gas.append('text')
	// 	.text(function(d) {return d})
	// 	.attr({
	// 		x: function(d, i) {
	// 			return x(d) - 3
	// 		},
	// 		y: height / 2,
	// 		dy: '0.35em'
	// 	})



	var aspect = width / height,

	chart = $(".chart");
	$(window).on("resize", function() {
		var targetWidth = chart.parent().width();
		chart.attr("width", targetWidth);
		chart.attr("height", targetWidth / aspect);
	});


</script>
@stop

@section('footer')
	@parent
	{{ HTML::script('js/head-link.js')}}
@stop