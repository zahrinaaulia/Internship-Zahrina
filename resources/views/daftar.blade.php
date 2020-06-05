@section('title','Daftar')


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>

    <style>

    body, html{
      background-color: #f6f7fa;
      height: 100%;

    }
      .navbar-nav{
        float: right;
      }

      .container1{
        margin: auto;
        width: 60%;
        border: 1px solid #f6f7fa;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 4px 0 rgba(0,0,0,.1);
        padding: 3%;
      }

      .header{
        margin-bottom: 10%;
      }

      .kotak{
        padding-left: 10%;
        padding-right: 10%;
      }

      .Registration{
        padding: 4%;
        color: #6b8fbc;
      }

      .upper{
        text-align: center;
      }

      .bottom{
        text-align: center;
        border-bottom: 1px solid #e3ecf5;
        padding-bottom: 2%;

      }

      .bottom1{
        text-align: center;
        padding-top: 2%;

      }

      .face{
        padding:3%;
        margin-top: 3%;
        margin-bottom:10%;
        width: 100%;
        background-color: #4267b2;
        border: none;
        border-radius: 5px;
        color:white;
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiPjxkZWZzPjxwYXRoIGlkPSJhIiBkPSJNMjEuNzg2IDFIMi4yMTRDMS41NDQgMSAxIDEuNTQ0IDEgMi4yMTR2MTkuNTcyQzEgMjIuNDU2IDEuNTQ0IDIzIDIuMjE0IDIzaDEwLjUzN3YtOC41Mkg5Ljg4NHYtMy4zMmgyLjg2N1Y4LjcxMmMwLTIuODQyIDEuNzM1LTQuMzkgNC4yNy00LjM5IDEuMjE1IDAgMi4yNTguMDkxIDIuNTYyLjEzMnYyLjk3aC0xLjc1OGMtMS4zNzggMC0xLjY0NS42NTUtMS42NDUgMS42MTZ2Mi4xMmgzLjI4N2wtLjQyOCAzLjMyaC0yLjg2VjIzaDUuNjA3Yy42NyAwIDEuMjE0LS41NDQgMS4yMTQtMS4yMTRWMi4yMTRDMjMgMS41NDQgMjIuNDU2IDEgMjEuNzg2IDEiLz48L2RlZnM+PHVzZSBoZWlnaHQ9IjEwMCUiIHdpZHRoPSIxMDAlIiB4bGluazpocmVmPSIjYSIgZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+);
        background-position: 16px;
        background-repeat: no-repeat;
        background-size: 24px;
      }

      .span h8{
        background-color: white;
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

      .input-group-addon{
        background-color: white;
        border: 1px solid rgba(0,0,0,.15);
        width: 10%;
        height: auto;
        text-align: center;
        border-left:none;
      }


      .buat{
        padding:3%;
        margin-top: 3%;
        margin-bottom:10%;
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

      .bottom a{
        color: #009feb;
      }

      .bottom1 a{
        color: #009feb;
      }

      label{
        color: black;
        font-weight: 600;
      }

      .footer{
        width: 100%;
        margin-top: 3%;
        background-color: #0c2846;

      }




    </style>

  </head>
  <body>
    <div class="header">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="border-top: 4px solid #00beff; background-color:white; border-bottom:1px solid white; box-shadow:0 2px 8px 0 rgba(0,0,0,0.08);">
       <div class="container">
         <div class="brand">
           <a class="navbar-brand mr-0 mr-md-1" href="/"><img src="{{ asset('/img/quipper.png') }}" height="20%;" width="30%;"></a>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
             <li class="nav-item">
               <a class="nav-link" href="#">Negara Anda</a>
             </li>
             <li class="nav-item dropdown">
               <select class="form-control" id="exampleFormControlSelect1">
                  <option>Indonesia</option>
                  <option>Malaysia</option>
                  <option>Mexico</option>
                  <option>Lainnya</option>
                </select>
               </div>
             </li>
           </ul>
         </div>
       </div>
      </nav>
    </div>


    <div class="container1">
      <section class="Registration">
        <div class="kotak">
          <div class="upper">
            <h3>Ayo buat akun Quipper</h3>
            <button class="face">Hubungkan dengan akun Facebook</button>
          </div>
          <div class="line">
            <span class="text-separator"><h8> ATAU </h8></span>
          </div>
          <div class="middle">
            <form action="" novalidate>
              <div class="form-group">
                <label>Nama</label>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Kelas</label>
                <select id="inputState" class="form-control">
                  <option selected>Pilih Kelas</option>
                  <option>Di atas Kelas 12</option>
                  <option>Kelas 12</option>
                  <option>Kelas 11</option>
                  <option>Kelas 10</option>
                  <option>Kelas 9</option>
                  <option>Di bawah Kelas 9</option>
                </select>
              </div>

              <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" class="form-control" id="inputTelp" placeholder="Masukkan Nomor Telepon">
              </div>

              <div class="form-group">
                <label>Alamat Email</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Masukkan Alamat Email">
              </div>

              <div class="form-group">
                <label>Nama Pengguna</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Masukkan Nama Pengguna">
              </div>

              <div class="form-group">
                <label>Kata Sandi</label>
                <div class="input-group" id="show_hide_password" placeholder="Masukkan Kata Sandi">
                  <input class="form-control" type="password" style="border-right:none;">
                  <div class="input-group-addon">
                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="font-size:30px; color:#bed2e8;"></i></a>
                  </div>
                </div>
                <small id="passwordHelpBlock" class="form-text text-muted">
                  * Kata sandi harus terdiri dari minimal 6 karakter, dan merupakan kombinasi antara huruf dan angka.
                </small>
                <small id="passwordHelpBlock" class="form-text text-muted">
                  * Hindari penggunaan kata sandi yang telah digunakan di situs lain, atau kata sandi yang mudah ditebak.
                </small>
              </div>

              <div class="form-group">
                <div class="input-group" id="show_hide_password" placeholder="Konfirmasi Kata Sandi">
                  <input class="form-control" type="password" style="border-right:none;" >
                  <div class="input-group-addon">
                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="font-size:30px; color:#bed2e8;"></i></a>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" onclick="myFunction()">
                  <label class="custom-control-label" for="customCheck1">Saya punya Nomor Keanggotaan Sekolah</label>
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" id="text" placeholder="Masukkan 12 digit Nomor Keanggotaan Sekolah">
              </div>

              <div class="form-group">
                <button type="submit" class="buat">Buat Akun</button>
              </div>
            </form>

            <div class="bottom">
              <span>Dengan klik <b>Buat Akun,</b></span><br>
              <span>artinya Anda setuju atas <b><a>Syarat & Ketentuan</a></b> dan <b><a>Kebijakan Privasi</a></b> kami.</span>
            </div>

            <div class="bottom1">
                <span>Jika Anda sudah punya akun, silakan <b><a>Masuk</a></b>.</span>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="footer">
      <div class="container fluid">
        <div class="row" style="padding-top:3%; padding-bottom:3%;">
          <div class="col">
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjgiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAxMjggMzIiPgogICAgPHBhdGggZmlsbD0iIzZCOEZCQyIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNDQuODEgOS4zNzF2MTEuNzg2aDEuNTU3djQuMjdoLTYuMDA1bC0uODU3LTIuMDIyYy0uNjk5LjgwMi0xLjgxMSAyLjQ3Mi00LjUxMSAyLjQ3Mi00Ljc5NyAwLTYuMzg1LTIuNTA1LTYuMzg1LTcuODM1VjEzLjYxaC0xLjMzNFY5LjM3MWg3LjY4N3Y3Ljc0YzAgMi43Ni40MTMgNC4wNDYgMS43MTUgNC4wNDYgMS4xMTIgMCAyLjAwMi0uOTk2IDIuMDAyLTIuNDQxVjEzLjYxaC0yLjA5N1Y5LjM3MWg4LjIyOHptNy42NjItMS44MzRjLTEuOTcgMC0zLjM3OC0xLjY3NS0zLjM3OC0zLjE5M2EzLjMgMy4zIDAgMCAxIDMuMzc4LTMuMjI2YzIuMTU4IDAgMy40NCAxLjc3MSAzLjQ0IDMuMjI2IDAgMS43NC0xLjIyIDMuMTkzLTMuNDQgMy4xOTN6bTIuODcgMS44MzR2MTEuODQzaDEuNDh2NC4yMDRoLTguNjM3di00LjIwNGgxLjI5NXYtNy42N2gtMS4yOTVWOS4zN2g3LjE1NnpNNjguMDMyIDIxLjQ4Yy0xLjIwNSAwLTIuMjgzLTEuNjY4LTIuMjgzLTMuODQ4LS4xMjYtMi41MzMgMS4wMTUtNC4xMDUgMi4yNTEtNC4xMDUgMS4zOTUgMCAyLjI4MyAyLjAyIDIuMjgzIDMuOTQ1IDAgMi40MzctLjkyIDQuMDA4LTIuMjUxIDQuMDA4bTEuNTg1LTEyLjQ3NGMtMS45MDIgMC0zLjIzMy45My0zLjgzNSAxLjM3OWwtLjU0LTEuMTIyaC03LjI1OXY0LjI2NGgxLjMzMXYxNC4xMWgtMS4zM3Y0LjJoOS40Nzh2LTQuMkg2NS43NXYtMy4yNGMuMjIyLjE5MyAxLjQ5IDEuMjUxIDQuMTIxIDEuMjUxIDQuMDkgMCA3LjIyOC0zLjE0MiA3LjIyOC04LjI0IDAtNC41NTQtMi41MzYtOC40MDItNy40ODEtOC40MDJNODcuNzU2IDIxLjQ4Yy0xLjE5NCAwLTIuMjYyLTEuNjY4LTIuMjYyLTMuODQ4LS4xMjYtMi41MzMgMS4wMDUtNC4xMDUgMi4yMy00LjEwNSAxLjM4MyAwIDIuMjYzIDIuMDIgMi4yNjMgMy45NDUgMCAyLjQzNy0uOTEyIDQuMDA4LTIuMjMgNC4wMDhtMS41Ny0xMi40NzRjLTEuODg1IDAtMy4yMDQuOTMtMy44MDEgMS4zNzlsLS41MzUtMS4xMjJoLTcuMTk0djQuMjY0aDEuMzJ2MTQuMTFoLTEuMzJ2NC4yaDkuMzk0di00LjJoLTEuNjk3di0zLjI0Yy4yMi4xOTMgMS40NzYgMS4yNTEgNC4wODQgMS4yNTEgNC4wNTMgMCA3LjE2My0zLjE0MiA3LjE2My04LjI0IDAtNC41NTQtMi41MTMtOC40MDItNy40MTQtOC40MDJtMTYuODkyIDQuMjEyYzIuMDA2IDAgMi4yODggMS4zMzkgMi4zMiAyLjU1aC00LjczNGMuMDYzLS43OTcuNTAxLTIuNTUgMi40MTQtMi41NW0xLjMxMSA4LjMyM2MxLjA2NiAwIDIuNjk2LS4wOTYgNC4zOS0xLjUzMmwyLjYzMyAzLjA5NGMtMi4zMiAyLjA0LTQuODI4IDIuNzc0LTguMDg4IDIuNzc0LTMuODg4IDAtOC4yNzctMi41Mi04LjI3Ny04LjY0MSAwLTUuMjMgMy43LTguMzIzIDguNDMzLTguMzIzIDMuNzMxIDAgNi41ODQgMS45NDUgNy40OTMgNC42MjQuMzc2IDEuMTE2LjcyIDMuNTcuMDYyIDUuMzg5SDEwNC4zYy4xODguODYuNTk2IDIuNjE1IDMuMjMgMi42MTV6TTEyOCAxNC4yNjljLTIuODc0IDAtNC41MDQuNzI3LTQuNTA0IDMuNTEydjMuMjU5aDEuNTk3djQuMTQ0aC05LjAzOFYyMS4wNGgxLjQwNXYtNy41NjJoLTEuMzc0VjkuMzY1aDYuMDA2bC45NTcgMi4wMjVjLjgzLTEuNTE5IDEuNjYyLTIuODE2IDQuOTUxLTIuODE2djUuNjk1em0tMTE1Ljg4MiA2LjFjLTIuMzYgMC00LjI3NC0zLjMzOC00LjI3NC03LjQ1NnMxLjkxMy03LjQ1NSA0LjI3NC03LjQ1NWMyLjM2IDAgNC4yNzUgMy4zMzcgNC4yNzUgNy40NTVzLTEuOTE0IDcuNDU2LTQuMjc1IDcuNDU2em0xMS40MyAyLjU2N2MwIC42MTQtLjA3MSAxLjYyNy0uNzE0IDEuNjI3LS44OTQgMC0xLjI4Ny0xLjIzLTEuNTczLTIuMzUgMS45NjYtMi4xNyAyLjk2Ni01LjI0MiAyLjk2Ni05LjAzNyAwLTcuNjk5LTMuNzg3LTEyLjgzMS0xMi4yMi0xMi44MzFDNC44MjMuMzQ1IDAgNS41NDkgMCAxMi45MjNjMCA4LjUzIDUuMDAyIDEyLjc5NiAxMi4yMiAxMi43OTYuOTY1IDAgMS45My0uMDczIDIuNzg4LS4yMTcuNzg2IDIuMTMyIDIuNjA5IDQuMDEyIDUuNTM5IDQuMDEyIDMuNTczIDAgNS4zNi0yLjU2NiA1LjM2LTUuNzgzdi0xLjg0NGgtMi4zNTl2MS4wNDl6Ii8+Cjwvc3ZnPgo=">
          </div>
          <div class="col" style="color:white;">
            <a herf="">2020 Quipper Limited</a>
          </div>
          <div class="col" style="color:white;">
            <a herf="">Bahasa Indonesia</a>
          </div>
          <div class="col" style="color:white;">
            <a herf="">Syarat dan Ketentuan</a>
          </div>
          <div class="col" style="color:white;">
            <a herf="">Kebijakan Privasi</a>
          </div>
          <div class="col" style="color:white;">
            <a herf="">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </div>
















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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


  function myFunction() {
  var checkBox = document.getElementById("customCheck1");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}





    </script>

  </body>
</html>
