@extends('sistema.pdf.template')
@section('content')
<div class="container">
	<div class="center ancho">
		<h3>{{ $title[0] }} {{ $expediente->patient->firstname }} {{ $expediente->patient->lastname }}</h3>
	</div>
	<div class="div">
		<p class="p">Fecha de Nacimiento: {{ $expediente->dayDate }}</p>
		<p class="p">Altura: {{ $expediente->height }}</p>
		<p class="p">Peso: {{ $expediente->weight }}</p>
		<p class="p">Alergia: {{ ($expediente->allergy)?$expediente->allergy:'N/A' }}</p>
		<p class="p">Cirugias: {{ ($expediente->surgeries)?$expediente->surgeries:'N/A' }}</p>
		<p class="p">Enfermedad Actual: {{ ($expediente->currentCondition)?$expediente->currentCondition->name:'N/A' }}</p>
		<p class="p">Enfermedad Heredada: {{ ($expediente->inheritedDisease)?$expediente->inheritedDisease->name:'N/A' }}</p>
		<p class="p">Tipo de Sangre: {{ ($expediente->bloodtype)?$expediente->bloodtype->name:'N/A' }}</p>
		<p class="p">Etnia Indigena: {{ ($expediente->ethnicgroup)?$expediente->ethnicgroup->name:'N/A' }}</p>
	</div>
</div>
@endsection