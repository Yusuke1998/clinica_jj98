@extends('sistema.pdf.template')
@section('content')
<div class="container">
	<div class="center ancho">
		<h3>{{ $title[0] }} {{ $paciente->firstname }} {{ $paciente->lastname }}</h3>
	</div>
	<table id="tabla">
		<thead>
			<tr>
				<th>Fecha</th>
				<th>Enfermedad</th>
				<th>Sintoma</th>
				<th>Tratamiento</th>
			</tr>
		</thead>
		<tbody>
			@foreach($evoluciones as $evolucion)
			<tr>
				<td>{{ $evolucion->created_at->format('d-m-Y') }}</td>
				<td>{{ $evolucion->disease->name }}</td>
				<td>{{ $evolucion->symptom }}</td>
				<td>{{ $evolucion->treatment }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection