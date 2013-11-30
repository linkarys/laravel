@extends('layouts.master')



@section('content')
<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active"><a href="#">Post</a></li>
</ol>
<div class="row">
	<div class="col-md-8">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#">Rice</a></li>
			<li><a href="#">Meat</a></li>
			<li><a href="#">Vegetables</a></li>
			<li><a href="#">Services</a></li>
		</ul><br/>
		<form action="" class="form-horizontal">
			<filedset>
				<legend>Rice</legend>
				<div class="row">
					<label for="m-rice" class="col-xs-3 control-label">Rice: </label>
					<div class="input-group col-xs-8">
						<div class="input-group-addon">￥</div>
						<input type="text" id="m-rice" class="form-control" placeholder="money">
					</div>
				</div><br>

				<div class="row">
					<label for="m-noodles" class="col-xs-3 control-label">Noodles: </label>
					<div class="input-group col-xs-8">
						<div class="input-group-addon">￥</div>
						<input type="text" id="m-noodles" class="form-control" placeholder="money">
					</div>
				</div>
			</filedset>
			<filedset>
				<legend>Meat</legend>
					<div class="row">
						<label for="m-pork" class="control-label col-xs-3">Pork:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-pork" placeholder="cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-beaf" class="control-label col-xs-3">Beaf:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-beaf" placeholder="cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-egg" class="control-label col-xs-3">Egg:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-egg" placeholder="egg cost">
						</div>
					</div><br>
			</filedset>
			<filedset>
				<legend>Vegetables</legend>
					<div class="row">
						<label for="m-tomatoes" class="control-label col-xs-3">Tomatoes:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-tomatoes" placeholder="cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-cabbage" class="control-label col-xs-3">Cabbage:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-cabbage" placeholder="cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-what" class="control-label col-xs-3">what:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-what" placeholder="what">
						</div>
					</div><br>
			</filedset>
			<filedset>
				<legend>Services</legend>
					<div class="row">
						<label for="m-prop-management" class="control-label col-xs-3">property management:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-prop-management" placeholder="property management cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-electronic" class="control-label col-xs-3">electronic:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-electronic" placeholder="electronic cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-network" class="control-label col-xs-3">network:</label>
						<div class="input-group col-xs-8">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-network" placeholder="network cost">
						</div>
					</div><br>
			</filedset>
		</form>
	</div>
</div>
@stop