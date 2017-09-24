@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PT. Beton Elemindo Perkasa</title>        

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <style>

            body {
                background-color: white;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            #box{
              width: 100%;
              height: 220pt;
              background-color: #fdd835;
            }
        </style>
    </head>
    <body><br>
    <h4 style="text-align: center;">PT. BETON ELEMINDO PERKASA</h4>
    <center><i class="medium material-icons">account_balance</i></center>

    <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://lorempixel.com/580/250/nature/1" > <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

  <br>
        <div class="row" style="margin-left: 50px; margin-right: 50px;">
        <div class="col s4">
          <div class="card" style="background-color: #e0e0e0;">
            <div class="card-content" style=" font-color: black;"><br>
              <span class="card-title center"><i class="large material-icons">insert_chart</i></span>
              <span class="card-title center">Chart</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.<br><br></p>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card" style="background-color: #e0e0e0; font-color: black;">
            <div class="card-content" style=" font-color: black;"><br>
              <span class="card-title center"><i class="large material-icons">dashboard</i></span>
              <span class="card-title center">Dashboard</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.<br><br></p>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card" style="background-color: #e0e0e0; font-color: black;">
            <div class="card-content" style=" font-color: black;"><br>
              <span class="card-title center"><i class="large material-icons">description</i></span>
              <span class="card-title center">Deskripsi</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.<br><br></p>
            </div>
          </div>
        </div>
      </div>

      <div class="jumbotron" style="margin-left: 45pt; margin-right: 45pt;">
        <h1 class="display-3">Hello, world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      </div>

    <div class="row container">
      <h3 class="header" style="margin-right: 50pt; margin-left: 50pt;">PT.Beton Elemindo Perkasa</h3>
      <p class="grey-text text-darken-3 lighten-3" style="margin-right: 50pt; margin-left: 50pt;">Menyediakan Penyewaan Alat-Alat Berat yang dapat dipergunakan untuk Membangun Gedung, Jembatan, Jalan Layang, Dan Proyek Besar Lainnya yang Membutuhkan Kendaraan Besar.</p>
    </div>
  <div class="parallax-container center">
    <div class="parallax"><img src="http://2.bp.blogspot.com/-tsvOQRIqOc8/VNF58WZF5HI/AAAAAAAABUE/IKysM-PhjV8/s1600/Sell-CXX966-6ton-Wheel-Loader.jpg"></div>
  </div>
  <div class="section">
    <div class="row container">
      <h3 class="header" style="margin-right: 50pt; margin-left: 50pt;">Menyediakan Berbagai Jenis Alat Berat</h3>
      <p class="grey-text text-darken-3 lighten-3" style="margin-right: 50pt; margin-left: 50pt;">Kami menyediakan penyewaan alat berat yang berbagai jenis kendaraan alat berat, mulai dari alat penggali, alat pengangut barang berat, alat pengolah lahan, dan lain-lain.</p>
    </div>

<div id="box">
</div>
  </body>
</html>
@endsection
@section('footer')
@endsection