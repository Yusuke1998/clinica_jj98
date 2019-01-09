@extends('templates/dashboard-template')
@section('content-dashboard')
<div class="col-md-12">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Paciente</th>
				<th>Doctor</th>
				<th>Estatus</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($citas as $cita)
				<tr>
					<td>
						{{ $cita->calendar->date}}
					</td>
					<td>
						{{$cita->calendar->start_time_on}}
						{{($cita->calendar->start_time_on>12)?'pm':'am'}}
					</td>					
					<td>
						{{$cita->patient->firstname}}&nbsp{{$cita->patient->lastname}}
					</td>
					<td>
						{{$cita->doctor->firstname}}&nbsp{{$cita->doctor->lastname}}
					</td>
					<td>
						{{$cita->status}}
					</td>
					<td>
						<a title="Ver" href="{{route('citas.show',$cita->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>

						<a title="Editar" href="{{route('citas.edit',$cita->id)}}"><span class="glyphicon glyphicon-edit"></span></a>

						<a title="Eliminar" href="{{route('citas.delete',$cita->id)}}" title=""><span class="glyphicon glyphicon-trash"></span></a>
						
						{{-- <form action="{{route('citas.destroy',$cita->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE">

							<button onclick="return confirm('Seguro de eliminar?')" class="btn btn-danger btn-sm" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
						</form> --}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop