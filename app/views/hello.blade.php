@extends('layouts.master')

@section('header')
	{{ HTML::script('js/main.js')}}
@stop
@section('nav')
	@parent
@stop

@section('content')
<div class="row">
	<nav id="navbar-example" class="col-md-2" role="navigation">
		<div class="myaffix">
			<ul class="nav nav-default nav-stacked">
				<li class=""><a href="#fat">fat</a></li>
				<li class=""><a href="#mdo">mdo</a></li>
				<li class="">
					<a href="#one">one</a>
					<ul class="subnav">
						<li class=""><a href="#two">two</a></li>
						<li class=""><a href="#three">three</a></li>
						<li class=""><a href="#four">four</a></li>
						<li class=""><a href="#five">five</a></li>
					</ul>
				</li>
				<li class=""><a href="#six">six</a></li>
				<li class=""><a href="#eight">eight</a></li>
				<li class=""><a href="#nine">nine</a></li>
			</ul>
		</div>
	</nav>
	<div class="col-md-10">
		<div data-spy="scroll" id="scroll-body" data-target="#navbar-example" data-offset="0" class="scrollspy-example">
			<h4 id="fat">@fat</h4>
			<p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
			<h4 id="mdo">@mdo</h4>
			<p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
			<h4 id="one">one</h4>
			<p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
			<h4 id="two">two</h4>
			<p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
			<h4 id="three">three</h4>
			<p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
			<p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats. </p>
			<h4 id="four">four</h4>
			<p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
			<p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats. </p>
			<h4 id="five">five</h4>
			<p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
			<p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats. </p>
			<h4 id="six">six</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, commodi, ex rerum iusto et cum labore recusandae obcaecati atque deleniti alias porro eaque quod veritatis necessitatibus perferendis odio ullam nobis ducimus cupiditate saepe reiciendis minima sed molestiae id perspiciatis corporis tempore asperiores ea sit temporibus sint aliquam hic. Minima, perspiciatis officiis accusantium nihil ad nemo. Dignissimos, repudiandae, molestiae quidem doloribus animi nihil iste a ipsa ullam deserunt vitae nulla nobis reprehenderit fugit reiciendis voluptate atque. Reprehenderit, porro, aspernatur, hic, ipsam repellendus suscipit aut dignissimos accusantium adipisci eius sunt obcaecati labore officiis natus itaque quos nihil minima quo saepe iste facilis!</p>
			<h4 id="eight">eight</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, dolorum, aliquam eius id cum amet itaque reprehenderit beatae soluta a dicta at corporis ab excepturi et minus dolor pariatur accusantium doloribus assumenda obcaecati nulla reiciendis aut architecto possimus impedit esse ratione. Molestiae, consequuntur laborum aspernatur dolor ipsa labore repudiandae sapiente iusto quia vero! Itaque, nihil autem nesciunt quos doloribus quo tenetur modi porro odio labore cupiditate eligendi harum facilis deserunt commodi molestiae dignissimos deleniti fugiat voluptates incidunt quibusdam esse sapiente repellat sint odit ducimus voluptatum vel! Pariatur, odio, non amet natus dolorem quasi provident cum maxime. Dignissimos, voluptatem nostrum impedit!</p>
			<h4 id="nine">nine</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, dolorum, possimus debitis fuga quasi reprehenderit harum animi provident quam nobis sapiente obcaecati repudiandae nulla doloribus reiciendis itaque optio at. Porro, aperiam, placeat, animi, a minus eligendi harum magni quod dignissimos et similique sed veritatis laborum mollitia temporibus fuga at vitae quis repellendus magnam qui adipisci sapiente eveniet iure eum impedit natus atque. Nam, aliquam, corporis, rem facilis adipisci molestias vero provident ipsa impedit porro mollitia ullam quos dolores assumenda expedita labore incidunt! Velit, quo, qui, accusantium, sed laudantium temporibus animi corrupti ipsa libero impedit quae est nemo magni blanditiis iste.</p>
		</div>
	</div>
</div>
<script>
	$('.myaffix').affix({
		offset: {
			top: 0,
			bottom: function () {
				return (this.bottom = $('.bs-footer').outerHeight(true))
			}
		}
	});

	$('body').scrollspy({ target: '#navbar-example' }, 1000);

	// $.scrollTo('#navbar-example', 1000);
</script>
@stop