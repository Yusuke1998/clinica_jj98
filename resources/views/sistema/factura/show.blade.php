@extends('templates/dashboard-template')
@section('content-dashboard')
<div class="container row">
	<div class="col-md-12">
		<p class="text-center h4">SENIAT</p>
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
		<label class="form-control">{{ $factura->appointment->patient->firstname }}&nbsp{{ $factura->appointment->patient->lastname }}</label>
	</div>
	<div class="col-md-6">
		<label class="form-control">{{ $factura->appointment->doctor->firstname }}&nbsp{{ $factura->appointment->doctor->lastname }}</label>
	</div>
    <div class="col-md-12">
		<a href="#" target="_blank" class="btn btn-warning"><i class="glyphicon glyphicon-print"></i> Imprimir</a>

		<a href="#" class="btn btn-primary pull-right" style="margin-right: 5px;">
		<i class="glyphicon glyphicon-download"></i> PDF
		</a>
    </div>
</div>
@stop