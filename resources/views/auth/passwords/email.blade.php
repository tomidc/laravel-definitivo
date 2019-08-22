@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/css/simuladores.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card black-square">
                <div class="card-header">RECUPERAR CONTRASEÑA
              <br>
                Ingresá tu email para enviarte un código de recuperación.
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="form-reset">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary button-reset col-md-12">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
