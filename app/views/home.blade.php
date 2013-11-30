@extends('layouts.master')

@section('nav')
	@parent
@stop

@section('content')


<div class="jumbotron">
	<h1 class="text-center text-primary">Home Page <small>@linkary<abbr title="love">\(^_^)-</abbr>zhuxiaoya</small></h1>
</div>
<div class="row">
	<nav id="nav-slide" class="col-md-2 visible-md visible-lg" role="navigation">
		<!-- <div class="sidenav-wrap" data-spy="affix"> -->
		<div class="wrap" data-spy="affix">
			<ul class="nav nav-default nav-stacked main">
				<li class=""><a href="#fat">yaya</a></li>
				<li class=""><a href="#mdo">mdo</a></li>
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

	<div class="col-md-10 col-xs-9">
		<div data-spy="scroll" id="scroll-body" data-target="#nav-slide" data-offset="0" class="scrollspy-example">
			<button class="btn btn-success btn-xs pull-right">button</button>

			<dl class="dl-horizontal text-left">
				<dt></dt>
				<dd><h3 id="fat">@zhuxiaoya</h3></dd>
				<dt></dt>
				<dd><img src="img/lovenote.jpg" class="img-responsive img-rocunded" alt=""></dd>
				<dt>Description</dt>
				<dd>A Description list is perfect for defining terms</dd>
				<dt>Lorem</dt>
				<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, vel, harum voluptatibus ex enim asperiores ducimus repellendus porro aliquam nisi dolores quia adipisci sint fuga velit eum placeat sapiente delectus.</dd>
			</dl>
			<p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
			<h3 id="mdo">@mdo</h3>
			<div class="alert fade in">
				<button class="close" aria-hidden="true" data-dismiss="alert">&times;</button >
				<p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, delectus, iure, eligendi, ad voluptatum nam amet labore atque autem tenetur maxime voluptas veritatis dolor tempore repudiandae accusamus saepe quidem cum. Obcaecati, repellendus corporis aspernatur earum alias. Cumque, explicabo, hic distinctio ex ipsa aliquid magni minus placeat expedita eveniet id quaerat! Et, nesciunt, sit rem soluta consectetur architecto nihil repellat maiores esse illo tenetur vero praesentium corporis. Hic, quas, maxime vitae molestiae ea et sunt iste deleniti debitis reiciendis consectetur iure rem excepturi culpa unde asperiores provident id aut nobis recusandae in ab non doloribus tenetur voluptates temporibus fugit dolorum quo?</p>
			<button data-toggle="buttons" id="trybtn" data-loading-text="loading.." class="btn btn-primary">load</button>
			<h3 id="one" class="text-center">Form Area</h3>
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
			<h4 id="modal">modal</h4>

			<button class="btn btn-success" data-toggle="modal" data-target="#md-example">md example</button>
			<div class="modal fade" id="md-example" tabindex="-1" role="dialog" aria-labelledby="md-example-label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="md-example-label">Modal title</h4>
						</div>
						<div class="modal-body">
							something very good
						</div>
						<div class="modal-footer">
							<button class="btn btn-danger" data-dismiss="modal">close</button>
							<button class="btn btn-default">show</button>
						</div>
					</div>
				</div>
			</div>
			<button class="center-block btn btn-info">center block</button>
			<a href="#" class="btn btn-default btn-primary" role="button">Link Button</a>
			<p class="center-block">Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
			<p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats. </p>
			<h4 id="icons">icons</h4>
			<div>
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
			</div><br/>
			<h4>justified link button</h4>
			<div class="btn-group btn-group-justified">
				<a class="btn btn-default">left</a>
				<a class="btn btn-default">middle</a>
				<a class="btn btn-default">right</a>
			</div><br/>
			<p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats. </p>
			<h3 id="input-group">input group</h3>
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
			</form>
		</div>
	</div>
</div>
@stop

@section('footer')
	{{ HTML::script('js/main.js')}}
@stop