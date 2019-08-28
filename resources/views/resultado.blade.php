@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/simuladores.css">

    
    <h1> Tu resultado es: </h1>
    <p class="resultadoJuego"></p>
    <div>

        <p id="record">  {{ Auth::user()->record }} </p>

    </div>
    <div id="gif"></div>

    <a href="/play/1"> ¡Volver a Jugar! </a>


@endsection