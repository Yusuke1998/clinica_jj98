@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
@section('content-dashboard')
<div class="col-md-12">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Paciente</th>
				<th>Doctor</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($citas as $cita)
				<tr>
					<td>
						{{str_replace('T'.$cita->calendar->start_time_on, '', $cita->calendar->start)}}
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
						<div class="btn-group">
							<a class="btn btn-info btn-sm" href="{{route('citas.show',$cita->id)}}">Ver</a>
							<a class="btn btn-success btn-sm" href="{{route('citas.edit',$cita->id)}}">Editar</a>
							
							<form action="{{route('citas.destroy',$cita->id)}}" method="post">
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