@extends('templates/dashboard-template')
@section('content-dashboard')
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
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>
@endsection