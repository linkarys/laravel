@extends('layouts.master')



@section('content')
<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active"><a href="#">Post</a></li>
</ol>

<!-- alert message example -->
<div class="alert-message-example">
	<div class="alert alert-success alert-dismissable">
		<button class="close" data-dismiss="alert">&times;</button>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quisquam nisi aut eveniet vel omnis quaerat voluptate et veniam quasi.
	</div>

	<div class="alert alert-warning alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <strong>Warning!</strong> Best check yo self, you're not looking too good.
	</div>
</div>

<!-- progress bar example -->
<div class="progress-bar-example">
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


	<div class="progress">
		<div class="progress-bar progress-bar-success" style="width: 80%">
			<span class="sr-only">80% complete</span>
		</div>
		<div class="progress-bar progress-bar-danger" style="width: 15%">
			<span class="sr-only">60% complete</span>
		</div>
		<div class="progress-bar progress-bar-warning" style="width: 5%">
			<span class="sr-only">30% complete</span>
		</div>
	</div>
</div>

<!-- media object -->
<div class="media-list">
	<div class="media">
		<a href="#" class="pull-left"><img src="#" alt="#" data-src="holder.js/64x64/sky/text:linkary"></a>
		<div class="media-body">
			<div class="media-heading"><strong>Title</strong></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, aut, sequi, voluptatibus iusto ducimus repudiandae iure aspernatur necessitatibus sunt ipsum sint ad sed blanditiis odit delectus saepe quasi. Rem, iste?</p>
		</div>
	</div>
	<div class="media">
		<a href="#" class="pull-left"><img src="#" alt="" data-src="holder.js/64x64/lava/text:yaya"></a>
		<div class="media-body">
			<div class="media-heading"><strong>Title</strong></div>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, laudantium at laboriosam porro laborum optio beatae in cumque fugiat voluptatibus! Pariatur, numquam, laboriosam eaque aperiam quo ipsam saepe soluta magnam!
			<div class="media">
				<a href="#" class="pull-left"><img data-src="holder.js/64x64/vine/text:tian" alt=""></a>
				<div class="media-body">
					<div class="media-headering"><strong>Sub Title</strong></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, temporibus, eligendi, similique quam officia aut ullam accusantium modi earum nam ut ratione facilis pariatur sit animi. Necessitatibus libero atque labore?</p>
				</div>
			</div>
		</div>
	</div>
	<div class="media">
		<a href="#" class="pull-left"><img src="#" alt="" data-src="holder.js/64x64/industrial/text:manager"></a>
		<div class="media-body">
			<div class="media-heading"><strong>Title</strong></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, id, tempore, quidem dignissimos exercitationem magnam eos cupiditate vero harum nemo similique perspiciatis dolorum temporibus quos culpa inventore facere cum soluta?</p>
		</div>
	</div>
</div>

<!-- list group -->
<div class="row">
	<div class="col-md-4">
		<ul class="list-group">
			<li class="list-group-item active">Car <span class="badge">11</span></li>
			<li class="list-group-item">Car <span class="badge">12</span></li>
			<li class="list-group-item">Car <span class="badge">13</span></li>
			<li class="list-group-item">Car <span class="badge">14</span></li>
			<li class="list-group-item">Car <span class="badge">15</span></li>
		</ul>
	</div>
</div>

<!-- panel -->
<div class="panels">
	<div class="panel panel-default">
		<div class="panel-heading">Panel Header</div>
		<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nisi quisquam cum aliquam error doloremque quaerat aut quos nemo at!</div>
	</div>
</div>

<!-- form -->
<div class="row">
	<div class="col-md-12">

		<ul class="nav nav-tabs">
			<li><a href="#pane-rice" data-toggle="tab">Rice</a></li>
			<li><a href="#pane-meat" data-toggle="tab">Meat</a></li>
			<li><a href="#pane-vegetables" data-toggle="tab">Vegetables</a></li>
			<li><a href="#pane-services" data-toggle="tab">Services</a></li>
		</ul><br>

		<form class="tab-content form-horizontal">
			<div class="tab-pane fade in active" id="pane-rice">
				<div class="row">
					<label for="m-rice" class="col-xs-2 control-label">Rice: </label>
					<div class="input-group col-xs-9">
						<div class="input-group-addon">￥</div>
						<input type="text" id="m-rice" class="form-control" placeholder="money">
					</div>
				</div><br>
				<div class="row">
					<label for="m-noodles" class="col-xs-2 control-label">Noodles: </label>
					<div class="input-group col-xs-9">
						<div class="input-group-addon">￥</div>
						<input type="text" id="m-noodles" class="form-control" placeholder="money">
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pane-meat">
				<div class="row">
					<label for="m-pork" class="control-label col-xs-2">Pork:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-pork" placeholder="cost">
					</div>
				</div><br>
				<div class="row">
					<label for="m-beaf" class="control-label col-xs-2">Beaf:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-beaf" placeholder="cost">
					</div>
				</div><br>
				<div class="row">
					<label for="m-egg" class="control-label col-xs-2">Egg:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-egg" placeholder="egg cost">
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pane-vegetables">
				<div class="row">
					<label for="m-tomatoes" class="control-label col-xs-2">Tomatoes:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-tomatoes" placeholder="cost">
					</div>
				</div><br>
				<div class="row">
					<label for="m-cabbage" class="control-label col-xs-2">Cabbage:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-cabbage" placeholder="cost">
					</div>
				</div><br>
				<div class="row">
					<label for="m-what" class="control-label col-xs-2">What:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-what" placeholder="what">
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pane-services">
				<div class="row">
					<label for="m-prop-management" class="control-label col-xs-2">Property management:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-prop-management" placeholder="property management cost">
					</div>
				</div><br>
				<div class="row">
					<label for="m-electronic" class="control-label col-xs-2">Electronic:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-electronic" placeholder="electronic cost">
					</div>
				</div><br>
				<div class="row">
					<label for="m-network" class="control-label col-xs-2">Network:</label>
					<div class="input-group col-xs-9">
						<span class="input-group-addon">￥</span>
						<input type="text" class="form-control" id="m-network" placeholder="network cost">
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="input-group col-md-offset-2 col-md-9">
					<button type="submit" class="btn btn-primary">submit</button>
				</div>
			</div>
		</form>


		<!-- normal form -->
		<form action="" class="form-horizontal">
			<filedset id="pane-rice">
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
			<filedset id="pane-meat">
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
					<button type="submit" class="btn btn-primary">submit</button>
				</div>
			</div>
		</form>
	</div>
</div><br>

<!-- holder.js -->
<div class="row">
	<div class="col-xs-6 col-md-3">
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
			<img data-src="holder.js/300x200/auto" alt="">
		</a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img data-src="holder.js/300x200/auto" alt="">
		</a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img data-src="holder.js/300x200/auto" alt="">
		</a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img data-src="holder.js/300x200/auto" alt="">
		</a>
	</div>
</div>

<div class="row">
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail">
			<img src="" alt="" data-src="holder.js/100%x200/industrial/text:thumb">
			<div class="caption">
				<h3>Thumbnail label 3</h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
			<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail">
			<img src="" alt="" data-src="holder.js/100%x200/industrial/text:thumb">
			<div class="caption">
				<h3>Thumbnail label 3</h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
			<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail">
			<img src="" alt="" data-src="holder.js/100%x200/industrial/text:thumb">
			<div class="caption">
				<h3>Thumbnail label 3</h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
			<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="thumbnail">
			<img src="" alt="" data-src="holder.js/100%x200/industrial/text:thumb">
			<div class="caption">
				<h3>Thumbnail label 3</h3>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
			<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
		</div>
	</div>
</div>
@stop