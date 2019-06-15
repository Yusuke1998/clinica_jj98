@extends('sistema.pdf.template')
@section('content')
<div class="container">
	<div class="center ancho">
		<h3>{{ $title[0] }}</h3>
	</div>
	<table id="tabla">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cedula</th>
				<th>Telefono</th>
				<th>Correo electronico</th>
				<th>Usuario</th>
				<th>Rol</th>
			</tr>
		</thead>
		<tbody>
			@foreach($medicos as $medico)
			<tr>
				<td>{{ $medico->firstname }}</td>
				<td>{{ $medico->lastname }}</td>
				<td>{{ $medico->ci }}</td>
				<td>{{ $medico->telephone1 }}</td>
				<td>{{ $medico->user->email }}</td>
				<td>{{ $medico->user->username }}</td>
				<td>{{ $medico->user->rol }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection