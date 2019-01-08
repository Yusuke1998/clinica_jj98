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
					<div class="btn-group">
						<a class="btn btn-warning btn-sm" href="{{route('medicos.show',$medico->id)}}">Ver</a>
						<a class="btn btn-success btn-sm" href="{{route('medicos.edit',$medico->id)}}">Editar</a>
						
						<form action="{{route('medicos.destroy',$medico->id)}}" method="post">
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