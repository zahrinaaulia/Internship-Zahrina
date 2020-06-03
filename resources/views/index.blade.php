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
        </div>
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
@endsection
