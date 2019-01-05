@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
@section('content-dashboard')
<div class="row">
	<div class="col-md-6">
		<p class="h5 text-center">Cambiar logo del sistema</p>
		<form action="" method="post" enctype="multi-form">
			<div class="form-group">
				<input type="file" name="logo" placeholder="Logo del sistema" class="form-control">
				<input type="submit" class="btn btn-primary btn-block" name="" value="Cambiar">
			</div>
		</form>
	</div>
	<div class="col-md-6">
		<p class="h5 text-center">Logo actual</p>
		<div class="panel">
			<div class="panel-boddy">
				<img src="" title="Logo actual">
			</div>
			<div class="panel-footer">
				<p class="text-center h6">No hay logo</p>
			</div>
		</div>
	</div>
</div>
@stop