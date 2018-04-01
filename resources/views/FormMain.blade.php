<!DOCTYPE html>
<HTML>
<head>
  <title>{{ config('app.name', 'NutriGO') }} | Register</title>
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
    font-size: 1.3em;
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

  .container{
    margin: 10% auto;

  }
  .container img{
    max-height: 100%;
    margin: 10% auto;

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
    <div class="col-md-6">
      <img src="img/weight-calculator.png" class="img-responsive">
    </div>
    <div class="col-md-6">
      <h3>Hitung berat badan ideal anda</h3>
      <div class="panel-body">
        <div class="row">
         <div class="col-xs-6">
          <form id="login-form" action="/formInput" method="post" role="form" style="display: block;">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('tinggi_badan') ? ' has-error' : '' }}">
              <label>Tinggi Badan (dalam satuan cm)</label>
              <input type="text" name="tinggi_badan" id="tinggi" tabindex="1" class="form-control" placeholder="" value="">
              @if ($errors->has('tinggi_badan'))
              <span class="help-block">
                <strong>{{ $errors->first('tinggi_badan') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('berat_badan') ? ' has-error' : '' }}">
              <label>Berat Badan (dalam satuan kg)</label>
              <input type="text" name="berat_badan" id="berat" tabindex="2" class="form-control" placeholder="">
              @if ($errors->has('berat_badan'))
              <span class="help-block">
                <strong>{{ $errors->first('berat_badan') }}</strong>
              </span>
              @endif
            </div>

            <div class="form-group">
              <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                <input type="submit" name="berat-submit" id="berat-submit" tabindex="4" class="form-control btn btn-login" value="Hitung">
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


</body>
</html>
