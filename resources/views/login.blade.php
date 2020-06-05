<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>

    .container{
      width: 100%;
    }

    .col{
      width: 100%;
    }

    .image-quip{
      margin: auto;
      width: 50%;
      margin-top: 40%;
    }

    .Registration{
      width: 60%;
      padding: 3%;
      padding-top: 5%;
      margin:auto;
    }

    .face{
      padding:3%;
      margin-top: 3%;
      margin-bottom:10%;
      width: 100%;
      background-color: #0056b3;
      border: none;
      border-radius: 5px;
      color:white;
      background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiPjxkZWZzPjxwYXRoIGlkPSJhIiBkPSJNMjEuNzg2IDFIMi4yMTRDMS41NDQgMSAxIDEuNTQ0IDEgMi4yMTR2MTkuNTcyQzEgMjIuNDU2IDEuNTQ0IDIzIDIuMjE0IDIzaDEwLjUzN3YtOC41Mkg5Ljg4NHYtMy4zMmgyLjg2N1Y4LjcxMmMwLTIuODQyIDEuNzM1LTQuMzkgNC4yNy00LjM5IDEuMjE1IDAgMi4yNTguMDkxIDIuNTYyLjEzMnYyLjk3aC0xLjc1OGMtMS4zNzggMC0xLjY0NS42NTUtMS42NDUgMS42MTZ2Mi4xMmgzLjI4N2wtLjQyOCAzLjMyaC0yLjg2VjIzaDUuNjA3Yy42NyAwIDEuMjE0LS41NDQgMS4yMTQtMS4yMTRWMi4yMTRDMjMgMS41NDQgMjIuNDU2IDEgMjEuNzg2IDEiLz48L2RlZnM+PHVzZSBoZWlnaHQ9IjEwMCUiIHdpZHRoPSIxMDAlIiB4bGluazpocmVmPSIjYSIgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+);
      background-position: 16px;
      background-repeat: no-repeat;
      background-size: 24px;
    }

    .line{
      border-bottom: 1px solid #e3ecf5;
      width: 100%;
      height: 14px;
      text-align: center;
    }

    .text-separator{
      font-size: 14px;
      background-color: white;
      padding: 0 40px;
      color: #6b8fbc;
    }

    .middle{
      margin-top:3%;
    }

    .input-group-addon{
      background-color: white;
      border: 1px solid rgba(0,0,0,.15);
      width: 10%;
      height: auto;
      text-align: center;
      border-left:none;
    }

    .upper{
      padding-bottom:8%;
    }

    .buat{
      padding:3%;
      margin-top: 3%;
      margin-bottom:3%;
      width: 100%;
      background-color: #4267b2;
      border: none;
      border-radius: 5px;
      color:white;
      font-size: ;
      font-weight: 700;
      background-color: #009feb;
      height: 70px;
      color: #fff;
      text-align: center;
    }

    .bottom{
      text-align: center;
    }

    .row{
      margin-bottom: 0%;
      padding-bottom: 0%;
      height: 100%;
    }

    .tulisan{
    position: absolute;
     top: 93%;
     left: 4%;
     color: white;
    }

    </style>


  </head>
<body>


<div class="container-fluid">
    <div class="row flex-column flex-md-row">
        <div class="col" style="background-color: #009feb">
          <div class="image-quip">
            <img src="{{ asset('/img/quip.jpg') }}" width="210px" height="100px">
          </div>
          <div class="tulisan">
            <span><b>@ 2020 Quipper Limited</b></span>
          </div>
        </div>
        <div class="col">
          <div class="Registration">
            <div class="upper">
              <h5><b>Masuk</b></h5>
              <button class="face"> Masuk dengan akun Facebook</button>
              <div class="line">
                <span class="text-separator"><h8> ATAU </h8></span>
              </div>
            </div>
            <div class="middle">
              <form action="" novalidate>
                <div class="form-group">
                  <input type="text" class="form-control" id="inputTelp" placeholder="Nama Pengguna atau Email">
                </div>

                <div class="form-group">
                  <div class="input-group" id="show_hide_password" >
                    <input class="form-control" type="password" placeholder="Masukkan Kata Sandi" style="border-right:none;">
                    <div class="input-group-addon">
                      <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="font-size:30px; color:#bed2e8;"></i></a>
                    </div>
                  </div>
                  <small id="passwordHelpBlock" class="form-text text-muted">
                    Lupa Kata Sandi?
                  </small>
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" onclick="myFunction()">
                    <label class="custom-control-label" for="customCheck1">Biarkan saya tetap masuk</label>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                      Jangan centang kotak ini jika komputer atau perangkat kamu juga digunakan oleh orang lain.
                    </small>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="buat">Masuk</button>
                </div>
              </form>
            </div>
            <div class= "bottom">
              <span>Tidak punya akun? <b><a href="/daftar"> Buat Akun. </a></b>.</span>
            </div>
          </div>
          </div>
        </div>
    </div>
</div>





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
  });
    </script>
  </body>
</html>
