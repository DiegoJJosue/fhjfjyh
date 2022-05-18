@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card" style="border: solid 1px black;">

                <div class="card-header bg-dark ">
                    
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="{{asset('js/productos.js')}}"></script>
                    <h4 class="text-white ">Nuevo Producto</h4>
                </div>
                <div class="card-body">
                    
                    <form action="{{route('productos.store')}}" method="POST" onsubmit="return validar()" >
                        @csrf
                
                        <div class="form-group row">
                                            <label for="prod_nombre" class="col-md-4 col-form-label text-md-right">Nombre del Producto</label>
                                            <div class="col-md-6">
                                            <input type="text" name="prod_nombre" id="prod_nombre" class="form-control @error('prod_nombre') is-invalid @enderror"  value="{{ old('prod_nombre') }}" required autocomplete="prod_nombre">
                                                @error('prod_nombre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="prod_precio" class="col-md-4 col-form-label text-md-right">Precio </label>
                                            <div class="col-md-6">
                                            <input type="number"  name="prod_precio" id="prod_precio"  class="form-control @error('prod_precio') is-invalid @enderror" name="prod_precio" value="{{ old('prod_precio') }}" required autocomplete="prod_precio">
                                                @error('prod_precio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                        <div class="form-group row">
                                            <label for="prod_codigo" class="col-md-4 col-form-label text-md-right">Codigo del Producto </label>
                                            <div class="col-md-6">
                                            <input type="number" id="prod_codigo"  class="form-control @error('prod_codigo') is-invalid @enderror" name="prod_codigo" value="{{ old('prod_codigo') }}" required autocomplete="prod_codigo">
                                                @error('prod_codigo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                        <button class="btn btn-success" style="margin-left: 35%;background:#1ab7a1;">Guardar</button>
                        
                
                    </form>
                    </div>
                </div>
            </div>

		</div>
	</div>
</div>


@endsection