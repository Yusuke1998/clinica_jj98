@extends('templates/dashboard-template')
@section('content-dashboard')
	<table id="example" class="table table-bordered">
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Monto</th>
				<th>Paciente</th>
				<th>Medico</th>
				<th>Usuario</th>
				<th>Fecha</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($facturas as $factura)
			<tr>
				<td>{{ $factura->code }}</td>
				<td>{{ $factura->amountPaylable }}&nbspBs.S</td>
				<td>
					{{ $factura->appointment->patient->firstname }}&nbsp{{ $factura->appointment->patient->lastname }}
				</td>
				<td>
					{{ $factura->appointment->doctor->firstname }}&nbsp{{ $factura->appointment->doctor->lastname }}
				</td>
				<td>{{ $factura->user->username }}</td>
				<td>{{ $factura->created_at->format('d-m-Y') }}</td>
				<td>
					<a title="Ver" href="{{route('facturas.show',$factura->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop