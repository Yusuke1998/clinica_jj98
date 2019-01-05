@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
@section('content-dashboard')
<div class="container">
	<div class="col-md-12">
		<p class="h3 text-center">Datos de la clinica</p>
		<form class="form" enctype="multipart/form-data" action="{{ Route('configuraciones.update','1') }}" method="post">

			{{ csrf_field() }}

			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="user_id" value="{{ \Auth::User()->id }}">

			<div class="col-md-6">
				<div class="form-group">
					<input type="text" name="name" placeholder="Nombre" class="form-control" value="{{ ($configuracion[0]->name)?$configuracion[0]->name:'' }}">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<input type="text" name="rif" value="{{ ($configuracion[0]->rif)?$configuracion[0]->rif:'' }}" class="form-control" placeholder="Rif">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<input type="text" name="telephone" value="{{ ($configuracion[0]->telephone)?$configuracion[0]->telephone:'' }}" class="form-control" placeholder="Telefono">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<input type="number" value="{{ ($configuracion[0]->iva)?$configuracion[0]->iva:'' }}" name="iva" class="form-control" placeholder="Iva">
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<textarea type="text" name="address" class="form-control" placeholder="Direccion">{{ ($configuracion[0]->address)?$configuracion[0]->address:'' }}</textarea>
				</div>
			</div>

			
			<div class="form-group col-md-6 pull-left">
				<input type="file" id="logo" name="logo" placeholder="Logo del sistema" class="form-control">
			</div>

			<div class="form-group col-md-6 pull-right">
				<p class="text-center h4">Logo actual</p>
				<center>
					<img src="{{ ($configuracion[0]->logo)?asset('img/logos').'/'.$configuracion[0]->logo:asset('img/logos').'/logo.png' }}" width="100" alt="Logo actual">
					
				</center>
			</div>

			<input type="submit" class="btn btn-primary btn-block" name="btn" value="Guardar">
		</form>
	</div>

</div>
@stop