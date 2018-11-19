@extends('templates.dashboard-layout')
@section('title') medico, {{$medico->firstname}} {{$medico->lastname}} @endsection
@section('content')
<div class="col-md-12">
<h1>{{$medico->firstname}} {{$medico->lastname}}</h1>
<div class="row">
	<div class="col-md-2">
		Usuario:
	</div>
	<div class="col-md-10">
		{{$medico->user->username}}
	</div>
	<div class="col-md-2">
		Nombres:
	</div>
	<div class="col-md-10">
		{{$medico->firstname}}
	</div>
	<div class="col-md-2">
		Apellidos:
	</div>
	<div class="col-md-10">
		{{$medico->lastname}}
	</div>
	<div class="col-md-2">
		Cedula:
	</div>
	<div class="col-md-10">
		{{$medico->ci}}
	</div>
	<div class="col-md-2">
		Correo Electronico:
	</div>
	<div class="col-md-10">
		{{$medico->user->email}}
		@if($medico->email2)
		/ {{$medico->email2}}
		@endif
	</div>
	<div class="col-md-2">
		Telefono:
	</div>
	<div class="col-md-10">
		{{$medico->telephone1}}
		@if($medico->telephone2)
		/ {{$medico->telephone2}}
		@endif
	</div>
	<div class="col-md-2">
		Direccion:
	</div>
	<div class="col-md-10">
		{{$medico->address1}}
		@if($medico->address2)
		/ {{$medico->address2}}
		@endif
	</div>
</div>
</div>
@endsection