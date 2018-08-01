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
              <div class="card-header">Localização</div>
              <div class="card-body">
                <h4>Rua Dr. Munir Thomé, 15 - Centro Três Lagoas</h4>
              </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3730.142649280922!2d-51.71520932570278!3d-20.785516099852305!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94909859020122b9%3A0xb9428fa3681f61da!2sRua+Dr.+Munir+Thom%C3%A9%2C+15+-+Centro%2C+Tr%C3%AAs+Lagoas+-+MS%2C+79600-060!5e0!3m2!1spt-BR!2sbr!4v1529621616625" width="540" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection
