@extends('templates.dashboard-layout')
@section('title') Usuario @endsection
@section('content')
<div class="col-md-12">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal"> @yield('btn-modal','Nuevo')
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"> @yield('btn-modal','Nuevo') </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
            <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
		      <div class="modal-body">
		      	<div class="form-group">
		      		<label for="username">Nombre de Usuario</label>
		      		<input id="username" class="form-control" type="text" name="username">
		      	</div>
		      	<div class="form-group">
		      		<label for="password">Contraseña de Usuario</label>
		      		<input id="password" class="form-control" type="password" name="password">
		      	</div>
		      	<div class="form-group">
		      		<label for="email">Correo Electronico</label>
		      		<input name="email" id="email" class="form-control" type="email">
		      	</div>
		      	<div class="form-group">
		      		<label for="rol">Tipo de usuario</label>
		      		<select class="form-control" id="rol" name="rol">
		      			<option value="receptionist">Recepcionista</option>
		      			<option value="doctor">Medico</option>
		      			<option value="admin">Administrador</option>
		      		</select>
		      	</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		      </div>
            </form>
	    </div>
	  </div>
	</div>
</div>

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