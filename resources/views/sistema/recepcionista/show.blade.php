@extends('templates.dashboard-template')
@section('content-dashboard')
<div class="col-md-12">
<h1>{{$recepcionista->firstname}} {{$recepcionista->lastname}}</h1>
<div class="row">
	<div class="col-md-2">
		Usuario:
	</div>
	<div class="col-md-10">
		{{$recepcionista->user->username}}
	</div>
	<div class="col-md-2">
		Nombres:
	</div>
	<div class="col-md-10">
		{{$recepcionista->firstname}}
	</div>
	<div class="col-md-2">
		Apellidos:
	</div>
	<div class="col-md-10">
		{{$recepcionista->lastname}}
	</div>
	<div class="col-md-2">
		Cedula:
	</div>
	<div class="col-md-10">
		{{$recepcionista->ci}}
	</div>
	<div class="col-md-2">
		Correo Electronico:
	</div>
	<div class="col-md-10">
		{{$recepcionista->user->email}}
		@if($recepcionista->email2)
		/ {{$recepcionista->email2}}
		@endif
	</div>
	<div class="col-md-2">
		Telefono:
	</div>
	<div class="col-md-10">
		{{$recepcionista->telephone1}}
		@if($recepcionista->telephone2)
		/ {{$recepcionista->telephone2}}
		@endif
	</div>
	<div class="col-md-2">
		Direccion:
	</div>
	<div class="col-md-10">
		{{$recepcionista->address1}}
		@if($recepcionista->address2)
		/ {{$recepcionista->address2}}
		@endif
	</div>
</div>
</div>
@endsection