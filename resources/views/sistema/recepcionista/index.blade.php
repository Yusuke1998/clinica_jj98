@extends('templates/dashboard-template')
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
						<a title="Ver" href="{{route('recepcionistas.show',$recepcionista->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>

						<a title="Editar" href="{{route('recepcionistas.edit',$recepcionista->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

						<a title="Eliminar" href="{{route('recepcionistas.delete',$recepcionista->id)}}" title=""><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection