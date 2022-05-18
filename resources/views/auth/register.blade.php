@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: solid 1px black;">
                <div class="card-header text-white bg-dark">Registrarse</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf



                        <div class="form-group row">
                            <label for="users" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="users" type="text" class="form-control @error('users') is-invalid 
                                @enderror" name="users" value="{{ old('users') }}" required autocomplete="users" autofocus>
                                @error('users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="use_apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>
                            <div class="col-md-6">
                                <input id="use_apellido" type="text" class="form-control @error('use_apellido') is-invalid 
                        @enderror" name="use_apellido" value="{{ old('use_apellido') }}" required autocomplete="use_apellido" autofocus>
                                @error('use_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid 
                        @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="use_cedula" class="col-md-4 col-form-label text-md-right">Cedula</label>
                            <div class="col-md-6">
                                <input id="use_cedula" type="text" class="form-control @error('use_cedula') is-invalid 
                                @enderror" name="use_cedula" value="{{ old('use_cedula') }}" required autocomplete="use_cedula" autofocus>
                                @error('use_cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="use_telefono" class="col-md-4 col-form-label text-md-right">Numero de Telefono</label>
                            <div class="col-md-6">
                                <input id="use_telefono" type="text" class="form-control @error('use_telefono') is-invalid 
                                @enderror" name="use_telefono" value="{{ old('use_telefono') }}" required autocomplete="use_telefono" autofocus>
                                @error('use_telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarte
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
