<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@700&family=Monoton&family=Sansita+Swashed&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Online Taxi Booking</title>
  </head>
  <body>
    <section>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">CED <span class="brandspan">CAB</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
        </div>
    </section>
    <div class="container-fluid">
        <!-- <img src="2.jpeg" alt=""> -->
        <div class="container text-center">
            <h3 class="display-4">Book a City Taxi to your destination in town</h3>
            <p class="headpara">Choose from a range of categories and prices</p>

            <div class="row text-dark">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <span id="price" class="text-danger"></span>
                            <span id="header">CITY TAXI</span>
                            <span id="distance" class="text-danger"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Your everyday travel partner</h5>
                            <h6>AC Cabs for point to point travel</h6>
                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="pickup">PICKUP</label>
                                    </div>
                                    <select class="form-control g" id="pickup">
                                        <option value="">Current</option>
                                        <option value="charbagh">Charbagh</option>
                                        <option value="indira nagar">Indira Nagar</option>
                                        <option value="bbd">BBD</option>
                                        <option value="barabanki">Barabanki</option>
                                        <option value="faizabad">Faizabad</option>
                                        <option value="basti">Basti</option>
                                        <option value="gorakhpur">Gorakhpur</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="drop">DROP</label>
                                    </div>
                                    <select class="form-control g" id="drop">
                                        <option value="">Destination</option>
                                        <option value="charbagh">Charbagh</option>
                                        <option value="indira nagar">Indira Nagar</option>
                                        <option value="bbd">BBD</option>
                                        <option value="barabanki">Barabanki</option>
                                        <option value="faizabad">Faizabad</option>
                                        <option value="basti">Basti</option>
                                        <option value="gorakhpur">Gorakhpur</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="cab">CAB TYPE</label>
                                    </div>
                                    <select class="form-control g" id="cab" onChange="cabType()">
                                    <option value="">Cab</option>
                                        <option value="cedmicro">CedMicro</option>
                                        <option value="cedmini">CedMini</option>
                                        <option value="cedroyal">CedRoyal</option>
                                        <option value="cedsuv">CedSUV</option>
                                    </select>
                                </div>
                                </div>
                                <div class="input-group mb-3" id="luggage">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing">LUGGAGE</span>
                                    </div>
                                    <input type="text" id="lugg" class="form-control" aria-label="Small" placeholder="Enter weight in KG" onkeypress="return checkNum()">
                                </div>
                            </form>
                            <a id="calculate" class="btn w-100">Calculate Fare</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row p-5 firstrow">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3>About</h3>
                    <p class="lead">The quick brown fox jumps over the lazy dog.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 quick-link">
                    <h3 class="text-center">Quick Link</h3>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                    <i class="fa fa-facebook text-light" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <!-- <h3>Social Medial</h3> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.324004854123!2d80.98076291467929!3d26.861445183149744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd0696fc3245%3A0x9719da00b2748496!2sCEDCOSS%20Technologies%20Private%20Limited!5e0!3m2!1sen!2sin!4v1605882825131!5m2!1sen!2sin" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                Copyright &copy; <a class="navbar-brand" href="#">CED <span class="brandspan">CAB</span></a><?php echo date('Y'); ?>
                . All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
