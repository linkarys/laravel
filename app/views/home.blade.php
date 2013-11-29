@extends('layouts.master')

@section('header')
	{{ HTML::script('js/main.js')}}
@stop
@section('nav')
	@parent
@stop

@section('content')

<h1 class="text-center text-primary">Home Page <small>@linkary<abbr title="love">\(^_^)-</abbr>zhuxiaoya</small></h1>

<div class="row">
	<nav id="nav-slide" class="col-md-2 col-xs-3" role="navigation">
		<!-- <div class="sidenav-wrap" data-spy="affix"> -->
		<div class="wrap" data-spy="affix">
			<ul class="nav nav-default nav-stacked main">
				<li class=""><a href="#fat">fat</a></li>
				<li class=""><a href="#mdo">mdo</a></li>
				<li class="">
					<a href="#one">one</a>
					<ul class="sub nav nav-stacked ">
						<li class=""><a href="#two">two</a></li>
						<li class=""><a href="#three">three</a></li>
						<li class=""><a href="#four">four</a></li>
					</ul>
				</li>
				<li class=""><a href="#five">five</a></li>
			</ul>
		</div>
	</nav>
	<div class="col-md-10 col-xs-9">
		<div data-spy="scroll" id="scroll-body" data-target="#nav-slide" data-offset="0" class="scrollspy-example">

			<dl class="dl-horizontal text-left">
				<dt></dt>
				<dd><h4 id="fat">@zhuxiaoya</h4></dd>
				<dt></dt>
				<dd><img src="img/lovenote.jpg" class="img-responsive" alt=""></dd>
				<dt>Description</dt>
				<dd>A Description list is perfect for defining terms</dd>
				<dt>Lorem</dt>
				<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, vel, harum voluptatibus ex enim asperiores ducimus repellendus porro aliquam nisi dolores quia adipisci sint fuga velit eum placeat sapiente delectus.</dd>
			</dl>
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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, commodi, ex rerum iusto et cum labore recusandae obcaecati atque deleniti alias porro eaque quod veritatis necessitatibus perferendis odio ullam nobis ducimus cupiditate saepe reiciendis minima sed molestiae id perspiciatis corporis tempore asperiores ea sit temporibus sint aliquam hic. Minima, perspiciatis officiis accusantium nihil ad nemo. Dignissimos, repudiandae, molestiae quidem doloribus animi nihil iste a ipsa ullam deserunt vitae nulla nobis reprehenderit fugit reiciendis voluptate atque. Reprehenderit, porro, aspernatur, hic, ipsam repellendus suscipit aut dignissimos accusantium adipisci eius sunt obcaecati labore officiis natus itaque quos nihil minima quo saepe iste facilis!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, dolorum, aliquam eius id cum amet itaque reprehenderit beatae soluta a dicta at corporis ab excepturi et minus dolor pariatur accusantium doloribus assumenda obcaecati nulla reiciendis aut architecto possimus impedit esse ratione. Molestiae, consequuntur laborum aspernatur dolor ipsa labore repudiandae sapiente iusto quia vero! Itaque, nihil autem nesciunt quos doloribus quo tenetur modi porro odio labore cupiditate eligendi harum facilis deserunt commodi molestiae dignissimos deleniti fugiat voluptates incidunt quibusdam esse sapiente repellat sint odit ducimus voluptatum vel! Pariatur, odio, non amet natus dolorem quasi provident cum maxime. Dignissimos, voluptatem nostrum impedit!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, aperiam, quasi illum necessitatibus iusto quibusdam natus aliquid dicta voluptas amet repellendus architecto. Qui modi neque quisquam rerum? Nam, a, nisi, aperiam eligendi libero vitae at ratione tempore sit eaque ipsam voluptas non voluptatibus itaque facere magni excepturi repudiandae suscipit soluta sint eos et tempora reiciendis perferendis ea. Harum, consequuntur labore voluptate distinctio ipsam atque eaque temporibus ex similique ab optio sapiente ad at quaerat fuga voluptatum culpa laboriosam maxime reprehenderit expedita soluta aperiam deserunt tempore nihil quos assumenda non veniam aut laborum a! Laboriosam, veritatis, iste iure est delectus dicta pariatur dolor. Consequuntur, vel, non illum corporis incidunt eius natus in explicabo accusantium modi soluta deleniti sed nulla reprehenderit ratione atque dicta quod unde ducimus alias dolore voluptatibus obcaecati. Illum, temporibus, id, assumenda ex minima quo aut voluptas quam totam nostrum sit rem cumque nulla quasi corrupti qui officia consectetur quibusdam quod facilis. A, ipsum, fuga, culpa excepturi doloribus dicta labore laudantium delectus assumenda sed nam cumque nulla atque facilis sunt nihil obcaecati ea repellat dignissimos reprehenderit quia quasi nisi neque consequuntur quaerat doloremque recusandae ipsa odio omnis modi reiciendis pariatur ad sint laborum optio officiis corrupti! Numquam, sunt, deserunt distinctio ducimus libero consectetur laboriosam perferendis doloribus beatae magni earum cumque placeat sit soluta dolor debitis sed cum ullam voluptas quaerat aut eveniet quam modi maiores ex natus odio error id cupiditate sint! Dolor, incidunt, fugiat ipsum unde porro ad labore harum animi beatae velit architecto laboriosam a blanditiis nobis expedita corporis error sapiente quod consectetur numquam assumenda alias necessitatibus autem vel et nisi repudiandae doloribus deserunt officiis vitae itaque rerum possimus mollitia aliquam eos minus accusamus optio. Facere, possimus, doloremque et ipsa quisquam at fugit voluptas laboriosam laudantium nulla atque explicabo consequuntur sed odio odit minima quos repudiandae harum!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, reprehenderit, mollitia fugit possimus eius quia deserunt eveniet modi eum beatae? Iusto, porro, ab, neque libero quam nihil consequatur consequuntur cum facilis labore sunt necessitatibus veritatis beatae doloribus voluptas est suscipit enim doloremque inventore fugit dolorem sit eveniet hic deserunt nisi molestias nam voluptatibus fuga velit culpa repellat ipsa sed reiciendis! Ullam, porro, iusto, repudiandae sint reiciendis libero quasi vel delectus odit labore consequuntur adipisci illo doloribus aperiam nihil perferendis dolorem beatae error quis pariatur nam necessitatibus obcaecati! Rem, ullam, dolores, eos, neque numquam consequatur corporis libero nulla doloremque blanditiis delectus voluptates perferendis magni rerum harum et inventore provident possimus enim sed! Culpa, voluptatum, vero, omnis soluta incidunt aut deleniti voluptates reprehenderit laborum eius tenetur ratione consectetur at facilis pariatur eos et natus eum magni hic corporis ad ullam iusto voluptas debitis itaque expedita. Nostrum, cupiditate pariatur culpa eum aspernatur perferendis assumenda! Eligendi, facilis, sequi aliquam est quasi eos nisi non maiores incidunt ipsum ut suscipit perferendis nulla odit molestias. Illo, saepe, ex id error commodi reiciendis enim aliquid ipsam! Enim, deleniti, quos, minus veritatis blanditiis suscipit quasi incidunt fuga amet iusto cumque quia harum reiciendis dolorum voluptates itaque debitis! Ipsam!</p>
		</div>
	</div>
</div>
<script>

</script>
@stop