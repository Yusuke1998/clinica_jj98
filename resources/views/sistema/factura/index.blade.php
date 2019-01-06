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
				<td>{{ $factura->created_at }}</td>
				<td>
					<a href="{{ Route('facturas.show',$factura->id) }}" class="btn btn-info btn-block" title="ver">Ver</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop