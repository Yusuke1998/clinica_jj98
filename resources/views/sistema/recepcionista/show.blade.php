@extends('templates.dashboard-layout')
@section('title') Recepcionista, {{$recepcionista->firstname}} {{$recepcionista->lastname}} @endsection
@section('content')
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
	</div>
	<div class="col-md-2">
		Telefono:
	</div>
	<div class="col-md-10">
		@foreach($recepcionista->telephones as $telephone)
		{{$telephone->number}} /
		@endforeach
	</div>
	<div class="col-md-2">
		Direccion:
	</div>
	<div class="col-md-10">
		@foreach($recepcionista->addresses as $address)
		{{$address->details}} /
		@endforeach
	</div>
</div>
</div>
@endsection