@extends('templates/dashboard-template')
@section('content-dashboard')
<p class="h4 col-md-12 text-center">Consultorios</p>

<div class="col-md-12">
	<table id="example" class="table table-bordered">
		<thead>
			<tr>
				<th>Número</th>
				<th>Localizacion</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($consultorios as $consultorio)
			<tr>
				<td>{{ $consultorio->number }}</td>
				<td>{{ $consultorio->location }}</td>
				<td>
					<form action="{{ Route('consultorios.destroy',$consultorio->id) }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						<input type="submit" class="btn btn-flat btn-sm btn-danger" name="btn" value="Eliminar">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<hr>

<form action="{{ Route('consultorios.store') }}" method="post" id="especialidad-form">
	{{ csrf_field() }}
	<div class="col-md-12">
		<div class="form-group">
			<input type="text" class="form-control" name="number" placeholder="Número del consultorio">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<textarea class="form-control" name="location" placeholder="Localizacion especifica del consultorio"></textarea>
		</div>
	</div>
	<div class="col-md-12 form-group">
		<input type="submit" name="btn" value="Guardar" class="btn btn-primary btn-block">
	</div>
</form>

@stop