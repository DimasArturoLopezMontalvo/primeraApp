@extends('plantilla')

@section('contenido')
    <div style="background-color:#FFFFFF;" class="content-wrapper">
        <section class="content-header">
<head>
  <style>
    /* Estilos CSS para el título */
    .title {
      font-size: 48px;
      text-align: center;
      animation: colorChange 2s infinite;
    }

    /* Estilos CSS para la animación de cambio de colores */
    @keyframes colorChange {
      0% { color: rgb(255, 183, 0); }
      25% { color: rgb(255, 149, 0); }
      50% { color: rgb(128, 58, 0); }
      75% { color: orange; }
      100% { color: rgb(128, 43, 0); }
    }
  </style>
</head>
  <h1 class="title">Bienvenido al sistema gestor de eventos "EDR EVENTOS"</h1>

<!DOCTYPE html>
<html>
<head>
  <title>Tres tarjetas horizontales</title>
  <style>
    .card-container {
      display: flex;
    }
    
    .card {
      flex: 1;
      margin-right: 10px;
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .card:last-child {
      margin-right: 0;
    }
  </style>
</head>
<body>
  <div class="card-container">
    <div class="card">
      <h3></h3>
      <p></p>
      <p class="card-text"></p>
    <a href="#" style="background-color: #FFAF33; color: white; border: 2px #FFAF33;" class="btn btn-primary">Abrir</a>
    </div>
    <div class="card">
      <h3></h3>
      <p></p>
      <p class="card-text"></p>
    <a href="#" style="background-color: #FFAF33; color: white; border: 2px #FFAF33;" class="btn btn-primary">Abrir</a>
    </div>
    <div class="card">
      <h3></h3>
      <p></p>
      <p class="card-text"></p>
    <a href="#" style="background-color: #FFAF33; color: white; border: 2px #FFAF33;" class="btn btn-primary">Abrir</a>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crossfade con Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div id="crossfade" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#crossfade" data-slide-to="0" class="active"></li>
      <li data-target="#crossfade" data-slide-to="1"></li>
      <li data-target="#crossfade" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://www.eldoradosparesorts.com.mx/img/occasions-section01-HiRes.jpg" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://www.eldoradosparesorts.com.mx/img/subhero-wedding-HiRes.jpg" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://www.eldoradosparesorts.com.mx/img/wedding-section03-HiRes.jpg" alt="Image 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#crossfade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#crossfade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

@endsection