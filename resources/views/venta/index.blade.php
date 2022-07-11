@extends('layouts.miPlantilla')
@section('titulo','Inicio')
@section('contenido')
	<a href="{{route('venta.create')}}">Nueva materia</a>
	<table border='1' style='border-collapse:collapse'>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
			@foreach($listaVentas as $venta)
                <tr>
                    <th scope="row">{{$venta->id}}</th>
                    <td>{{$venta->producto}}</td>
                    <td>{{$venta->cantidad}}</td>
                    <td>{{$venta->precio}}</td>
                    <td>{{$venta->total}}</td>
					<td>
						<a href="#" class="btn">Modificar</a>
						<a href="#" class="btn">Eliminar</a>
					</td>
				</tr>
			@endforeach
		</tbody>			
	</table>
@endsection