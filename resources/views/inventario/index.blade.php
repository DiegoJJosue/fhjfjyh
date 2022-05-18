@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-9">
<div class="card" style="border: solid 1px black;">
<div class="card-header bg-dark" >
<div class="row">
	<div class="col-md-5">
		<h2 class="text-white">Lista de Inventario</h2>

		</div>
		<div class="col-md-5">

		<form action="{{route('inventario.search')}}" method="post">
			@csrf
			<div class="row">
		<input name="prod_nombre" class="form-control" style="width:60% ;" id="validationCustom04" required>
		<div class="invalid-feedback">
			Please select a valid state.
		</div>
		<button type="submit" value="btn_buscar" class="btn btn-success " style="border:solid #000 1px; background:;"> Buscar</button>
		</div>
		</form>

	</div>
	<div class="col-md-2">

		<div class="row" >
	 <a href="{{route('inventario.create')}}" class="btn btn-danger">Nuevo</a>
      <a href="" method="post" class="btn btn-danger" value="btn_pdf" name="btn_pdf" style="margin-left: 5%">PDF</a> 
		</div>

	</div>
</div>
		</div>
		<div class="card-body">
			
			<table class="table table-striped " >
				<th>#</th>
			
				<th>Nombre del producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Provedor</th>
				<th>Bodega</th>
				<th>Acciones</th>
			
			
				@foreach($inventario as $inv)
				<tr>
					<td>{{$loop->iteration}}</td>
					
					<td>{{$inv->prod_nombre}}</td>
					<td>{{$inv->prod_precio}}</td>
					<td>{{$inv->inv_cantidad}}</td>
					<td>{{$inv->prov_nombre}}</td>
					<td>{{$inv->bod_nombre}}</td>
					<td>
			
			
						
			
			<div class="row">
			
				<a href="{{route('inventario.edit',$inv->inv_id)}}" style="background:#46b6d0;" class="btn btn-primary">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
			<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
			</svg>
				</a>
				<form action="{{route('inventario.destroy',$inv->inv_id)}}" method="POST" 
					onsubmit="return confirm('Desea eliminar?')" >
					@csrf
					<button class= "btn text-white "  style="background:#eb0009;" >
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
				class="bi bi-trash3-fill" viewBox="0 0 16 16">
				  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
			</svg>
</button>
				</form>			
			
				</div>
			
			
			</td>
				</tr>
				@endforeach
			</table>

		</div>
	</div>
</div>
	</div>

	</div>
</div>
@endsection  