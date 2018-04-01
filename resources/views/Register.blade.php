<!DOCTYPE html>
<head>
	<title>{{ config('app.name', 'NutriGO') }} | Register</title>
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
		font-size: 1.2em;
		border: 0;
	}
	.navbar-brand{
		float: left;
		min-height: 55px;
		padding: 0 15px 5px;
	}
	.navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover {
		color: #fff;
		background-color: #2ecc71;
	}
	.navbar-inverse .navbar-nav li a{
		color: #d5d5d5;
	}


	.panel-login {
		border-color: #ccc;
		-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
		-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
		box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	}
	.panel-login>.panel-heading {
		color: #00415d;
		background-color: #fff;
		border-color: #fff;
		text-align:center;
	}
	.panel-login>.panel-heading a{
		text-decoration: none;
		color: #666;
		font-weight: bold;
		font-size: 15px;
		-webkit-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		transition: all 0.1s linear;
	}
	.panel-login>.panel-heading a.active{
		color: #029f5b;
		font-size: 18px;
	}
	.panel-login>.panel-heading hr{
		margin-top: 10px;
		margin-bottom: 0px;
		clear: both;
		border: 0;
		height: 1px;
		background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
		background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
		background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
		background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	}
	.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
		height: 45px;
		border: 1px solid #ddd;
		font-size: 16px;
		-webkit-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		transition: all 0.1s linear;
	}
	.panel-login input:hover,
	.panel-login input:focus {
		outline:none;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
		border-color: #ccc;
	}
	.btn-login {
		background-color: #59B2E0;
		outline: none;
		color: #fff;
		font-size: 14px;
		height: auto;
		font-weight: normal;
		padding: 14px 0;
		text-transform: uppercase;
		border-color: #59B2E6;
	}
	.btn-login:hover,
	.btn-login:focus {
		color: #fff;
		background-color: #53A3CD;
		border-color: #53A3CD;
	}


	.btn-register {
		background-color: #1CB94E;
		outline: none;
		color: #fff;
		font-size: 14px;
		height: auto;
		font-weight: normal;
		padding: 14px 0;
		text-transform: uppercase;
		border-color: #1CB94A;
	}
	.btn-register:hover,
	.btn-register:focus {
		color: #fff;
		background-color: #1CA347;
		border-color: #1CA347;
	}

	.container{
		margin: 10% auto;

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
	@include('layouts.nav')

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">

							<div class="col-xs-6">
								<a href="#" class="active" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">


								<form id="register-form" action="/register" method="post" role="form" >
									{{csrf_field()}}
									<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
										<label>Nama Lengkap</label>
										<input type="text" name="nama" id="nama" tabindex="1" class="form-control" placeholder="" value="">
										@if ($errors->has('nama'))
										<span class="help-block">
											<strong>{{ $errors->first('nama') }}</strong>
										</span>
										@endif
									</div>
									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
										<label>Email</label>
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="" value="">
										@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
										@endif
									</div>
									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<label>Password</label>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="">
										@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
										@endif
									</div>
									<div class="form-group">
										<label>Konfirmasi Password</label>
										<input type="password" name="password_confirmation" id="confirm-password" tabindex="2" class="form-control" placeholder="">
									</div>

									<div class="form-group">
										<label>Jenis Kelamin</label>
										<select name="gender" default="perempuan" class="form-control">
											<option value="laki-laki">Laki-Laki</option>
											<option value="perempuan">Perempuan</option>
										</select>
										@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
										@endif
									</div>

									<div class="form-group">
										<label>Usia</label>
										<input type="number" name="usia" id="usia" tabindex="1" class="form-control" placeholder="" value="">
										@if ($errors->has('usia'))
										<span class="help-block">
											<strong>{{ $errors->first('usia') }}</strong>
										</span>
										@endif
									</div>

									<div class="form-group">
										<label>Tinggi Badan (dalam satuan cm)</label>
										<input type="number" name="tinggi_badan" id="tinggi-badan" tabindex="1" class="form-control" placeholder="" value="">
										@if ($errors->has('tinggi_badan'))
										<span class="help-block">
											<strong>{{ $errors->first('tinggi_badan') }}</strong>
										</span>
										@endif
									</div>

									<div class="form-group">
										<label>Berat Badan (dalam satuan kg)</label>
										<input type="number" name="berat_badan" id="berat-badan" tabindex="1" class="form-control" placeholder="" value="">
										@if ($errors->has('berat_badan'))
										<span class="help-block">
											<strong>{{ $errors->first('berat_badan') }}</strong>
										</span>
										@endif
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
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
				<img src="img/brand-icon.png" class="icon">
			</div>
		</div>

	</footer>
	<script>
		$(function() {

			$('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
				$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
				$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

		});
	</script>
</body>
</html>
