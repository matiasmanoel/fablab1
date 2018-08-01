@extends('layouts.app')
<style>
  html, body {
    background-image: url(http://www.wallpaperbetter.com/wallpaper/751/338/401/long-hair-anime-girls-stars-clouds-sky-anime-white-hair-1080P-wallpaper.jpg);
    background-size: cover;
    background-repeat: no-repeat;
  }
  .card-header, .card-body{
    text-align: center
  }

  .card-header {
    font-weight: bold;
    font-size: 30px;
  }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">Quem Somos</div>
              <div class="card-body">
                <h4>Locadora Oliver</h4>
                <p>locadoraoliver@hotmail.com</p>
                <img src="https://http2.mlstatic.com/acervo-diversos-dvd-filmes-locadora-original-r-500-cada-D_NQ_NP_17988-MLB20146360824_082014-F.jpg" alt="Smiley face" height="400" width="400">
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
