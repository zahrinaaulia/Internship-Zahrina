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
      }

      .upper{
        text-align: center;
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
               <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Indonesia
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                 <a class="dropdown-item" href="#">Mexico</a>
                 <a class="dropdown-item" href="#">Malaysia</a>
                 <a class="dropdown-item" href="#">Lainnya</a>
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
                  <input class="form-control" type="password">
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
                  <input class="form-control" type="password">
                  <div class="input-group-addon">
                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true" style="font-size:30px; color:#bed2e8;"></i></a>
                  </div>
                </div>
              </div>

              




            </form>
          </div>
        </div>
      </section>
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
    </script>

  </body>
</html>
