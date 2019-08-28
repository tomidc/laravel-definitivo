@extends('layouts.app')

@section('content')

<div class="playSquare">


<link rel="stylesheet" href="/css/simuladores.css">


    <h2 class="resultado"> Tu resultado es: </h2>
    <p class="resultadoJuego"></p>
    <div>

        <p id="record">  {{ Auth::user()->record }} </p>

    </div>
    <div id="gif"></div>

    <a href="/play/1"> ¡Volver a Jugar! </a>
</div>

@endsection
