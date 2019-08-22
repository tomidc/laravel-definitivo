@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/simuladores.css">
<div class="container home-bg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card black-square">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡LISTO/A PARA JUGAR!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
