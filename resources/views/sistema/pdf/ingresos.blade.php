@extends('sistema.pdf.template')
@section('content')
<div class="container">
	<div class="center ancho">
		<h3>{{ $title[0] }}</h3>
	</div>
	<table id="tabla">
		<thead>
			<tr>
				<th>Paciente</th>
				<th>Medico</th>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Estatus</th>
				<th>Monto</th>
			</tr>
		</thead>
		<tbody>
			@foreach($ingresos as $ingreso)
			<tr>
				<td>{{ $ingreso->appointment->patient->firstname }} {{ $ingreso->appointment->patient->lastname }}</td>
				<td>{{ $ingreso->appointment->doctor->firstname }} {{ $ingreso->appointment->doctor->lastname }}</td>
				<td>{{ date("d-m-Y", strtotime($ingreso->appointment->calendar->date)) }}</td>
				<td>{{$ingreso->appointment->calendar->start_time_on}} {{($ingreso->appointment->calendar->start_time_on>12)?'pm':'am'}}</td>
				<td>{{ $ingreso->appointment->status }}</td>
				<td>{{ $ingreso->total }}</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>TOTAL+IVA</td>
				<td>{{ $ingresos->sum('total') }}</td>
			</tr>
		</tfoot>
	</table>
</div>
@endsection