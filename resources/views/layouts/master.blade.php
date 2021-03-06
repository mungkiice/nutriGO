<!DOCTYPE html>
<head>
	<title>{{ config('app.name') }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <meta name="csrf-token" content="{{ csrf_token() }}">
	<style>

	.navbar{
		margin-bottom: 0;
		border-radius: 0;
		background-color:  #2ecc71;
		color: #fff;
		padding: 1% 0;
		font-size: 1.4em;
		border: 0;
	}
	.navbar-brand{
		float: left;
		max-height: 55px;
		padding: 0 15px 5px;
	}
	.navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover {
		color: #fff;
		background-color: #2ecc71;
	}
	.navbar-inverse .navbar-nav li a{
		color: #d5d5d5;
	}


	.dropdown-menu{
		border-color: #ecf0f1;
		font-size:1em;
		text-align: center;
	}


	html,
	body,
	header,
	#intro {
		height: 100%;
	}

	#intro {
		background: url("/img/cover.png")no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}





	.carousel-caption{
		bottom: 50%;
		transform: translateY(-50%);
		transform: translateX(-50%);
		text-transform: uppercase;

	}




		/* Carousel */

	#quote-carousel {
		padding: 0 10px 30px 10px;
		margin-top: 30px;
		/* Control buttons  */
		/* Previous button  */
		/* Next button  */
		/* Changes the position of the indicators */
		/* Changes the color of the indicators */
	}
	#quote-carousel .carousel-control {
		background: none;
		color: #CACACA;
		font-size: 2.3em;
		text-shadow: none;
		margin-top: 30px;
	}
	#quote-carousel .carousel-control.left {
		left: -60px;
	}
	#quote-carousel .carousel-control.right {
		right: -60px;
	}
	#quote-carousel .carousel-indicators {
		right: 50%;
		top: auto;
		bottom: 0px;
		margin-right: -19px;
	}
	#quote-carousel .carousel-indicators li {
		width: 50px;
		height: 50px;
		margin: 5px;
		cursor: pointer;
		border: 4px solid #CCC;
		border-radius: 50px;
		opacity: 0.4;
		overflow: hidden;
		transition: all 0.4s;
	}
	#quote-carousel .carousel-indicators .active {
		background: #333333;
		width: 128px;
		height: 128px;
		border-radius: 100px;
		border-color: #f33;
		opacity: 1;
		overflow: hidden;
	}
	.carousel-inner {
		min-height: 300px;
	}
	.item blockquote {
		border-left: none;
		margin: 0;
	}
	.item blockquote p:before {
		content: "\f10d";
		font-family: 'Fontawesome';
		float: left;
		margin-right: 10px;
	}



	.btn{
		font-size: 18px;
		color: #fff;
		padding: 12px 22px;
		background-color: #2ecc71;
		border: 2px solid #fff;
	}

	.container{
		margin: 4% auto;

	}


	#icon{
		max-width:200px;
		margin: 1% auto;
	}


	footer{
		width: 100%;
		background-color: #2ecc71;
		padding: 5%;
		color: #fff;
	}

	.fa{
		padding: 15px;
		font-size: 25px;
		color: #fff;
	}

	.fa:hover{
		color: #d5d5d5;
		text-decoration: none;
	}

	@media(max-width: 900px){
		.fa{
			font-size: 20px;
			padding: 10px;
		}
	}

	@media (max-width: 600px){
		.carousel-caption{
			display: none;
		}
		#icon{
			max-width: 150px;
		}
		h2{
			font-size: 1.7em;
		}
	}

	</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="{{asset('img/brand.png')}}"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.html">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="kalkulator-berat.html">Kalkulator Berat Ideal</a></li>
										<li class="dropdown-divider"></li>
										<li><a href="#">Kalkulator Nutrisi</a></li>
										<li class="dropdown-divider"></li>
										<li><a href="#">Diet Planner</a></li>
									</ul>
							</li>
							<li class="dropdown">
								<a href="login.html"  class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="login.html">Login</a></li>
									</ul>
							</li>
					</ul>
				</div>
			</div>
		</nav>

		<div  id="intro" class="view">

			<div class="full-bg-img">



			</div>

		</div>
	</header>
	<!--
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			<img src="img/cover.png">
			<div class="carousel-caption">
				<h1>Dengan kami,
				semua menjadi lebih mudah</h1>
				<br>
				<button type="button" class="btn bt-default">Go!!!</button>
			</div>
		</div>
	</div>

	<!-- CAROUSEL
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			<img src="img/cover.png">
			<div class="carousel-caption">
				<h1>Hellow guys</h1>
				<br>
				<button type="button" class="btn bt-default">Go!!!</button>
			</div>
			</div>
			<div class="item">
			<img src="img/p3.jpg">
			</div>
			<div class="item">
			<img src="img/p5.jpg">
			</div>
		</div>
		<!--start slider controls
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> <!-- end of carousel

	CAROUSEL-->


	<div class="container text-center">
		<h2>What We Offer</h2>
		<br>
		<div class="row">
			<div class="col-sm-4">
			<img src="{{asset('img/weight-calculator.png')}}" id="icon">
			<h4>Ideal Weight Calculator</h4>
			<p>Hitung Berat badan ideal anda dengan kami dan dapatkan tubuh yang sehat </p>

			</div>
			<div class="col-sm-4">
			<img src="{{asset('img/nutri-calculator.png')}}" id="icon">
			<h4>Nutrition Calculator</h4>
			<p></p>

			</div>
			<div class="col-sm-4">
			<img src="{{asset('img/css3.png')}}" id="icon">
			<h4>Diet Planner</h4>
			<p></p>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>Here's the blakhjsdliad</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis consectetur cursus.
					Integer ligula nisl, interdum in tempor ut, mattis vitae lorem. Quisque a enim efficitur, interdum metus eu, sagittis odio.
					Sed vitae massa ligula. In in nunc commodo metus consequat maximus eget in sapien.
					Donec et dolor rhoncus, dictum risus eu, mattis quam.
					Pellentesque a risus at risus feugiat convallis quis vitae nisi. Cras facilisis ac leo faucibus luctus. Vivamus neque tellus, dapibus non pretium sed, vehicula sed turpis.
					Nullam tellus justo, imperdiet vel arcu pulvinar, cursus faucibus ligula. Suspendisse at aliquet odio, sit amet auctor leo.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis consectetur cursus.
					Integer ligula nisl, interdum in tempor ut, mattis vitae lorem. Quisque a enim efficitur, interdum metus eu, sagittis odio.
					Sed vitae massa ligula. In in nunc commodo metus consequat maximus eget in sapien.
					Donec et dolor rhoncus, dictum risus eu, mattis quam.
					Pellentesque a risus at risus feugiat convallis quis vitae nisi. Cras facilisis ac leo faucibus luctus. Vivamus neque tellus, dapibus non pretium sed, vehicula sed turpis.
					Nullam tellus justo, imperdiet vel arcu pulvinar, cursus faucibus ligula. Suspendisse at aliquet odio, sit amet auctor leo.</p>
			</div>
			<div class="col-md-6">
				<img src="{{asset('img/bootstrap2.jpg')}}" class="img-responsive">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6 cl-xs-12">
				<h4>Here's the blakhjsdliad</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis consectetur cursus.
					Integer ligula nisl, interdum in tempor ut, mattis vitae lorem. Quisque a enim efficitur, interdum metus eu, sagittis odio.
					Sed vitae massa ligula. In in nunc commodo metus consequat maximus eget in sapien.
					Donec et dolor rhoncus, dictum risus eu, mattis quam.
				</p>
			</div>
			<div class="col-lg-3 col-sm-6 cl-xs-12">
				<img src="{{asset('img/sass.png')}}" class="img-responsive">
			</div>
			<div class="col-lg-3 col-sm-6 cl-xs-12">
				<h4>Here's the blakhjsdliad</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis consectetur cursus.
					Integer ligula nisl, interdum in tempor ut, mattis vitae lorem. Quisque a enim efficitur, interdum metus eu, sagittis odio.
					Sed vitae massa ligula. In in nunc commodo metus consequat maximus eget in sapien.
					Donec et dolor rhoncus, dictum risus eu, mattis quam.
				</p>
			</div>
			<div class="col-lg-3 col-sm-6 cl-xs-12">
				<img src="{{asset('img/less.png')}}" class="img-responsive">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<h4><a href="#hidden" data-toggle="collapse">Care to know more?</a></h4>
			<div id="hidden" class="collapse">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis consectetur cursus.
					Integer ligula nisl, interdum in tempor ut, mattis vitae lorem. Quisque a enim efficitur, interdum metus eu, sagittis odio.
					Sed vitae massa ligula. In in nunc commodo metus consequat maximus eget in sapien.
					Donec et dolor rhoncus, dictum risus eu, mattis quam.
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis consectetur cursus.
					Integer ligula nisl, interdum in tempor ut, mattis vitae lorem. Quisque a enim efficitur, interdum metus eu, sagittis odio.
					Sed vitae massa ligula. In in nunc commodo metus consequat maximus eget in sapien.
					Donec et dolor rhoncus, dictum risus eu, mattis quam.
				</p>
			</div>
		</div>
	</div>

	<div class="container">
	<div class="row-fluid">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
	</div>


	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-4">
				<h3>Contact Us</h3>
				<br>
				<h4>Our address and contact info here.</h4>
				</div>
			<div class="col-sm-4">
				<h3>Connect with us!</h3>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-linkedin"></a>
			</div>
			<div class="col-sm-4">
				<img src="{{asset('img/brand-icon.png')}}" class="icon">
			</div>
		</div>

</body>
</html>
