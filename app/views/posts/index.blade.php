@extends('layouts.master')



@section('content')
<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active"><a href="#">Post</a></li>
</ol>

<div class="alert alert-success alert-dismissable">
	<button class="close" data-dismiss="alert">&times;</button>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quisquam nisi aut eveniet vel omnis quaerat voluptate et veniam quasi.
</div>

<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
    <span class="sr-only">60% Complete</span>
  </div>
</div>

<div class="progress">
	<div class="progress-bar progress-bar-info" aria-valuemax="100" aria-valuemin="0" style="width:100%"><span class="sr-only">100% complete</span></div>
</div>
<div class="progress progress-striped active">
	<div class="progress-bar progress-bar-primary" aria-valuemax="100" aria-valuemin="0" style="width:80%%"><span class="sr-only">80%% complete</span></div>
</div>
<div class="progress progress-striped active">
	<div class="progress-bar progress-bar-success" aria-valuemax="100" aria-valuemin="0" style="width:99%%"><span class="sr-only">99%% complete</span></div>
</div>

<div class="progress progress-striped">
	<div class="progress-bar progress-bar-danger" aria-valuemax="100" aria-valuemin="0" style="width:2%"><span class="sr-only">2% complete</span></div>
</div>
<div class="progress">
	<div class="progress-bar progress-bar-warning" aria-valuemax="100" aria-valuemin="0" style="width:20%"><span class="sr-only">20% complete</span></div>
</div>
<!-- form -->
<div class="row">
	<div class="col-md-8 col-md-offset-4">
		<ul class="nav nav-tabs pull-right">
			<li class="active"><a href="#">Rice</a></li>
			<li><a href="#">Meat</a></li>
			<li><a href="#">Vegetables</a></li>
			<li><a href="#">Services</a></li>
		</ul>
		<form action="" class="form-horizontal">
			<filedset>
				<legend>Rice</legend>
				<div class="row">
					<label for="m-rice" class="col-xs-3 control-label">Rice: </label>
					<div class="input-group col-xs-9">
						<div class="input-group-addon">￥</div>
						<input type="text" id="m-rice" class="form-control" placeholder="money">
					</div>
				</div><br>

				<div class="row">
					<label for="m-noodles" class="col-xs-3 control-label">Noodles: </label>
					<div class="input-group col-xs-9">
						<div class="input-group-addon">￥</div>
						<input type="text" id="m-noodles" class="form-control" placeholder="money">
					</div>
				</div>
			</filedset>
			<filedset>
				<legend>Meat</legend>
					<div class="row">
						<label for="m-pork" class="control-label col-xs-3">Pork:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-pork" placeholder="cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-beaf" class="control-label col-xs-3">Beaf:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-beaf" placeholder="cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-egg" class="control-label col-xs-3">Egg:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-egg" placeholder="egg cost">
						</div>
					</div><br>
			</filedset>
			<filedset>
				<legend>Vegetables</legend>
					<div class="row">
						<label for="m-tomatoes" class="control-label col-xs-3">Tomatoes:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-tomatoes" placeholder="cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-cabbage" class="control-label col-xs-3">Cabbage:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-cabbage" placeholder="cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-what" class="control-label col-xs-3">what:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-what" placeholder="what">
						</div>
					</div><br>
			</filedset>
			<filedset>
				<legend>Services</legend>
					<div class="row">
						<label for="m-prop-management" class="control-label col-xs-3">property management:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-prop-management" placeholder="property management cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-electronic" class="control-label col-xs-3">electronic:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-electronic" placeholder="electronic cost">
						</div>
					</div><br>
					<div class="row">
						<label for="m-network" class="control-label col-xs-3">network:</label>
						<div class="input-group col-xs-9">
							<span class="input-group-addon">￥</span>
							<input type="text" class="form-control" id="m-network" placeholder="network cost">
						</div>
					</div><br>
			</filedset>
			<div class="row">
				<div class="input-group col-md-offset-3 col-md-9">
					<button type="submit" class="btn btn-primary">sublime</button>
				</div>
			</div>
		</form>
	</div>
</div><br>

<!-- holder.js -->
<div class="row">
	<div class="col-sm-6 col-md-3">
		<a href="" data-src="holder.js/100x180/sky"></a>
		<a href="" data-src="holder.js/100x180/sky"></a>
		<a href="" data-src="holder.js/100x180/sky"></a>
		<a href="" data-src="holder.js/100x180/sky"></a>
	</div>
</div>

<!-- thumbnail -->
<div class="row">
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img data-src="holder.js/300x200/gray" alt="">
		</a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img data-src="holder.js/300x200/gray" alt="">
		</a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img data-src="holder.js/300x200/gray" alt="">
		</a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img data-src="holder.js/300x200/gray" alt="">
		</a>
	</div>
</div>

<div class="row">
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail">
			<img src="" alt="" data-src="holder.js/300x200/sky">
			<div class="caption">
				<h3>Thumbnail label 3</h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
			<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail">
			<img src="" alt="" data-src="holder.js/300x200/sky">
			<div class="caption">
				<h3>Thumbnail label 3</h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
			<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail">
			<img src="" alt="" data-src="holder.js/300x200/sky">
			<div class="caption">
				<h3>Thumbnail label 3</h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
			<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail">
			<img src="" alt="" data-src="holder.js/300x200/sky">
			<div class="caption">
				<h3>Thumbnail label 3</h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
			<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
		</div>
	</div>
</div>
@stop