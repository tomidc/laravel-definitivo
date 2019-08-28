@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/simuladores.css">
<div class="container home-bg">
    <div class="row justify-content-center margin-buttonPlay">
        <div class="col-md-8">
            <div class="card-home">

                <div class="card-body-home">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <a href="/play/1" class="buttonPlay">¡LISTO/A PARA JUGAR!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
