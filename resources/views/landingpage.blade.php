{{-- @extends('layouts.app') --}}
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
    <title>JOBIT</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">JOBIT!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> -->
            <a class="nav-item nav-link" href="{{ url('/profile') }}">Blog</a>
            <a class="nav-item nav-link" href="#">Bahasa</a>
            <a class="nav-item nav-link " href="#">Sign in</a>
          </div>
        </div>
    </div>
    </nav>

    <!-- Akhir Navbar -->
    <!-- jumbrotron -->
    <div class="jumbotron jumbotron-fluid">
  <div class="container1">
    <h1 class="display-4">Discover your dream job!</h1>
    <p class="lead">lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
    <div class="input-group ">
      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />
      <button type="button" class="btn btn-outline-primary">search</button>
    </div>
  </div>
  </div>
    <!-- akhir Jumbrotron -->

    <!-- Rekomendasi pekerjaan -->
    <div class="row">
      <div class="col">
        <h3 class="display-4 fontrek">Rekomendasi Pekerjaan</h3>
        <p class="lead fontmini">Rekomandasi pejerjaan yang mungkin cocok dengan anda?</p>
      </div>
    </div>


    
    <!-- <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 recomend">
          <div class="row">
            <h4 class="display-4 fontrek">FOTO REKOMENDASI PEKERJAAN</h3>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/shopee.png" style="width:100%">
              <P><B>IT SUPPORT</B></P>
              <div class="caption">
                <p>PT Shopee International Indonesia</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/Data.png" style="width:100%">
              <div class="caption">
                <p><b>UI/UX DESIGNER</b></p>
                <p>PT Jasa Teknologi Informasi Jakarta Raya, Indonesia</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/haruka.jpg"  style="width:100%">
              <div class="caption">
                <p><b>UI/UX DESIGNER</b></p>
                <p>PT Haruka Evolusi Digital Jakarta Selatan, Indonesia</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/pendanaan.jpg"  style="width:100%">
              <div class="caption">
                <p><b>IT SUPPORT</b></p>
                <p>PT Pendanaan Teknologi Nusa Tangerang, Indonesia</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br><br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/Gojek.png" style="width:100%">
              <div class="caption">
                <p><b>IT SERVICE</b></p>
                <p>PT Gojek Indonesia</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/ovo.jpg" alt="Nature" style="width:100%">
              <div class="caption">
                <p><b>IT SUPPORT</b></p>
                <p>PT Visionet Internasional</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/Link.png" alt="Fjords" style="width:100%">
              <div class="caption">
                <p><b>UI/UX DESIGNER</b></p>
                <p>PT Fintek Karya Nusantara</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/airi.jpg" alt="Fjords" style="width:100%">
              <div class="caption">
                <p><b>UI/UX DESIGNER</b></p>
                <p>PT Airmas International Surabaya, Indonesia</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Rekomendasi Pekerjaan -->
<br><br><br><br><br>
<br><br><br>
    <!-- Kategori Pekerjaan -->
    <div class="row">
      <div class="col">
        <h3 class="display-4 fontrek">Kategori Pekerjaan</h3>
        <p class="lead fontmini">Discover jobs that best match your interest</p>
      </div>
    </div>


    
    <!-- <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 recomend">
          <div class="row">
            <h4 class="display-4 fontrek">FOTO Kategori PEKERJAAN</h3>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/system.png" style="width:100%">
              <div class="caption">
                <br>
                <P><B>IT SUPPORT</B></P>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/itsupport.png" style="width:100%">
              <div class="caption">
                <br>
                <p><b>UI/UX DESIGNER</b></p>
                <br>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/mobile.png"  style="width:100%">
              <div class="caption">
                <br>
                <p><b>UI/UX DESIGNER</b></p>
                <br>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/web.png"  style="width:100%">
              <div class="caption">
                <br>
                <p><b>IT SUPPORT</b></p>
                <br>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br><br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/network.png" style="width:100%">
              <div class="caption">
                <br>
                <p><b>IT SERVICE</b></p>
                <br>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/UI.png" alt="Nature" style="width:100%">
              <div class="caption">
                <br>
                <p><b>IT SUPPORT</b></p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/UX.png" alt="Fjords" style="width:100%">
              <div class="caption">
                <br>
                <p><b>UI/UX DESIGNER</b></p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail img">
              <img class="imgrekomendasi" src="img/cloud.png" alt="Fjords" style="width:100%">
              <div class="caption">
                <br>
                <p><b>UI/UX DESIGNER</b></p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <!-- Akhir Kategori Pekerjaan -->
<br><br><br>
<br><br><br>
    <!-- Footer -->
    <footer class="text-center text-lg-start" style="background-color: #1E385A; color : #FFFFFF">
      <!-- Grid container -->
      <div class="container p-4">
          <!--Grid row-->
          <div class="row">
          <!--Grid column-->
          <div class="col-lg-4 col-md-10 mb-4 mb-md-0">
              <h3 class="text-uppercase">JobIT</h3>
              <h5>Discover Your Dream Job!</h5>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-4 mb-2 mb-md-0">
              <h6 class="text">About</h6>
              <h6 class="text">Career</h6>
              <h6 class="text">Internships</h6>
              <h6 class="text">Blog</h5>
              <h6 class="text">Contact</h6>
              <ul class="list-unstyled mb-0">
              <li>
                  <a href="#" class="text-light">
                      <i id="social" class="fa fa-instagram fa-1x"></i>
                  </a> &emsp;
                  <a href="#" class="text-light">
                      <i id="social" class="fa fa-facebook fa-1x"></i>
                  </a> &emsp;
                  <a href="#" class="text-light">
                      <i id="social" class="fa fa-twitter fa-1x"></i>
                  </a> &emsp;
                  <a href="#" class="text-light">
                      <i id="social" class="fa fa-youtube fa-1x"></i>
                  </a> &emsp;
                  <a href="#" class="text-light">
                      <i id="social" class="fa fa-linkedin fa-1x"></i>
                  </a>
              </li>
              </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-5 col-md-8 mb-6 mb-md-0">
              <h5 class="text-uppercase mb-0">Subscribe to our newsletters</h5>
              <div class="mb-3">
                  <input for="email" class="col-form-label" placeholder="example@mail.com" aria-label="Search">
                  <button type="submit" class="btn btn-outline-success text-light" id="subscribe">Subscribe</button>
              </div>
              <ul class="list-unstyled">
              <li>
                  <a href="#!" class="text-light">Term of Use</a> &emsp;
                  <a href="#!" class="text-light">Privacy Policy</a> &emsp;
                  <a href="#!" class="text-light">Report a Problem</a>
              </li>
              </ul>
          </div>
          <!--Grid column-->
          </div>
          <!--Grid row-->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-light" href="#">JobIT</a>
      </div>
      <!-- Copyright -->
      </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>