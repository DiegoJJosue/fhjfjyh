<style>
	*{
		font-family:sans-serif ;
		font-size:12px;
	}
</style>
<h3>Factura No:{{$factura->fac_no}}</h3>
<h3>Cliente:{{$factura->cli_nombres}}</h3>
<h3>Ruc:{{$factura->cli_ruc}}</h3>
<h3>Direccion:Quito</h3>
<div style="background:#2BA0CC; text-align:center ;" >Detalle Factura</div>
<table style="width:85%">
	<tr>
		<th>#</th>
		<th>Cantidad</th>
		<th>Producto</th>
		<th>Vu</th>
		<th>VT</th>
	</tr>
	@foreach($detalle as $d)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$d->fad_cantidad}}</td>
		<td>{{$d->pro_descripcion}}</td>
		<td style="text-align:right; ">{{ number_format($d->fad_vu,2) }}</td>
		<td style="text-align:right; ">{{ number_format($d->fad_vt,2) }}</td>
	</tr>
	@endforeach	
	<tr>
		<td colspan="3" style="text-align:right;">Subt:</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align:right;">Desc:{{$factura->fac_descuento}}</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align:right;">IVA:</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align:right;">Total:</td>
	</tr>
</table>
