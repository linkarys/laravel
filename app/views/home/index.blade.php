@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')


<div class="jumbotron">
	<h1 class="text-center text-primary">Home Page <small>@linkary<abbr title="love">\(^_^)-</abbr>zhuxiaoya</small></h1>
</div>
<div class="row">
	<!-- nav side bar -->
	<nav id="nav-slide" class="col-md-2 visible-md visible-lg" role="navigation">
		<div class="wrap home-sidebar" data-spy="affix" data-offset-top="215">
		<!-- <div class="wrap home-sidebar"> -->
			<ul class="nav nav-default nav-stacked main">
				<li class=""><a href="#yaya">yaya</a></li>
				<li class=""><a href="#alert-mes">mdo</a></li>
				<li class="">
					<a href="#one">form</a>
					<ul class="sub nav nav-stacked ">
						<li class=""><a href="#form">form</a></li>
						<li class=""><a href="#modal">modal</a></li>
						<li class=""><a href="#icons">icons</a></li>
					</ul>
				</li>
				<li class=""><a href="#input-group">input</a></li>
			</ul>
		</div>
	</nav>

	<!-- content -->
	<div class="col-md-10 col-xs-9">
		<div data-spy="scroll" id="scroll-body" data-target="#nav-slide" data-offset="0" class="scrollspy-example">

			<button class="btn btn-success btn-xs pull-right">button</button>

			<dl class="dl-horizontal text-left">
				<dt></dt>
				<dd><h3 id="yaya">@zhuxiaoya</h3></dd>
				<dt></dt>
				<dd><img src="img/lovenote.jpg" class="img-responsive img-rocunded" alt=""><br></dd>
				<dt>Description</dt>
				<dd>A Description list is perfect for defining terms</dd>
				<dt>Lorem</dt>
				<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, vel, harum voluptatibus ex enim asperiores ducimus repellendus porro aliquam nisi dolores quia adipisci sint fuga velit eum placeat sapiente delectus.</dd>
			</dl>

			<div class="alert alert-success">
				<p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
			</div>
			<h3 id="alert-mes">alter messge</h3>
			<div class="alert fade in alert-info">
				<button class="close" aria-hidden="true" data-dismiss="alert">&times;</button >
				<p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
			</div>

			<!-- panel with list group -->

			<div class="row">
				<div class="col-md-4 col-md-offset-8">
					<div class="panel panel-danger">
						<div class="panel-heading"><strong>danerous things</strong></div>
						<ul class="list-group">
							<li class="list-group-item">danger thing<a href="#" class="pull-right"><span class="badge">1</span></a></li>
							<li class="list-group-item">danger thing<a href="#" class="pull-right"><span class="badge">2</span></a></li>
							<li class="list-group-item">danger thing<a href="#" class="pull-right"><span class="badge">3</span></a></li>
							<li class="list-group-item">danger thing<a href="#" class="pull-right"><span class="badge">4</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<h3 id="one">Form Area</h3>
			<h4 id="form">form elements</h4>
			<form action="">
				<fieldset>
					<legend>sex</legend>
					<div class="form-group has-warning">
						<div class="radio-inline"><label>male<input type="radio" name="sex" id=""></label></div>
						<div class="radio-inline"><label>female<input type="radio" name="sex" id=""></label></div>
					</div>
				</fieldset>
				<fieldset>
					<legend>details</legend>
					<div class="form-group has-success"><input type="text" placeholder="has-success" class="form-control"></div>
					<div class="form-group has-warning"><input type="text" placeholder="has-warning" class="form-control"></div>
					<div class="form-group has-error"><input type="text" placeholder="has-error" name="" class="form-control"></div>
				</fieldset>
				<fieldset disabled>
					<legend>more - disabled</legend>
					<div class="form-group has-info"><input type="text" placeholder="has-info" class="form-control"></div>
				</fieldset>

			</form>
			<h4 id="modal">Modal</h4>

			<div class="media">
				<a href="#" class="pull-left" data-toggle="modal" data-target="#md-example">
					<img src="" alt="" data-src="holder.js/64x64/industrial">
				</a>
				<div class="media-body">
					<div class="media-heading"><strong>This is modal test</strong></div>
					<div class="media-content">
						<p>Please click the thumbnail left Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, excepturi, ducimus, tempore earum sequi vitae asperiores animi nisi accusantium et quae vel fugiat aliquid qui vero. Sit neque alias ipsum!</p>
					</div>
				</div>
			</div>
			<div class="modal fade" id="md-example" tabindex="-1" role="dialog" aria-labelledby="md-example-label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="md-example-label">Modal title</h4>
						</div>
						<div class="modal-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, reprehenderit, enim, doloremque officia dolores architecto sunt aliquid adipisci delectus perferendis mollitia non provident alias quos dolor nemo ratione distinctio pariatur quam ea asperiores quaerat at. Accusantium, odio, illum error ut corporis repellendus aliquid voluptatibus natus provident ad nostrum similique id nulla voluptate eum doloribus architecto dignissimos! Facere, laborum, quasi, corporis, architecto pariatur ab facilis aliquam quos commodi libero minima soluta eveniet vero. Odit, deleniti, tempora veritatis hic assumenda sapiente repudiandae deserunt dolorum recusandae fugiat reiciendis quasi adipisci ducimus officiis quas consequatur eveniet aliquam amet magnam temporibus obcaecati a aut totam magni dicta suscipit cumque accusantium. Consequuntur, quam, recusandae, obcaecati aliquid dolor sunt aliquam vel voluptas earum eligendi dicta incidunt numquam labore voluptatibus molestiae in et cupiditate delectus. Architecto error atque odit? Omnis, libero, vero, architecto, quae rerum tenetur odio reiciendis voluptatem a autem aspernatur ducimus eveniet consectetur sapiente non suscipit praesentium esse at impedit quo eos commodi alias distinctio. Odio, repellat, sint culpa tenetur ipsum atque quasi tempore autem cumque dolor quia aliquid vero vel quas excepturi? Quos, voluptatem, exercitationem, et pariatur odio inventore in repellendus natus maiores omnis corrupti ipsa aperiam blanditiis eaque porro nulla incidunt ducimus aliquid facere voluptatum quisquam quasi laboriosam modi perspiciatis esse mollitia fuga sint sit qui eum! Deleniti, accusantium non iste dolore ratione magni modi labore nostrum dolorem quia mollitia sint harum quos! Magni, expedita molestiae est dolorum maxime quae natus accusamus! Esse, nulla, illo odio odit minima vitae aliquid neque asperiores impedit sed aspernatur perferendis cumque praesentium officiis voluptatum earum sapiente dicta ducimus quidem adipisci. Voluptates iure adipisci itaque laborum autem molestias optio eveniet dolore quis maxime! Odio, totam voluptatem ab iure magni labore inventore nesciunt qui dicta enim tempora temporibus. Ex, cum, quasi doloremque maxime perferendis architecto modi non quos sint dolorem!
						</div>
						<div class="modal-footer">
							<button class="btn btn-danger" data-dismiss="modal">close</button>
							<button class="btn btn-default">show</button>
						</div>
					</div>
				</div>
			</div><br>

			<div class="btn-1">
				<a href="#" class="btn btn-default btn-primary" role="button">Link Button</a>
				<button data-toggle="buttons" id="trybtn" data-loading-text="loading.." class="btn btn-primary">load</button>
			</div><br>

			<h4 id="icons" class="sr-only">icons</h4>

			<div class="btn-groups">
				<div class="btn-toolbar">
					<div class="btn-group btn-group-sm" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="radio" name="view-type" value="block">
							<span class="glyphicon glyphicon-th" />
						</label>
						<label class="btn btn-default">
							<input type="radio" name="view-type" value="list">
							<span class="glyphicon glyphicon-th-list" />
						</label>
					</div>
					<div class="btn-group btn-group-sm">
						<button class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></button>
						<button class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button>
						<button class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
					</div>
					<div class="btn-group btn-group-sm">
						<button class="btn btn-default">1</button><button class="btn btn-default">2</button>
						<button class="btn btn-default">Dropdown</button>
						<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Dropdown link</a></li>
							<li><a href="#">Dropdown link</a></li>
						</ul>
					</div>
					<div class="btn-group btn-group-sm">
						<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
						</ul>
					</div>

					<div class="btn-group btn-group-sm dropup">
						<button class="btn btn-default">drop up</button>
						<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
						</ul>
					</div>
				</div>
			</div>
			<br>
			<button class="center-block btn btn-info" data-toggle="modal" data-target="#md-example">center block</button><br>
			<div class="btn-group btn-group-justified">
				<a class="btn btn-default">left</a>
				<a class="btn btn-default">middle</a>
				<a class="btn btn-default">right</a>
			</div><br/>
			<div class="well">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, sunt, ab, praesentium similique neque aliquid voluptates sapiente vero fugiat accusantium ducimus culpa ipsum eveniet esse atque et quos tempore vel libero illum ad optio numquam suscipit veritatis dignissimos voluptate eius.</div>
			<p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats. </p>
			<h3 id="input-group">Input Group</h3>
			<form action="" class="form-horizontal">
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="username">
				</div><br/>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="money">
					<span class="input-group-addon">.00</span>
				</div><br/>
				<div class="input-group">
					<span class="input-group-addon">$</span>
					<input type="text" class="form-control" placeholder="money - us">
					<span class="input-group-addon" >.00</span>
				</div><br/>
				<filedset>
					<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default">Go!</button>
						</span>
						<input type="text" class="form-control">
					</div><br/>
					<div class="input-group">
						<input type="text" name="get-money" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-default">go!</button>
						</span>
					</div><br/>
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-btn">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li class="divider"></li>
								<li><a href="#">4</a></li>
							</ul>
						</div>
					</div><br/>
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default">Action</button>
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li class="divider"></li>
								<li><a href="#">link</a></li>
							</ul>
						</div>
						<input type="text" class="form-control">
					</div>
				</filedset>
			</form><br>

			<!-- thumbnails -->
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="" alt="" data-src="holder.js/300x200/gray">
						<div class="caption">
							<h3>Title</h3>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
						<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="" alt="" data-src="holder.js/300x200/social">
						<div class="caption">
							<h3>Title</h3>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
						<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="" alt="" data-src="holder.js/300x200/industrial">
						<div class="caption">
							<h3>Title</h3>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
						<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="" alt="" data-src="holder.js/300x200/lava">
						<div class="caption">
							<h3>Title</h3>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nulla quos voluptate minima quis? Cum, nulla rem ad porro at.</p>
						<p><a href="#" class="btn btn-primary">button</a> <a href="#" class="btn btn-primary">button</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('footer')
	@parent
	{{ HTML::script('js/main.js')}}
@stop