@extends('sistema.pdf.template')
@section('content')
<div class="container">
	<div class="center ancho">
		<h3>{{ $title[0] }} {{ $evolucion->casefile->patient->firstname }} {{ $evolucion->casefile->patient->lastname }}</h3>
	</div>
</div>
@endsection