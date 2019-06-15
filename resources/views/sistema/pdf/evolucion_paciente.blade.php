@extends('sistema.pdf.template')
@section('content')
<div class="container">
	<div class="center ancho">
		<h3>{{ $title[0] }} {{ $evolucion->casefile->patient->firstname }} {{ $evolucion->casefile->patient->lastname }}</h3>
	</div>
	<div class="div">
		<p class="p">Fecha: {{ $evolucion->created_at->format('d-m-Y') }}</p>
		<p class="p">Enfermedad Actual: {{ ($evolucion->disease)?$evolucion->disease->name:'N/A' }}</p>
		<p class="p">Sintoma: {{ ($evolucion->symptom)?$evolucion->symptom:'N/A' }}</p>
		<p class="p">Tratamiento: {{ ($evolucion->treatment)?$evolucion->treatment:'N/A' }}</p>
	</div>
</div>
@endsection