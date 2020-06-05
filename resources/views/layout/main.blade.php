<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>@yield('title')</title>
    <style>


    .navbar-nav > li{
    margin-left:5px;
    margin-right:5px;
    white-space: nowrap;
  }


      .dropdown:hover>.dropdown-menu {
        display: block;
      }

      .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
          pointer-events: none;
      }

      .btn-daftar{
        background-color: #00beff;
        color:white;
        border: 1px solid #00beff;
        width: 150px;
        height:40px;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        border-radius: 4px;
        display: inline-g
      }

      .btn-login{
        background-color: white;
        color:#00beff;
        border: 1px solid white;
        width: 100px;
        height:40px;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        border-radius: 4px;
      }


      .nav-item{
        display: inline-block;
        position: center;
        padding
      }

      .container-fluid4{
        margin-top:5%;
        background-color:#7a69e4;
        padding: 5px;
      }

      .container-fluid4 p{
        text-align: center;
        color:white;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size:14px;
        margin-top: 1%;
      }

      .container-fluid1 h1{
        text-align: center;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        margin-top: 1%;
        font-size: 30px;

      }

      .container-fluid1{
        margin-top:5%;
        padding-bottom: auto;
        margin-bottom:5%;

      }

      .button2{
        border: 2px solid #00beff;
        width: 150px;
        height:50px;
        color: #00beff;
        background-color:white;
        border-radius: 4px;
        margin-top: 2%;
      }

      .button3{
        border: 2px solid #00beff;
        width: 250px;
        height:50px;
        color: white;
        background-color:#00beff;
        border-radius: 4px;
        margin-top: 2%;
        margin-left: 40%;
      }

      .button1{
        border: 2px solid #00beff;
        color: #00beff;
        background-color:white;
        border-radius: 10px;
        margin-bottom: 3%;
      }

      .caption img{
        margin-bottom: 1%;
      }
      .caption p{
        margin-right: 3%;
        text-align: right;

      }

      .caption1 img{
        margin-bottom: 1%;
      }
      .caption1 p{
        margin-right: 3%;
        text-align: left;

      }

      .col{
        margin-left: 3%;
        margin-right:3%;
      }

      .icon-ul{
        margin: 5%;
        margin-left: 15%;
      }

      .num{
        font-family: 'Barlow', sans-serif;
        color: #2440a4;
        font-size: 42px;
        font-weight: 550;
        text-align: center;
      }

      .nim{
        font-family: 'Barlow', sans-serif;
        margin-top: 8px;
        font-weight: 600;
        line-height: 1;
        margin-left: 10%;
        color: #485c77;
        font-size: 14px;
      }

      .container-fluid2{
        margin-top:5%;
        padding-bottom: 5%;
        margin-bottom:5%;
        background-color: #f6f7fa;
      }

      .container-fluid2 h1{
        text-align: center;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        margin-top:5%;
        padding-top: 5%;
        font-size: 30px;
        color: #485c77;
      }

      .container-fluid2 p{
        text-align: center;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        margin-top: 2%;
        color: #485c77;
        padding-bottom:3%;
      }

      .tables{
      margin: auto;
      width: 70%;
      padding: 10px;
      margin-top: inherit;
      }

      .fotter{
        background-color: #0c2846;
      }

      .new-container{
        margin-top: 3%;
        margin-bottom: 0%;
        padding: 5%;
      }

      .linked-in{
        display: inline;
      }

      .medium{
        display: inline;
      }

      .facebook{
        display: inline;
      }

      .youtube{
        display: inline;
      }

      .social{
        float: right;
        width: 300px;
        padding: 5px;
      }

      .atas a{
        color: white;
        font-size: 12px;
      }

      .atas h5{
        padding-bottom: 3%;
        font-size: 16px;
      }

      .list p{
        padding-bottom: 3%;
      }

      .list1 a{
        color: white;
      }

      .left{
        color: white;
        margin-top: 2%;
        float: left;
      }

      .right{
        color: white;
        margin-top: 2%;
        float: right;
      }



    </style>
  </head>
  <body>

 <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="border-top: 4px solid #00beff; background-color:white; border-bottom:1px solid white; box-shadow:0 2px 8px 0 rgba(0,0,0,0.08);">
 	<div class="container">
    <div class="brand">
      <a class="navbar-brand mr-0 mr-md-1" href="/"><img src="{{ asset('/img/quipper.png') }}" height="20%;" width="30%;"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:grey;">
              Untuk Siswa
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Quipper Video</a>
              <a class="dropdown-item" href="#">Quipper School</a>
              <a class="dropdown-item" href="#">Quipper Campus</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:grey;">
              Untuk Guru
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Quipper School</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang Quipper</a>
        </li>
        <li class="nav-item">
            <button class="btn-login" onclick="window.location='/login'"> Login</button>
        </li>
        <li class="nav-item">
            <button class="btn-daftar" onclick="window.location='/daftar'"> Daftar Sekarang </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('container')

<footer class="fotter">
  <div class="new-container">
    <div class="footer-up">
      <div class="row" style="border-bottom:1px solid #1e3f6b; padding-bottom:2%;">
        <div class="col-lg-8">
          <div class="quip">
            <img src="{{ asset('/img/quipper.png') }}" height="10%;" width="20%;">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="social">
            <div class="linked-in">
              <img src="{{ asset('/img/social1.JPG') }}" style="width: 15%; height: 15%;">
            </div>
            <div class="medium">
              <img src="{{ asset('/img/social2.JPG') }}" style="width: 15%; height: 15%;">
            </div>
            <div class="facebook">
              <img src="{{ asset('/img/social 3.JPG') }}" style="width: 15%; height: 15%;">
            </div>
            <div class="youtube">
              <img src="{{ asset('/img/social4.JPG') }}" style="width: 15%; height: 15%;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle">
      <div class="row" style="border-bottom:1px solid #1e3f6b; padding-bottom:2%;">
        <div class="col mr-auto my-md-4 my-0 mt-4 mb-1">
          <div class="atas">
            <h5 style="color:white;"> Untuk Murid </h5>
              <ul class="list-unstyled">
              <li class="list">
                <p>
                  <a href="#!">Quipper Video</a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a href="#!">Quipper Video</a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a href="#!">Quipper Video</a>
                </p>
              </li>
            </ul>
          </div>
          <br>
          <div class="atas">
            <h5 style="color:white;"> Untuk Guru </h5>
              <ul class="list-unstyled">
                <li class="list">
                  <p>
                    <a href="#!">Quipper School</a>
                  </p>
                </li>
              </ul>
          </div>
        </div>
        <div class="col mx-auto my-md-4 my-0 mt-4 mb-1">
            <div class="atas">
              <h5 style="color:white;">Tentang Quipper</h5>
              <ul class="list-unstyled">
              <li class="list">
                <p>
                  <a href="#!">Quipper Indonesia</a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a href="#!">Karier</a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a href="#!">Media</a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a href="#!">Quipper Blog</a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a href="#!">Tech Blog</a>
                </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col mx-auto my-md-4 my-0 mt-4 mb-1">
          <div class="atas">
            <h5 style="color:white;">PT Quipper Edukasi Indonesia</h5>
            <ul class="list-unstyled">
              <li class="list">
                <p>
                  <a>The H Tower, 18th floor Jalan H.R. Rasuna Said Kav. 20 Kuningan,
                  Jakarta, Indonesia 12940</a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a><i></i>info-id@quipper.com<a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a><i></i>0811 1785 309<a>
                </p>
              </li>
              <li class="list">
                <p>
                  <a><i></i>0811 1785 309<a>
                </p>
              </li>
          </div>
        </div>
        <div class="col text-center mx-4 my-4" >
          <div class="atas">
            <h5 style="color:white;"> Download aplikasi Android Quipper</h5>
            <ul class="list-unstyled">
              <li class="list">
                <img src="https://www.quipper.com/id/shared/images/video/android-preview.png" style="width: 50%; height: 50%;">
              </li>
              <li class="list">
                <img src="https://www.quipper.com/id/shared/images/video/google-play.png"style="width: 30%; height: 30%;">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="left">© 2020. All rights reserved</div>
      <div class="right">
        <ul class="list-inline">
          <li class="list-inline-item">Syarat & Ketentuan</li>
          <li class="list-inline-item">Kebijakan Privasi</li>
          <li class="list-inline-item">Indonesia</li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>

    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
    </script>
  </body>
</html>
