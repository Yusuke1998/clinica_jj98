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
						<a title="Ver" href="{{route('expedientes.show',$expediente->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>

						<a title="Editar" href="{{route('expedientes.edit',$expediente->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

						<a title="Eliminar" href="{{route('expedientes.delete',$expediente->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop