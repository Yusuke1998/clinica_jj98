@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
@section('content-dashboard')
<form action="{{route('expedientes.store')}}" method="POST">
  @csrf
  <div class="row">
  	<input type="hidden" name="user_id" value="{{ Auth::User()->id }}">

	<div class="col-md-12 form-group">
      <label for="patient_id">Paciente</label>
      <select class="form-control" id="patient_id" name="patient_id">
      	@forelse($pacientes as $paciente)
      		<option value="{{ $paciente->id }}">{{ $paciente->firstname }}&nbsp{{ $paciente->lastname }}</option>
      	@empty
      		<option>No hay pacientes registrados!</option>
      	@endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="height">Alto</label>
      <input id="height" min="1" max="250"  class="form-control" type="number" name="height">
    </div>

    <div class="col-md-4 form-group">
      <label for="weight">Peso</label>
      <input id="weight" min="1" max="250"  class="form-control" type="number" name="weight">
    </div>
    
    <div class="col-md-4 form-group">
      <label for="age">Alergia</label>
      <input id="allergy" class="form-control" type="text" name="allergy">
    </div>

    <div class="col-md-4 form-group">
      <label for="date">Fecha de Nacimiento</label>
      <input id="date" class="form-control" type="date" name="dayDate">
    </div>
    
    <div class="col-md-4 form-group">
      <label for="currentCondition">Enfermedad Actual</label>
      <select class="form-control" id="currentCondition" name="currentCondition_id">
        @forelse($enfermedades as $enfermedad)
          <option value="{{ $enfermedad->id }}">{{ $enfermedad->name }}</option>
        @empty
          <option>No hay enfermedades registradas!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="inheritedDisease_id">Enfermedad Heredada</label>
      <select class="form-control" id="inheritedDisease_id" name="inheritedDisease_id">
          <option selected value="">Ninguna</option>
        @forelse($enfermedades as $enfermedad)
          <option value="{{ $enfermedad->id }}">{{ $enfermedad->name }}</option>
        @empty
          <option>No hay enfermedades registradas!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="ethnicGroup">Grupo Etnico</label>
      <select class="form-control" id="ethnicGroup" name="ethnic_group_id">
          <option selected value="">Ninguno</option>
        @forelse($etnias as $etnia)
          <option value="{{ $etnia->id }}">{{ $etnia->name }}</option>
        @empty
          <option>No hay etnias registradas!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="bloodType">Tipo de sangre</label>
      <select class="form-control" id="bloodType" name="blood_type_id">
        <option selected value="">Sin Definir</option>
        @forelse($sangres as $sangre)
          <option value="{{ $sangre->id }}">{{ $sangre->name }}</option>
        @empty
          <option>No hay tipos de sangre registrados!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="surgeries">Cirugias</label>
      <textarea placeholder="..." id="surgeries" class="form-control" type="text" name="surgeries"></textarea>
    </div>

  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>
@stop