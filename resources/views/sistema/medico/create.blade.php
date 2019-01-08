@extends('templates/dashboard-template')
@section('content-dashboard')
<form action="{{route('medicos.store')}}" method="POST">
    @csrf
  <div class="modal-body row">
  	<div class="form-group col-md-4">
  		<label for="firstname">Nombres</label>
  		<input required id="firstname" class="form-control" type="text" name="firstname">
  	</div>
  	<div class="form-group col-md-4">
  		<label for="lastname">Apellidos</label>
  		<input required id="lastname" class="form-control" type="text" name="lastname">
  	</div>
  	<div class="form-group col-md-4">
  		<label for="ci">Cedula</label>
  		<input required name="ci" id="ci" class="form-control" type="number">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="telephone1">Telefono</label>
  		<input name="telephone1" id="telephone1" class="form-control" type="tel" required>
  	</div>
  	<div class="form-group col-md-6">
  		<label for="telephone2">Telefono 2</label>
  		<input placeholder="(Opcional)" name="telephone2" id="telephone2" class="form-control" type="tel">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="address1">Direccion</label>
  		<input required id="address1" class="form-control" type="text" name="address1">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="address2">Direccion 2</label>
  		<input placeholder="(Opcional)" id="address2" class="form-control" type="text" name="address2">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="email1">Correo Electronico</label>
  		<input required name="email1" id="email1" class="form-control" type="email">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="email2">Correo Electronico 2</label>
  		<input required placeholder="(Opcional)" name="email2" id="email2" class="form-control" type="email">
  	</div>

    {{-- Datos importante --}}

    <div class="col-md-6 form-group">
      <label for="specialty_id">Especialidad(es)</label>
      <select data-placeholder="Selecciona una o varias especialidades" class="form-control my_select_box" id="specialty_id" multiple name="specialty_id[]">
        @forelse($especialidades as $especialidad)
          <option value="{{ $especialidad->id }}">{{ $especialidad->name }}</option>
        @empty
          <option>No hay especialidades registradas!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-6 form-group">
      <label for="consultingroom_id">Consultorio</label>
      <select data-placeholder="Selecciona tu consultorio asignado" class="form-control my_select_box" id="consultingroom_id" name="consultingroom_id">
        @forelse($consultorios as $consultorio)
          <option value="{{ $consultorio->id }}">{{ $consultorio->number }}</option>
        @empty
          <option>No hay consultorios registrados!</option>
        @endforelse
      </select>
    </div>


  	<div class="form-group col-md-6">
  		<label for="username">Nombre de Usuario</label>
  		<input id="username" class="form-control" type="text" name="username">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="password">Contraseña de Usuario</label>
  		<input id="password" class="form-control" type="password" name="password">
  	</div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>
@endsection