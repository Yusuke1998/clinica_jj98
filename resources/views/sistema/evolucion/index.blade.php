@extends('templates/dashboard-template')
@section('content-dashboard')
<div class="col-md-12">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Paciente</th>
				<th>Enfermedad</th>
				<th>Sintoma</th>
				<th>Tratamiento</th>
				<th>Usuario</th>
				<th>Creado</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($evoluciones as $evolucion)
				<tr>
					<td>{{$evolucion->casefile->patient->firstname}}&nbsp{{$evolucion->casefile->patient->lastname}}</td>
					<td>{{$evolucion->disease->name}}</td>
					<td>{{$evolucion->symptom}}</td>
					<td>{{$evolucion->treatment}}</td>
					<td>{{$evolucion->user->username}}</td>

					<td>{{($evolucion->created_at)?$evolucion->created_at->diffForHumans():'No hay registro...'}}</td>
					<td>
						<a title="Ver" href="{{route('evoluciones.show',$evolucion->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>

						<a title="Editar" href="{{route('evoluciones.edit',$evolucion->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

						<a title="Eliminar" href="{{route('evoluciones.delete',$evolucion->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop