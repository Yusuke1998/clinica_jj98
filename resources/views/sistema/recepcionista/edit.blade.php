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
		      		<label for="username">Nombres</label>
		      		<input id="username" class="form-control" type="text" name="username">
		      	</div>
		      	<div class="form-group">
		      		<label for="password">Apellidos</label>
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

<div class="col-md-8">
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
<div class="col-md-4">
    @if($editaru)
	<form action="{{route('usuarios.update',$editaru->id)}}" method="POST">
    @csrf
      <input type="hidden" name="_method" value="PUT">
      <div class="modal-body">
      	<div class="form-group">
      		<label>Nombre de Usuario</label>
      		<input value="{{$editaru->username}}" class="form-control" type="text" name="username" value="{{$usuario->username}}">
      	</div>
      	<div class="form-group">
      		<label>Contraseña de Usuario</label>
      		<input class="form-control" type="password" name="password" placeholder="Ingresa una nueva contraseña">
      	</div>
      	<div class="form-group">
      		<label>Correo Electronico</label>
      		<input value="{{$editaru->email}}" name="email" class="form-control" type="email" value="{{$usuario->email}}">
      	</div>
      	<div class="form-group">
      		<label>Tipo de usuario</label>
      		<select class="form-control" name="rol">
      			@if($editaru->rol=="receptionist")
      			     <option value="receptionist" selected>Recepcionista</option>
      			     <option value="doctor">Medico</option>

      			     <option value="admin">Administrador</option>
      			@endif
      			@if($editaru->rol=="doctor")
      			     <option value="receptionist">Recepcionista</option>
      			     <option value="doctor">Medico</option>
      			     <option value="admin" selected>Administrador</option>
      			@endif
      			@if($editaru->rol=="admin")
      			     <option value="receptionist">Recepcionista</option>
      			     <option value="doctor">Medico</option>
      			     <option value="admin" selected>Administrador</option>
      			@endif
      		</select>
            <button type="submit" class="form-control btn btn-primary">Actualizar</button>
      	</div>
      </div>
    </form>
	@else
	       {!! redirect(route('usuarios.index')) !!}
	@endif
</div>
@endsection