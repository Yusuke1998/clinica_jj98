@extends('templates.dashboard-template')
@section('content-dashboard')
<div class="col-md-12">
<h1>{{$medico->firstname}} {{$medico->lastname}}</h1>
<div class="row">
	<div class="col-md-3">
		Usuario:
	</div>
	<div class="col-md-9">
		{{$medico->user->username}}
	</div>
	<div class="col-md-3">
		Nombres:
	</div>
	<div class="col-md-9">
		{{$medico->firstname}}
	</div>
	<div class="col-md-3">
		Apellidos:
	</div>
	<div class="col-md-9">
		{{$medico->lastname}}
	</div>
	<div class="col-md-3">
		Cedula:
	</div>
	<div class="col-md-9">
		{{$medico->ci}}
	</div>
	<div class="col-md-3">
		Correo Electronico:
	</div>
	<div class="col-md-9">
		{{$medico->user->email}}
		@if($medico->email2)
		/ {{$medico->email2}}
		@endif
	</div>
	<div class="col-md-3">
		Telefono:
	</div>
	<div class="col-md-9">
		{{$medico->telephone1}}
		@if($medico->telephone2)
		/ {{$medico->telephone2}}
		@endif
	</div>
	<div class="col-md-3">
		Direccion:
	</div>
	<div class="col-md-9">
		{{$medico->address1}}
		@if($medico->address2)
		/ {{$medico->address2}}
		@endif
	</div>
	<div class="col-md-3">
		Consultorio:
	</div>
	<div class="col-md-9">
		@if($medico->consultingroom)
			{{ $medico->consultingroom->number }}
		@endif
	</div>
	<div class="col-md-3">
		Especialidad(es):
	</div>
	<div class="col-md-9">
		@if($medico->specialties)
			@foreach($medico->specialties as $esp)
				<li>{{ $esp->name }}</li>
			@endforeach
		@endif
	</div>
</div>
</div>
@endsection