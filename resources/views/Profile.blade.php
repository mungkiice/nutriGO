<!DOCTYPE html>
<HTML>
<head>
	<title>{{ config('app.name', 'NutriGO') }} | MyProfile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href = "{{asset('img/brand-icon.png')}}" rel="shortcut icon" type="image">
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



	.profile-header-img {
		padding: 54px;
	}

	.profile-header-img > img.img-circle {
		width: 120px;
		height: 120px;
		border: 2px solid #51D2B7;
	}

	.profile-header {
		margin-top: 43px;
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

	#test{
		height: 100%;
	}
	img{
		max-height: 100%;
		max-width: 100%;
	}

	#left{
		margin-top: 15%;
		margin-bottom: 10%;
	}

	#right{
		background-color: white;
	}


	hr.style13 {
		height: 10px;
		border: 0;
		box-shadow: 0 10px 10px -10px #8c8b8b inset;

	}


	.table > thead{
		background-color: #f5f5f5;
	}

	#data-diri > table, th, tr, td{
		border: none !important;

	}
	#data-diri{
		border: none;
		width: 50%;
	}
	#data-diri > thead{
		background-color: white;
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
		@include('layouts.nav')

	</header>

	<div id="left" class="container" style="margin-top: 10%;">
		<div class="row">
			<div id="test" class="col-md-4">
				<img src="{{asset('img/profile.png')}}">
			</div>
			<div id="right" class="col-md-8">
				<h2>Halo, {{$user->nama}}!</h2>
				<p><b><i>"Kebugaran fisik bukan sekedar hal yang paling penting bagi kesehatan tubuh, tetapi adalah dasar dari segala aktivitas intelektual yang dinamis dan kreatif" -John F. Kennedy</i></b></p>

				<table border="0" id="data-diri" class="panel panel-default panel-table table">
					<thead>
						<th></th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>{{$user->nama}}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>{{$user->email}}</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>{{$user->gender}}</td>
						</tr>
						<tr>
							<td>Tinggi_Badan</td>
							<td>:</td>
							<td>{{$user->tinggi_badan}} cm</td>
						</tr>
						<tr>
							<td>Berat Badan</td>
							<td>:</td>
							<td>{{$user->berat_badan}} cm</td>
						</tr>
						<tr>
							<td>Usia</td>
							<td>:</td>
							<td>{{$user->usia}} tahun</td>
						</tr>
					</tbody>
				</table>
				<button type="button" class="btn btn-outline-info" data-target="#hidden-history" data-toggle="collapse">
					<a style="text-decoration: none; color: black;" href="/profile/history/{{$user->id}}">Lihat Riwayat</a></button>
					@if(isset($history))
					<br>
					<hr class="style13">
					<div class="row">
						<div class="col-md-6">
							<table class="panel panel-default panel-table table">
								<thead>
									<tr>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tanggal:</td>
										<td>22/2/17</td>
									</tr>
									<tr>
										<td>Tinggi Badan:</td>
										<td>{{$history->tinggi_badan}} cm</td>
									</tr>
									<tr>
										<td>Berat Badan:</td>
										<td>{{$history->berat_badan}} kg</td>
									</tr>
								</tbody>
								<thead>
									<tr>
										<th>Pola Makanan</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									@foreach($history->pola->makanan as $data)
									<tr>
										<td>{{$data->nama}}</td>
										<td> 100 g</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					@endif
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
