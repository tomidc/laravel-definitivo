<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/simuladores.css">
    <title> Los Simuladores </title>
  </head>


<body>
  <div class="container">   <!--container-fluid abarca toda la pantalla y a este le falta img de fondo -->
    <header class="main-header">
    <div class="">
      <img src="/img/logo.png" alt="logo" class="logo">
    </div>

  @if(Auth::check())
  <nav class="nav" >    <!-- <div class="jumbotron text-center"> TE CENTRA EL TEXTO EN UNA LINEA Y LE AGREGAMOS LO DE NAV, nav y class nav no tienen nada -->
    <h1> Hola, <?=$_SESSION["nombre"];?>!</h1> <!-- PONDRIA EL H1 AFUERA DEL NAV -->
    <ul class="izquierda">
      <li><a href="index"> HOME </a></li>
      <li><a href="preguntas"> REGLAS</a></li>
      <li> <a href="logout"> LOGOUT</a></li>
    </ul>
  </nav>

@else
<!-- este es el menu si el usuario NO esta logueado -->
<nav>
  <ul>
    <li><a href="index"> HOME </a></li>
    <li><a href="preguntas"> REGLAS</a></li>
    <li><a href="login"> LOGIN </a></li>
    <li><a href="register"> REGISTRO </a></li>
  </ul>
</nav>
@endif
