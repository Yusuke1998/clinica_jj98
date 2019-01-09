@extends('templates/dashboard-template')
@section('content-dashboard')
<form action="{{route('medicos.update',$editard->id)}}" method="POST">
@csrf
<input type="hidden" name="_method" value="PUT">
  <div class="modal-body row">
  	<div class="form-group col-md-4">
  		<label for="firstname">Nombres</label>
  		<input required id="firstname" class="form-control" type="text" name="firstname" value="{{ $editard->firstname }}">
  	</div>
  	<div class="form-group col-md-4">
  		<label for="lastname">Apellidos</label>
  		<input required id="lastname" value="{{ $editard->lastname }}" class="form-control" type="text" name="lastname">
  	</div>
  	<div class="form-group col-md-4">
  		<label for="ci">Cedula</label>
  		<input required name="ci" value="{{ $editard->ci }}" id="ci" class="form-control" type="number">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="telephone1">Telefono</label>
  		<input name="telephone1" id="telephone1" value="{{ $editard->telephone1 }}" class="form-control" type="tel" required>
  	</div>
  	<div class="form-group col-md-6">
  		<label for="telephone2">Telefono(2)</label>
  		<input placeholder="(Opcional)" value="{{ $editard->telephone2 }}" name="telephone2" id="telephone2" class="form-control" type="tel">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="address1">Direccion</label>
  		<input required id="address1" value="{{ $editard->address1 }}" class="form-control" type="text" name="address1">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="address2">Direccion(2)</label>
  		<input placeholder="(Opcional)" id="address2" value="{{ $editard->address2 }}" class="form-control" type="text" name="address2">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="email1">Correo Electronico</label>
  		<input required name="email1" id="email1" value="{{ $editard->email1 }}" class="form-control" type="email">
  	</div>
  	<div class="form-group col-md-6">
  		<label for="email2">Correo Electronico 2</label>
  		<input name="email2" id="email2" value="{{ $editard->email2 }}" class="form-control" type="email">
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
          @if($consultorio->id == $editard->consultingroom->id)
            <option selected value="{{ $consultorio->id }}">{{ $consultorio->number }}</option>
          @else
          <option value="{{ $consultorio->id }}">{{ $consultorio->number }}</option>
          @endif
        @empty
          <option>No hay consultorios registrados!</option>
        @endforelse
      </select>
    </div>

  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </div>
</form>
@endsection