@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
@section('content-dashboard')
<form action="{{route('usuarios.update',$editaru->id)}}" method="POST">
    @csrf
      <input type="hidden" name="_method" value="PUT">
      <div class="modal-body">
      	<div class="form-group">
      		<label>Nombre de Usuario</label>
      		<input value="{{$editaru->username}}" class="form-control" type="text" name="username" value="{{$editaru->username}}">
      	</div>
      	<div class="form-group">
      		<label>Contraseña de Usuario</label>
      		<input class="form-control" type="password" name="password" placeholder="Ingresa una nueva contraseña">
      	</div>
      	<div class="form-group">
      		<label>Correo Electronico</label>
      		<input value="{{$editaru->email}}" name="email" class="form-control" type="email" value="{{$editaru->email}}">
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
@endsection