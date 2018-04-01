<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name', 'NutriGO') }} | Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href = "{{asset('img/brand-icon.png')}}" rel="shortcut icon" type="image">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
	h1.page-header {
		margin-top: -5px;
	}
	.navbar-brand{
		float: left;
		max-height: 55px;
		padding: 0 15px 5px;
	}

	.navbar-brand img
	{
		margin-top: 3px;
		max-height: 100%;
	}

	.sidebar {
		padding-left: 0;
	}

	.main-container {
		background: #FFF;
		padding-top: 15px;
		margin-top: -20px;
	}

	.footer {
		width: 100%;
	}

	:focus {
		outline: none;
	}

	.side-menu {
		position: relative;
		width: 100%;
		height: 100%;
		margin-bottom: -100%; /* any large number will do */
		padding-bottom: 100%;
		background-color: #f8f8f8;
		border-right: 1px solid #e7e7e7;
	}
	.side-menu .navbar {
		border: none;
	}
	.side-menu .navbar-header {
		width: 100%;
		border-bottom: 1px solid #e7e7e7;
	}
	.side-menu .navbar-nav .active a {
		background-color: transparent;
		margin-right: -1px;
		border-right: 5px solid #e7e7e7;
	}
	.side-menu .navbar-nav li {
		display: block;
		width: 100%;
		border-bottom: 1px solid #e7e7e7;
	}
	.side-menu .navbar-nav li a {
		padding: 15px;
	}
	.side-menu .navbar-nav li a .glyphicon {
		padding-right: 10px;
	}
	.side-menu #dropdown {
		border: 0;
		margin-bottom: 0;
		border-radius: 0;
		background-color: transparent;
		box-shadow: none;
	}
	.side-menu #dropdown .caret {
		float: right;
		margin: 9px 5px 0;
	}
	.side-menu #dropdown .indicator {
		float: right;
	}
	.side-menu #dropdown > a {
		border-bottom: 1px solid #e7e7e7;
	}
	.side-menu #dropdown .panel-body {
		padding: 0;
		background-color: #f3f3f3;
	}
	.side-menu #dropdown .panel-body .navbar-nav {
		width: 100%;
	}
	.side-menu #dropdown .panel-body .navbar-nav li {
		padding-left: 15px;
		border-bottom: 1px solid #e7e7e7;
	}
	.side-menu #dropdown .panel-body .navbar-nav li:last-child {
		border-bottom: none;
	}
	.side-menu #dropdown .panel-body .panel > a {
		margin-left: -20px;
		padding-left: 35px;
	}
	.side-menu #dropdown .panel-body .panel-body {
		margin-left: -15px;
	}
	.side-menu #dropdown .panel-body .panel-body li {
		padding-left: 30px;
	}
	.side-menu #dropdown .panel-body .panel-body li:last-child {
		border-bottom: 1px solid #e7e7e7;
	}
	.side-menu #search-trigger {
		background-color: #f3f3f3;
		border: 0;
		border-radius: 0;
		position: absolute;
		top: 0;
		right: 0;
		padding: 15px 18px;
	}
	.side-menu .brand-name-wrapper {
		min-height: 50px;
	}
	.side-menu .brand-name-wrapper .navbar-brand {
		display: block;
	}
	.side-menu #search {
		position: relative;
		z-index: 1000;
	}
	.side-menu #search .panel-body {
		padding: 0;
	}
	.side-menu #search .panel-body .navbar-form {
		padding: 0;
		padding-right: 50px;
		width: 100%;
		margin: 0;
		position: relative;
		border-top: 1px solid #e7e7e7;
	}
	.side-menu #search .panel-body .navbar-form .form-group {
		width: 100%;
		position: relative;
	}
	.side-menu #search .panel-body .navbar-form input {
		border: 0;
		border-radius: 0;
		box-shadow: none;
		width: 100%;
		height: 50px;
	}
	.side-menu #search .panel-body .navbar-form .btn {
		position: absolute;
		right: 0;
		top: 0;
		border: 0;
		border-radius: 0;
		background-color: #f3f3f3;
		padding: 15px 18px;
	}
	/* Main body section */
	.side-body {
		margin-left: 310px;
	}

	#hidden-article{
		

	}



	/* small screen */
	@media (max-width: 768px) {
		.side-menu {
			position: relative;
			width: 100%;
			height: 0;
			border-right: 0;
		}

		.side-menu .navbar {
			z-index: 999;
			position: relative;
			height: 0;
			min-height: 0;
			background-color:none !important;
			border-color: none !important;
		}
		.side-menu .brand-name-wrapper .navbar-brand {
			display: inline-block;
		}
		/* Slide in animation */
		@-moz-keyframes slidein {
			0% {
				left: -300px;
			}
			100% {
				left: 10px;
			}
		}
		@-webkit-keyframes slidein {
			0% {
				left: -300px;
			}
			100% {
				left: 10px;
			}
		}
		@keyframes slidein {
			0% {
				left: -300px;
			}
			100% {
				left: 10px;
			}
		}
		@-moz-keyframes slideout {
			0% {
				left: 0;
			}
			100% {
				left: -300px;
			}
		}
		@-webkit-keyframes slideout {
			0% {
				left: 0;
			}
			100% {
				left: -300px;
			}
		}
		@keyframes slideout {
			0% {
				left: 0;
			}
			100% {
				left: -300px;
			}
		}
		/* Slide side menu*/
		/* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
		.side-menu-container > .navbar-nav.slide-in {
			-moz-animation: slidein 300ms forwards;
			-o-animation: slidein 300ms forwards;
			-webkit-animation: slidein 300ms forwards;
			animation: slidein 300ms forwards;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
		}
		.side-menu-container > .navbar-nav {
			/* Add position:absolute for scrollable menu -> see top comment */
			position: fixed;
			left: -300px;
			width: 300px;
			top: 43px;
			height: 100%;
			border-right: 1px solid #e7e7e7;
			background-color: #f8f8f8;
			overflow: auto;
			-moz-animation: slideout 300ms forwards;
			-o-animation: slideout 300ms forwards;
			-webkit-animation: slideout 300ms forwards;
			animation: slideout 300ms forwards;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
		}
		@-moz-keyframes bodyslidein {
			0% {
				left: 0;
			}
			100% {
				left: 300px;
			}
		}
		@-webkit-keyframes bodyslidein {
			0% {
				left: 0;
			}
			100% {
				left: 300px;
			}
		}
		@keyframes bodyslidein {
			0% {
				left: 0;
			}
			100% {
				left: 300px;
			}
		}
		@-moz-keyframes bodyslideout {
			0% {
				left: 300px;
			}
			100% {
				left: 0;
			}
		}
		@-webkit-keyframes bodyslideout {
			0% {
				left: 300px;
			}
			100% {
				left: 0;
			}
		}
		@keyframes bodyslideout {
			0% {
				left: 300px;
			}
			100% {
				left: 0;
			}
		}
		/* Slide side body*/
		.side-body {
			margin-left: 5px;
			margin-top: 70px;
			position: relative;
			-moz-animation: bodyslideout 300ms forwards;
			-o-animation: bodyslideout 300ms forwards;
			-webkit-animation: bodyslideout 300ms forwards;
			animation: bodyslideout 300ms forwards;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
		}
		.body-slide-in {
			-moz-animation: bodyslidein 300ms forwards;
			-o-animation: bodyslidein 300ms forwards;
			-webkit-animation: bodyslidein 300ms forwards;
			animation: bodyslidein 300ms forwards;
			-webkit-transform-style: preserve-3d;
			transform-style: preserve-3d;
		}
		/* Hamburger */
		.navbar-toggle-sidebar {
			border: 0;
			float: left;
			padding: 18px;
			margin: 0;
			border-radius: 0;
			background-color: #f3f3f3;
		}
		/* Search */
		#search .panel-body .navbar-form {
			border-bottom: 0;
		}
		#search .panel-body .navbar-form .form-group {
			margin: 0;
		}
		.side-menu .navbar-header {
			/* this is probably redundant */
			position: fixed;
			z-index: 3;
			background-color: #f8f8f8;
		}
		/* Dropdown tweek */
		#dropdown .panel-body .navbar-nav {
			margin: 0;
		}
	}
	/* The Close Button */
	.close {
		color: #aaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: black;
		text-decoration: none;
		cursor: pointer;
	}

	.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		/*z-index: 0; Sit on top */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}


	/* Modal Body */
	.modal-body {
		padding: 2px 16px;
		margin-bottom: 5%;
		margin-top: 1%;

	}

	/* Modal Content */
	.modal-content {
		position: relative;
		background-color: #fefefe;
		margin: 10% 10%;
		padding: 0;
		border: 1px solid #888;
		width: 80%;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		animation-name: animatetop;
		animation-duration: 0.4s;
	}

	/* Add Animation */
	@keyframes animatetop {
		from {top: -300px; opacity: 0}
		to {top: 0; opacity: 1}
	}


</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
					MENU
				</button>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/home"><img src="{{asset('img/brand.png')}}"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!--<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>-->
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="/logout"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
							Logout</a>

							<form id="logout-form" action="/logout" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
	<div class="col-md-2 sidebar">
		<div class="row">
			<!-- uncomment code for absolute positioning tweek see top comment in css -->
			<div class="absolute-wrapper"> </div>
			<!-- Menu -->
			<div class="side-menu">
				<nav class="navbar navbar-default" role="navigation">
					<!-- Main Menu -->
					<div class="side-menu-container">
						<ul class="nav navbar-nav">
							<li><a href="/admin/user"><span class="glyphicon glyphicon-user"></span> Member</a></li>
							<li><a href="/admin/article"><span class="glyphicon glyphicon-cloud"></span> Article </a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>  		
	</div>
	<div  class="col-md-10 content">
		@if(isset($user))
		<div class="panel panel-default">
			<div class="panel-heading">
				Dashboard
			</div>
			<div class="panel-body">
				<h2> Atur Member</h2>
				<div>
					{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis consectetur cursus.
						Integer ligula nisl, interdum in tempor ut, mattis vitae lorem. Quisque a enim efficitur, interdum metus eu, sagittis odio.
						Sed vitae massa ligula. In in nunc commodo metus consequat maximus eget in sapien.
						Donec et dolor rhoncus, dictum risus eu, mattis quam.
					</p> --}}
					<form action="#" method="post" name="form-table-article">
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Tinggi_Badan</th>
									<th>Berat_Badan</th>
									<th>Usia</th>
									<th>Is_Admin</th>
									<th>Pilihan</th>
								</tr>
							</thead>
							<tbody>
								
								@foreach($user as $data)
								<tr>
									<td>{{$data->id}}</td>
									<td>{{$data->nama}}</td>
									<td>{{$data->email}}</td>
									<td>{{$data->gender}}</td>
									<td>{{$data->tinggi_badan}}</td>
									<td>{{$data->berat_badan}}</td>
									<td>{{$data->usia}}</td>
									<td>{{$data->is_admin}}</td>
									<td><a class="btn btn-danger glyphicon glyphicon-trash" href="/member/delete/{{$data->id}}" role="submit"></a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<form>

						</div>
					</div>
				</div>

				@elseif(isset($articles))
				<div class="panel panel-default">

					<div class="panel-heading">
						Dashboard
					</div>
					<div class="panel-body">
						<h2> Atur Article</h2>
						<div>
							<form action="#" method="post" name="form-table-article">
								<table class="table">
									<thead>
										<tr>
											<th>ID</th>
											<th>Judul</th>
											<th>Deskripsi</th>
											<th>Pilihan</th>
										</tr>
									</thead>
									<tbody>
										@foreach($articles as $article)
										<tr>
											<td>{{$article->id}}</td>
											<td>{{$article->judul}}</td>
											<td>{{$article->deskripsi}}</td>
											<td>
												<a class="btn btn-danger glyphicon glyphicon-trash" href="/article/delete/{{$article->id}}" role="submit"></a>
												<a  id="myBtn" class="btn btn-success glyphicon glyphicon-pencil" href="/admin/update/{{$article->id}}" role="submit"></a>
											</td>
										</tr>
										@endforeach
									</tbody>
									<tr><td><a class="btn btn-info" href="/admin/insert">Tambah Article</a></td></tr>
								</table>
								<form>
								</div>
							</div>
						</div>
						@endif
					</div>

				</div>
			</div>

		</div>
		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on the button, open the modal
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}



	</script>

<!--
			</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
  			</p>
  		</footer>
  	</div>
  -->
</body>
</html>
