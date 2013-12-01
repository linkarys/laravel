@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
	<li><a href="{{route('home.index')}}">Home</a></li>
	<li class="active">Sunshine</li>
</ol>

<div class="jumbotron">
	<h1 class="text-primary text-center jumbotron-header">告旺海同胞书</h1>
	<div class="jumbtron-content">
		<p>本期旺海运作细节如下文所示，消费总量较去年同期增长250%，结果非常惊喜！</p>
		<p>望滋同胞不骄不燥，继续努力，再创佳绩！</p>
	</div>
	<div class="jumbtron-footer text-right">政哥 / 2013年12月1日</div>
</div>


<h2 class="header-link">瓦斯气与水<a href="#gas" title="Permalink to this headline">¶</a></h2>

@stop