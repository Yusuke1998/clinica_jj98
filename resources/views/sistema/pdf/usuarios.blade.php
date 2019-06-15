@extends('sistema.pdf.template')
@section('content')
<div class="container">
	<div class="center ancho">
		<h3>{{ $title[0] }}</h3>
	</div>
	<table id="tabla">
		<thead>
			<tr>
				<th>Nombre de usuario</th>
				<th>Correo electronico</th>
				<th>Rol</th>
				<th>Creado</th>
				<th>Actualizado</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
			<tr>
				<td>{{ $usuario->username }}</td>
				<td>{{ $usuario->email }}</td>
				<td>{{ $usuario->rol }}</td>
				<td>{{ $usuario->created_at->format('d-m-Y') }}</td>
				<td>{{ $usuario->updated_at->format('d-m-Y') }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection