@extends('templates/dashboard-template')
@section('content-dashboard')
<div class="container row">
	<div class="col-md-12">
		<img src="{{ asset('img/logos/logo_clinica.png') }}">
	</div>
	<div class="col-md-12">
		<p class="text-center h6 pull-right">SENIAT</p>
	</div>
	<div class="col-md-4">
		<label class="form-control">Rif: {{ $configuracion->rif }}</label>
	</div>
	<div class="col-md-4">
		<label class="form-control">Telefono: {{ $configuracion->telephone }}</label>
	</div>
	<div class="col-md-4">
		<label class="form-control">Clinica: {{ $configuracion->name }}</label>
	</div>
	<div class="col-md-12">
		<label class="form-control text-center">Dirección: {{ $configuracion->address }}</label>
	</div>
	<hr>
	<div class="col-md-6">
		<label class="form-control">Codigo: {{ $factura->code }}</label>
	</div>
	<div class="col-md-6">
		<label class="form-control">Total: {{ $factura->amountPaylable }}&nbspBs.S</label>
	</div>
	<div class="col-md-6">
		<label class="form-control">Paciente: {{ $factura->appointment->patient->firstname }}&nbsp{{ $factura->appointment->patient->lastname }}</label>
	</div>
	<div class="col-md-6">
		<label class="form-control">Medico: {{ $factura->appointment->doctor->firstname }}&nbsp{{ $factura->appointment->doctor->lastname }}</label>
	</div>
	<div class="col-md-12">
		<p class="h5 text-center">Detalles de cita</p>
	</div>
	<div class="col-md-6">
		<label class="form-control">Razon: {{ $factura->appointment->calendar->title }}</label>
	</div>
	<div class="col-md-6">
		<label class="form-control">Consultorio: {{ $factura->appointment->doctor->consultingroom->number }}</label>
	</div>
	<div class="col-md-6">
		<label class="form-control">Dia: {{ $factura->appointment->calendar->date }}</label>
	</div>
	<div class="col-md-6">
		<label class="form-control">Hora: {{ $factura->appointment->calendar->start_time_on }}&nbsp{{ ($factura->appointment->calendar->start_time_on <='12')?'am':'pm' }}</label>
	</div>









    <div class="col-md-12">
		<a href="#" target="_blank" class="btn btn-warning"><i class="glyphicon glyphicon-print"></i> Imprimir</a>

		<a href="#" class="btn btn-primary pull-right" style="margin-right: 5px;">
		<i class="glyphicon glyphicon-download"></i> PDF
		</a>
    </div>
</div>
@stop