@extends('templates.dashboard-template')
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
			@foreach($medicos as $medico)
				<tr>
					<td>{{$medico->firstname}}</td>
					<td>{{$medico->lastname}}</td>
					<td>{{$medico->ci}}</td>
					<td>{{($medico->created_at)?$medico->created_at->diffForHumans():'No hay registro...'}}</td>
					<td>
					<a title="Ver" href="{{route('medicos.show',$medico->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>

					<a title="Editar" href="{{route('medicos.edit',$medico->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

					<a title="Eliminar" href="{{route('medicos.delete',$medico->id)}}" title=""><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection