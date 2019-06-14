@extends('templates/dashboard-template')
@section('content-dashboard')
	<div class="row">
		<div class="col-md-8">
			<label class="form-control">Paciente: {{ $evolucion->casefile->patient->firstname }}&nbsp{{ $evolucion->casefile->patient->lastname }}</label>
		</div>
		<div class="col-md-4">
			<label class="form-control">Fecha: {{ $evolucion->created_at->format('d-m-Y') }}</label>
		</div>
		<div class="col-md-12">
			<label class="form-control">Enfermedad: {{ $evolucion->disease->name }}</label>
		</div>
		<div class="col-md-12">
			<textarea name="symptom" id="symptom" disabled class="form-control">Sintoma: {{ $evolucion->symptom }}</textarea>
		</div>
		<div class="col-md-12">
			<textarea name="treatment" id="treatment" disabled class="form-control">Tratamiento: {{ $evolucion->treatment }}</textarea>
		</div>
		<div class="col-md-12 btn-group">
			<a class="btn btn-info pull-right" href="{{route('evoluciones.edit',$evolucion->id)}}" title="Editar evolucion">Editar</a>

			{{-- <a class="btn btn-info pull-right" href="{{route('evoluciones.nueva',$evolucion->casefile->id)}}" title="Nueva evolucion para {{ $evolucion->casefile->patient->firstname }} {{ $evolucion->casefile->patient->lastname }}">Agregar Evolucion al expediente</a> --}}

			<a class="btn btn-success pull-right" href="#" title="Imprimir pdf">PDF</a>
		</div>
	</div>
@stop