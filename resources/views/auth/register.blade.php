@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card black-square" id="blackSquare">
                <div class="card-header">COMPLETA EL FORMULARIO</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-8 placeholder-border">
                                <input id="name" type="text" class="form-control placeholder @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingresá tu Nombre" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 placeholder-border">
                                <input id="email" type="email" class="form-control placeholder @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingresa tu Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 placeholder-border">
                                <input id="password" type="password" class="form-control placeholder @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingresá tu Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 placeholder-border">
                                <input id="password-confirm" type="password" class="form-control placeholder" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmá tu Contraseña">
                            </div>
                        </div>


                        <div class="form-group row">

                            <input name="image" type="file" class="form-control-file" id="image">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary button-register">
                                    REGISTRARME
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

                            <div class="footer-img content" >
                              <!-- <img src="img/4tipitos-01.png" width="600px" alt=""> -->

                            </div>
        </div>
    </div>
</div>

@endsection
