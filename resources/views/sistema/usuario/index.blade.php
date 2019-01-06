@extends('templates/dashboard-template')
@section('content-dashboard')
<div class="col-md-12">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Usuario</th>
				<th>Correo Electronico</th>
				<th>Rol</th>
				<th>Creado</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->username}}</td>
					<td>{{$usuario->email}}</td>
					<td>{{$usuario->rol}}</td>
					<td>{{($usuario->created_at)?$usuario->created_at->diffForHumans():'No hay registro...'}}</td>
					<td>
					<div class="btn-group">
						<a class="btn btn-primary btn-sm" href="{{route('usuarios.edit',$usuario->id)}}">Editar</a>
						
						<form action="{{route('usuarios.destroy',$usuario->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button onclick="return confirm('Seguro de eliminar?')" class="btn btn-primary btn-sm" type="submit">Eliminar</button>
						</form>
					</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection