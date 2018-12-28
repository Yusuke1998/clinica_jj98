@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
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
					<div class="btn-group">
						<a class="btn btn-warning btn-sm" href="{{route('evoluciones.show',$evolucion->id)}}">Ver</a>
						<a class="btn btn-success btn-sm" href="{{route('evoluciones.edit',$evolucion->id)}}">Editar</a>
						
						<form action="{{route('evoluciones.destroy',$evolucion->id)}}" method="post">
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
@stop