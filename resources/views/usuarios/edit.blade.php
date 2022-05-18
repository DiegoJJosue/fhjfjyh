@extends('layouts.app')
@section('content')
<div class="container">
	 <div class="row justify-content-center">
	 	<div class="col-md-8">
	 		<div class="card" style="border: solid 1px black;">
<div class="card-header bg-dark">

    <h4 class=" text-white ">Editar Usuarios </h4>
</div>
<div class="card-body">

    
    <form action="{{route('usuarios.update',$users->use_id)}}" method="POST" >  
     @csrf
    
                             <div class="form-group row">
                                <label for="users" class="col-md-4 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-5">
                                <input type="text" class="form-control" value="{{$users->users}}" name="users" id="users" class="form-control @error('users') is-invalid @enderror" name="users" value="{{ old('users') }}" required autocomplete="users">
                                    @error('users')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="users" class="col-md-4 col-form-label text-md-right">Apellido</label>
                                <div class="col-md-5">
                        <input type="text" class="form-control" value="{{$users->use_apellido}}" name="use_apellido" id="use_apellido" class="form-control @error('use_apellido') is-invalid @enderror" name="use_apellido" value="{{ old('use_apellido') }}" required autocomplete="use_apellido">	
                                    @error('users')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="users" class="col-md-4 col-form-label text-md-right">Telefono</label>
                                <div class="col-md-5">
                        <input type="text" class="form-control" value="{{$users->use_telefono}}" name="use_telefono" id="use_telefono" class="form-control @error('use_telefono') is-invalid @enderror" name="use_telefono" value="{{ old('use_telefono') }}" required autocomplete="use_telefono">
                                @error('users')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>	
    
    
                            <div class="form-group row">
                                <label for="users" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-5">
                                <input type="text" class="form-control" value="{{$users->email}}" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('users')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>	
    
    
                             <div class="form-group row">
                                <label for="users" class="col-md-4 col-form-label text-md-right">Cedula</label>
                                <div class="col-md-5">
                                <input type="text" class="form-control" value="{{$users->use_cedula}}" name="use_cedula" id="use_cedula" class="form-control @error('use_cedula') is-invalid @enderror" name="use_cedula" value="{{ old('use_cedula') }}" required autocomplete="use_cedula">
                                @error('users')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>	
    
    <button class="btn " style="margin-left: 40%;background:#1ab7a1;">Guardar</button>
    
    </form>
</div>
</div>
</div>
</div>
</div>

@endsection