@extends('templates/dashboard-template')
@section('content-dashboard')
	<form action="{{route('evoluciones.store')}}" method="POST">
  @csrf
  <div class="row">
  	<input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
    <div class="col-md-12 form-group">
      <select class="form-control my_select_box" name="casefile_id">
        @forelse($expedientes as $expediente)
          <option value="{{ $expediente->id }}">Expediente de: {{ $expediente->patient->firstname }}&nbsp{{ $expediente->patient->lastname }}</option>
        @empty
          <option>No hay expedientes disponibles!</option>
        @endforelse
      </select>
    </div>

    <div class="col-md-12 form-group">
      <label for="symptom">Sintoma</label>
      <textarea id="symptom" class="form-control" type="text" name="symptom"></textarea>
    </div>

    <div class="col-md-12 form-group">
      <label for="treatment">Tratamiento</label>
      <textarea id="treatment" class="form-control" type="text" name="treatment"></textarea>
    </div>
    
    <div class="col-md-12 form-group">
      <label for="disease_id">Enfermedad Actual</label>
      <select class="form-control my_select_box" id="disease_id" name="disease_id">
        @forelse($enfermedades as $enfermedad)
          <option value="{{ $enfermedad->id }}">{{ $enfermedad->name }}</option>
        @empty
          <option>No hay enfermedades registradas!</option>
        @endforelse
      </select>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form>
@stop