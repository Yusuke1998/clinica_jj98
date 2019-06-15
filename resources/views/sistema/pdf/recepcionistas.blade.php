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
			@foreach($recepcionistas as $recepcionista)
			<tr>
				<td>{{ $recepcionista->firstname }}</td>
				<td>{{ $recepcionista->lastname }}</td>
				<td>{{ $recepcionista->ci }}</td>
				<td>{{ $recepcionista->telephone1 }}</td>
				<td>{{ $recepcionista->user->email }}</td>
				<td>{{ $recepcionista->user->username }}</td>
				<td>{{ $recepcionista->user->rol }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection