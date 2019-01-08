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
					<div class="btn-group">
						<a class="btn btn-warning btn-sm" href="{{route('pacientes.show',$paciente->id)}}">Ver</a>
						<a class="btn btn-success btn-sm" href="{{route('pacientes.edit',$paciente->id)}}">Editar</a>
						
						<form action="{{route('pacientes.destroy',$paciente->id)}}" method="post">
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