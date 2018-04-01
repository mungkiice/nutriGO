<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid ">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="{{asset('img/brand.png')}}"></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="/">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/formInput">Kalkulator Berat Ideal</a></li>
						<li class="dropdown-divider"></li>
						<li><a href="/nutrisi">Kalkulator Nutrisi</a></li>
						<li class="dropdown-divider"></li>
						<li><a href="/polaMakan">Pola Makan</a></li>
					</ul>
				</li>
				@if(Auth::guest())
				<li><a href="/login">Login</a></li>
				<li><a href="/register">Register</a></li>
				@else
				<li class="dropdown">
					<a href="#"  class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->nama}}<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/profile/{{Auth::user()->id}}">My Profile</a></li>
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
			@endif
		</ul>
	</div>
</div>
</nav>