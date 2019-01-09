@extends('templates/dashboard-template')
@section('content-dashboard')
<form action="{{route('expedientes.update',$expediente->id)}}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="PUT">
  <div class="row">
  	<input type="hidden" name="user_id" value="{{ Auth::User()->id }}">

	<div class="col-md-12">
      <label class="form-control">Paciente: {{ $expediente->patient->firstname }}&nbsp{{ $expediente->patient->lastname }}</label>
    </div>

    <div class="col-md-4 form-group">
      <label for="height">Alto</label>
      <input id="height" value="{{ $expediente->height }}" min="1" max="250"  class="form-control" type="number" name="height">
    </div>

    <div class="col-md-4 form-group">
      <label for="weight">Peso</label>
      <input id="weight" min="1" max="250" value="{{ $expediente->weight }}"  class="form-control" type="number" name="weight">
    </div>
    
    <div class="col-md-4 form-group">
      <label for="age">Alergia</label>
      <input id="allergy" class="form-control" value="{{ $expediente->allergy }}" type="text" name="allergy">
    </div>

    <div class="col-md-4 form-group">
      <label for="date">Fecha de Nacimiento</label>
      <input id="date" class="form-control" type="date" value="{{ $expediente->dayDate }}" name="dayDate">
    </div>
    
    <div class="col-md-4 form-group">
      <label for="currentCondition">Enfermedad Actual</label>
      <select class="form-control my_select_box" id="currentCondition" name="currentCondition_id">
        	<option selected value="{{ $expediente->currentCondition->id }}">{{ $expediente->currentCondition->name }}</option>
        @forelse($enfermedades as $enfermedad)
        	@if($enfermedad->id == $expediente->currentCondition->id)
        	@else
          		<option value="{{ $enfermedad->id }}">{{ $enfermedad->name }}</option>
        	@endif
        @empty
          <option>No hay enfermedades registradas!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="inheritedDisease_id">Enfermedad Heredada</label>
      <select class="form-control my_select_box" id="inheritedDisease_id" name="inheritedDisease_id">
          <option value="">Ninguna</option>
        	<option selected value="{{ $expediente->inheritedDisease->id }}">{{ $expediente->inheritedDisease->name }}</option>
        @forelse($enfermedades as $enfermedad)
        	@if($enfermedad->id == $expediente->inheritedDisease->id)
        	@else
          		<option value="{{ $enfermedad->id }}">{{ $enfermedad->name }}</option>
        	@endif
        @empty
          <option>No hay enfermedades registradas!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="ethnicGroup">Grupo Etnico</label>
      <select class="form-control my_select_box" id="ethnicGroup" name="ethnic_group_id">
          <option value="">Ninguno</option>
          <option selected value="{{ $expediente->ethnicgroup->id }}">{{ $expediente->ethnicgroup->name }}</option>
        @forelse($etnias as $etnia)
        	@if($etnia->id == $expediente->ethnicgroup->id )
        	@else
          		<option value="{{ $etnia->id }}">{{ $etnia->name }}</option>
        	@endif
        @empty
          <option>No hay etnias registradas!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="bloodType">Tipo de sangre</label>
      <select class="form-control my_select_box" id="bloodType" name="blood_type_id">
        <option value="">Ninguno</option>
          <option selected value="{{ $expediente->bloodtype->id }}">{{ $expediente->bloodtype->name }}</option>
        @forelse($sangres as $sangre)
        	@if($sangre->id == $expediente->bloodtype->id )
        	@else
          		<option value="{{ $sangre->id }}">{{ $sangre->name }}</option>
        	@endif
        @empty
          <option>No hay tipo de sangre registradas!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-4 form-group">
      <label for="surgeries">Cirugias</label>
      @if($expediente->surgeries)
      	<textarea placeholder="..." id="surgeries" class="form-control" type="text" name="surgeries">{{ $expediente->surgeries }}</textarea>
      	@else
      	<textarea placeholder="..." id="surgeries" class="form-control" type="text" name="surgeries"></textarea>
      @endif
    </div>

  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </div>
</form>
@stop