@extends('templates.dashboard-template')
@section('content-dashboard')
<div class="col-md-12">
<h1>{{$paciente->firstname}} {{$paciente->lastname}}</h1>
<div class="row">
	<div class="col-md-2">
		Nombres:
	</div>
	<div class="col-md-10">
		{{$paciente->firstname}}
	</div>
	<div class="col-md-2">
		Apellidos:
	</div>
	<div class="col-md-10">
		{{$paciente->lastname}}
	</div>
	<div class="col-md-2">
		Cedula:
	</div>
	<div class="col-md-10">
		{{$paciente->ci}}
	</div>
	<div class="col-md-2">
		Correo Electronico:
	</div>
	<div class="col-md-10">
		{{$paciente->email1}}
		@if($paciente->email2)
		/ {{$paciente->email2}}
		@endif
	</div>
	<div class="col-md-2">
		Telefono:
	</div>
	<div class="col-md-10">
		{{$paciente->telephone1}}
		@if($paciente->telephone2)
		/ {{$paciente->telephone2}}
		@endif
	</div>
	<div class="col-md-2">
		Direccion:
	</div>
	<div class="col-md-10">
		{{$paciente->address1}}
		@if($paciente->address2)
		/ {{$paciente->address2}}
		@endif
	</div>
	<div class="col-md-12">
		<a class="btn btn-info pull-right" href="{{route('evoluciones.nueva',$paciente->id)}}" title="Expediente">Ver expediente</a>
	</div>
</div>
</div>
@endsection