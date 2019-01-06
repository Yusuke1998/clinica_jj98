@extends('templates/dashboard-template')
@section('content-dashboard')
	<div class="row">
		<div class="col-md-12">
			<label class="form-control">Paciente {{ $expediente->patient->firstname }}&nbsp{{ $expediente->patient->lastname }}</label>
		</div>
		<div class="col-md-6">
			<label class="form-control">Alto: {{ $expediente->height }}</label>
		</div>
		<div class="col-md-6">
			<label class="form-control">Peso: {{ $expediente->weight }}</label>
		</div>
		{{-- 12 col --}}
		<div class="col-md-6">
			<label class="form-control">Alergia: {{ ($expediente->allergy)?$expediente->allergy:'No registrada' }}</label>
		</div>
		<div class="col-md-6">
			<label class="form-control">Fecha de nacimiento: {{ $expediente->dayDate }}</label>
		</div>
		{{-- 12 col --}}
		<div class="col-md-6">
			<label class="form-control">Enfermedad Actual: {{ ($expediente->currentCondition)?$expediente->currentCondition->name:'No registrada' }}</label>
		</div>
		<div class="col-md-6">
			<label class="form-control">Enfermedad Heredada: {{ ($expediente->inheritedDisease)?$expediente->inheritedDisease->name:'No registrada' }}</label>
		</div>
		{{-- 12 col --}}
		<div class="col-md-6">
			<label class="form-control">Tipo de sangre: {{ ($expediente->bloodtype)?$expediente->bloodtype->name:'No registrada' }}</label>
		</div>
		<div class="col-md-6">
			<label class="form-control">Etnia: {{ ($expediente->ethnicgroup)?$expediente->ethnicgroup->name:'No registrada' }}</label>
		</div>
		{{-- 12 col --}}
		<div class="col-md-12">
			<label class="form-control">Cirugias: {{ ($expediente->surgeries)?$expediente->surgeries:'No registrada' }}</label>
		</div>
		<div class="col-md-12 btn-group">
			<a class="btn btn-info pull-right" href="{{route('expedientes.edit',$expediente->id)}}" title="Editar expediente">Editar</a>

			<a class="btn btn-info pull-right" href="{{route('evoluciones.nueva',$expediente->id)}}" title="Nueva evolucion">Agregar Evolucion</a>

			<a class="btn btn-success pull-right" href="#" title="Imprimir pdf">PDF</a>
		</div>
	</div>
@stop