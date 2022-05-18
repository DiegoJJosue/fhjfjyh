@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card" style="border: solid 1px black;">

                <div class="card-header bg-dark ">
                    
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="{{asset('js/productos.js')}}"></script>
                    <h4 class="text-white ">Nuevo Provedor</h4>
                </div>
                <div class="card-body">
                    
                    <form action="{{route('provedor.update',$provedor->prov_id)}}" method="POST" onsubmit="return validar()" >
                        @csrf
                
                        <div class="form-group row">
                                            <label for="prov_nombre" class="col-md-4 col-form-label text-md-right">Nombre del Provedor</label>
                                            <div class="col-md-6">
                                            <input type="text" name="prov_nombre" id="prov_nombre" value="{{$provedor->prov_nombre}}" class="form-control @error('prov_nombre') is-invalid @enderror"  value="{{ old('prov_nombre') }}" required autocomplete="prov_nombre">
                                                @error('prov_nombre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="prov_direccion" class="col-md-4 col-form-label text-md-right">Direccion</label>
                                            <div class="col-md-6">
                                            <input type="text"  name="prov_direccion" id="prov_direccion"  value="{{$provedor->prov_direccion}}" class="form-control @error('prov_direccion') is-invalid @enderror" name="prov_direccion" value="{{ old('prov_direccion') }}" required autocomplete="prov_direccion">
                                                @error('prov_direccion')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                        <div class="form-group row">
                                            <label for="prov_telefono" class="col-md-4 col-form-label text-md-right">Telefono </label>
                                            <div class="col-md-6">
                                            <input type="number" id="prov_telefono" value="{{$provedor->prov_telefono}}"  class="form-control @error('prov_telefono') is-invalid @enderror" name="prov_telefono" value="{{ old('prov_telefono') }}" required autocomplete="prov_telefono">
                                                @error('prov_telefono')
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