@extends('templates/dashboard-template')
@section('content-dashboard')
<p class="h4 col-md-12 text-center">Especialidades</p>

<div class="col-md-12">
	<table id="example" class="table table-bordered">
		<thead>
			<tr>
				<th>Especialidad</th>
				<th>Detalles</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($especialidades as $especialidad)
			<tr>
				<td>{{ $especialidad->name }}</td>
				<td>{{ $especialidad->details }}</td>
				<td>
					<form action="{{ Route('especialidades.destroy',$especialidad->id) }}" method="post">
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

<form action="{{ Route('especialidades.store') }}" method="post" id="especialidad-form">
	{{ csrf_field() }}
	<div class="col-md-12">
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Nombre de especialidad">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<textarea class="form-control" name="details" placeholder="Detalles de la especialidad"></textarea>
		</div>
	</div>
	<div class="col-md-12 form-group">
		<input type="submit" name="btn" value="Guardar" class="btn btn-primary btn-block">
	</div>
</form>

@stop