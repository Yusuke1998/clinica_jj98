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
			@foreach($pacientes as $paciente)
				<tr>
					<td>{{$paciente->firstname}}</td>
					<td>{{$paciente->lastname}}</td>
					<td>{{$paciente->ci}}</td>
					<td>{{($paciente->created_at)?$paciente->created_at->diffForHumans():'No hay registro...'}}</td>
					<td>
						<a title="Ver" href="{{route('pacientes.show',$paciente->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>

						<a title="Editar" href="{{route('pacientes.edit',$paciente->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

						<a title="Eliminar" href="{{route('pacientes.delete',$paciente->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection