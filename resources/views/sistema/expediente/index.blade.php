@extends('templates/dashboard-template')
@section('content-dashboard')
<div class="col-md-12">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Paciente</th>
				<th>Enfermedad Actual</th>
				<th>Enfermedad Heredada</th>
				<th>Creado</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($expedientes as $expediente)
				<tr>
					<td>{{$expediente->patient->firstname}}&nbsp{{$expediente->patient->lastname}}</td>
					<td>{{$expediente->currentCondition->name}}</td>
					<td>{{($expediente->inheritedDisease)?$expediente->inheritedDisease->name:'No posee'}}</td>

					<td>{{($expediente->created_at)?$expediente->created_at->diffForHumans():'No hay registro...'}}</td>
					<td>
					<div class="btn-group">
						<a class="btn btn-warning btn-sm" href="{{route('expedientes.show',$expediente->id)}}">Ver</a>
						<a class="btn btn-success btn-sm" href="{{route('expedientes.edit',$expediente->id)}}">Editar</a>
						
						<form action="{{route('expedientes.destroy',$expediente->id)}}" method="post">
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