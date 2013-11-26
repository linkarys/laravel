@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')
	<h1>{{$dog->name}} : {{$dog->age}}</h1>
@stop