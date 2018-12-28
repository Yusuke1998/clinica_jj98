@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
@section('content-dashboard')
<div class="col-md-12">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cedula</th>
				<th>Creado</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($recepcionistas as $recepcionista)
				<tr>
					<td>{{$recepcionista->firstname}}</td>
					<td>{{$recepcionista->lastname}}</td>
					<td>{{$recepcionista->ci}}</td>
					<td>{{($recepcionista->created_at)?$recepcionista->created_at->diffForHumans():'No hay registro...'}}</td>
					<td>
					<div class="btn-group">
						<a class="btn btn-warning btn-sm" href="{{route('recepcionistas.show',$recepcionista->id)}}">Ver</a>
						<a class="btn btn-success btn-sm" href="{{route('recepcionistas.edit',$recepcionista->id)}}">Editar</a>
						
						<form action="{{route('recepcionistas.destroy',$recepcionista->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button onclick="return confirm('Seguro de eliminar?')" class="btn btn-danger btn-sm" type="submit">Eliminar</button>
						</form>
					</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection