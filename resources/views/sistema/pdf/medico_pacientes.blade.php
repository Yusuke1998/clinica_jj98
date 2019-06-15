@extends('sistema.pdf.template')
@section('content')
<div class="container">
	<div class="center ancho">
		<h3>{{ $title[0] }} {{ $medico->firstname }} {{ $medico->lastname }}</h3>
	</div>
	<table id="tabla">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cedula</th>
				<th>Telefono</th>
				<th>Correo Electronico</th>
			</tr>
		</thead>
		<tbody>
			@foreach($medico->patients as $paciente)
			<tr>
				<td>{{ $paciente->firstname }}</td>
				<td>{{ $paciente->lastname }}</td>
				<td>{{ $paciente->ci }}</td>
				<td>{{ $paciente->telephone1 }}</td>
				<td>{{ $paciente->email }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection