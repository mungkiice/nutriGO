<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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

#body{
  margin-top: 6%;
  margin-bottom: 6%;
}


#art{
  max-width: 100%;

}
  #paragraph{
    margin-top: 1%;

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
    #art{
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
<div id="body" class="container">
  <center>
    
    <div class="row">
      <div class="col-md-12">
        <h1>{{$article->judul}}</h1>
      </div>
    <div class="col-md-12">
      <img src="{{asset('storage/'.$article->foto)}}" id="art">
    </div>
    <div class="col-md-12" id="paragraph">
      <p>{{$article->deskripsi}}</p>
    </div>
</div>
  </center>
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

</body>
</html>
