@extends('layout/main')

@section('title','web programming')

@section('container')
  <div class="container-fluid">
      <p>Sekolah ditutup? tetap tenang karena guru dan siswa #BisaTetapBelajar dengan Platform dan materi gratis dari Quipper. <a><b> Info lebih Lanjut</b></a></p>
  </div>
  <div clas="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('/img/1.jpg') }}">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('/img/2.jpg') }}">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('/img/3.jpg') }}">
        </di
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('/img/4.jpg') }}">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('/img/5.jpg') }}">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container-fluid1">
    <h1>Temukan layanan terbaik Quipper di sini!</h1>
  </div>

  <div class="container-fluid1">
    <div class="row">
      <div class="col">
        <img src="{{ asset('/img/section1.png') }}" style="width:95%; height:100%;">
      </div>
      <div class="col">
        <div align="right">
          <button class="button1">Untuk Siswa</button>
        </div>
        <div class="caption">
          <div align="right">
            <img src="{{ asset('/img/section12.png') }}" style="width:60%; height:20%;">
          </div>
          <p>Belajar lebih seru bersama Super Teacher terbaik, ribuan video belajar online dan soal-soal berkualitas.
            Raih mimpi masuk sekolah dan perguruan tinggi favorit!</p>
        </div>
        <div align="right">
          <button class="button2">Selengkapnya</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid1">
    <div class="row">
      <div class="col">
        <div align="left">
          <button class="button1">Untuk Siswa</button>
        </div>
        <div class="caption1">
          <div align="left">
            <img src="{{ asset('/img/section2.png') }}" style="width:60%; height:20%;">
          </div>
          <p>Belajar lebih personal sesuai kebutuhan dan gaya belajar siswa dengan bimbingan dari Tutor dan Kakak Pembimbing.
            Rasakan pengalaman belajar yang lebih efektif dan interaktif!</p>
        </div>
        <div align="left">
          <button class="button2">Selengkapnya</button>
        </div>
      </div>
      <div class="col">
        <img src="{{ asset('/img/section21.png') }}" style="width:95%; height:100%;">
      </div>
    </div>
  </div>

  <div class="container-fluid1">
    <div class="row">
      <div class="col">
        <img src="{{ asset('/img/section3.png') }}" style="width:95%; height:100%;">
      </div>
      <div class="col">
        <div align="right">
          <button class="button1">Untuk Siswa & Guru </button>
        </div>
        <div class="caption">
          <div align="right">
            <img src="{{ asset('/img/section31.png') }}" style="width:60%; height:20%;">
          </div>
          <p>Dukung sekolah, guru dan siswa dalam kegiatan belajar mengajar yang lebih efektif.
            Mengelola kelas, mendistribusi dan menilai tugas kini jauh lebih mudah!</p>
        </div>
        <div align="right">
          <button class="button2">Selengkapnya</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid1">
    <div class="row" style="border-bottom:1px solid #E0E0E0;">
      <div class="col">
        <div align="left">
          <button class="button1">Untuk Siswa & Guru</button>
        </div>
        <div class="caption1">
          <div align="left">
            <img src="{{ asset('/img/section41.png') }}" style="width:60%; height:20%;">
          </div>
          <p>Panduan terbaik memilih kampus untuk masa depan. Dapatkan info kampus terlengkap dan berkualitas di sini!</p>
        </div>
        <div align="left">
          <button class="button2">Selengkapnya</button>
        </div>
      </div>
      <div class="col">
        <img src="{{ asset('/img/section4.png') }}" style="width:95%; height:100%;">
      </div>
    </div>
  </div>

  <div class="container-fluid1">
    <div class="judul">
      <h1> Quipper untuk Indonesia </h1>
    </div>

    <div class="icon-ul">
      <div class="row">
        <div class="col">
          <img src="{{ asset('/img/icon1.svg') }}" style="width:45%;
          height: 45%;">
          <span class="num" style="margin-left:-10%;">5.000.000+</span>
          <br>
          <span class="nim">Siswa Terdaftar</span>
        </div>

        <div class="col">
          <img src="{{ asset('/img/icon2.svg') }}" style="width:45%;
          height: 45%;">
          <span class="num">350.000+</span>
          <br>
          <span class="nim">Guru Bergabung</span>
        </div>

        <div class="col">
          <img src="{{ asset('/img/icon3.svg') }}" style="width:45%;
          height: 45%;">
          <br>
          <span class="num">50.000+</span>
          <br>
          <span class="nim" style="margin-left:-10%;">Soal untuk Melatih Kemampuan</span>
        </div>
      </div>
    </div>
  </div>











@endsection
