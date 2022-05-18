@extends('layouts.app') 
@section('content')
<div class="container"> 
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: solid 1px black;">

        <div class="card-header bg-dark ">

            <h4 class="text-white ">BODEGAS</h4>
        </div>
        <div class="card-body">

            <form action="{{route('bodegas.store')}}" method="POST" onsubmit="return validar()">
            
                <!-- <form action="{{route('usuarios.store')}}" method="POST" onsubmit="return validar()"> -->
            
            
                    @csrf
            
                     <div class="form-group row">
                                     <label for="bod_cantida" class="col-md-3 col-form-label text-md-right">Nombre</label>
                                        <div class="col-md-6">
                                         <input id="bod_nombre"
                                      type="text" name="bod_nombre" type="number"  class="form-control @error('bod_nombre') is-invalid @enderror" name="bod_nombre" value="{{ old('bod_nombre') }}" required autocomplete="bod_nombre"> @error('bod_nombre') <span
                                        class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                        @enderror </div> 
                                    </div>
            
                            
            
                    <button class="btn btn-success" style="margin-left: 45%;">Guardar</button>
                    
            
                </form>
        </div>
<!-- <script src="{{asset('js/bodegas.js')}}"></script>    -->
</div>
</div>
</div>
</div>

@endsection