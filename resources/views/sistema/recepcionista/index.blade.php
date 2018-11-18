@extends('templates.dashboard-layout')
@section('title') Recepcionista @endsection
@section('content')
<div class="col-md-12">
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> @yield('btn-modal','Nuevo')
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"> @yield('btn-modal','Nuevo') </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
            <form action="{{route('recepcionistas.store')}}" method="POST">
            @csrf
		      <div class="modal-body row">
		      	<div class="form-group col-md-4">
		      		<label for="firstname">Nombres</label>
		      		<input required id="firstname" class="form-control" type="text" name="firstname">
		      	</div>
		      	<div class="form-group col-md-4">
		      		<label for="lastname">Apellidos</label>
		      		<input required id="lastname" class="form-control" type="text" name="lastname">
		      	</div>
		      	<div class="form-group col-md-4">
		      		<label for="ci">Cedula</label>
		      		<input required name="ci" id="ci" class="form-control" type="number">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="telephones1">Telefono(1)</label>
		      		<select required name="typeT1">
		      			<option value="casa">casa</option>
		      			<option value="oficina">oficina</option>
		      			<option value="movil">movil</option>
		      		</select>
		      		<input name="telephones1" id="telephones1" class="form-control" type="tel" required>
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="telephones2">Telefono(2)</label>
		      		<select name="typeT2">
		      			<option value="casa">casa</option>
		      			<option value="oficina">oficina</option>
		      			<option value="movil">movil</option>
		      		</select>
		      		<input placeholder="(Opcional)" name="telephones2" id="telephones2" class="form-control" type="tel">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="address1">Direccion(1)</label>
		      		<select name="typeA1">
		      			<option value="Casa">Casa</option>
		      			<option value="Trabajo">Trabajo</option>
		      			<option value="Residencia">Residencia</option>
		      		</select>
		      		<input required id="address1" class="form-control" type="text" name="address1">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="address2">Direccion(2)</label>
		      		<select name="typeA2">
		      			<option value="Casa">Casa</option>
		      			<option value="Trabajo">Trabajo</option>
		      			<option value="Residencia">Residencia</option>
		      		</select>
		      		<input placeholder="(Opcional)" id="address2" class="form-control" type="text" name="address2">
		      	</div>
		      	<div class="form-group col-md-4">
		      		<label for="username">Nombre de Usuario</label>
		      		<input id="username" class="form-control" type="text" name="username">
		      	</div>
		      	<div class="form-group col-md-4">
		      		<label for="password">Contraseña de Usuario</label>
		      		<input id="password" class="form-control" type="password" name="password">
		      	</div>
		      	<div class="form-group col-md-4">
		      		<label for="email">Correo Electronico de Usuario</label>
		      		<input required name="email" id="email" class="form-control" type="email">
		      	</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		      </div>
            </form>
	    </div>
	  </div>
	</div>
</div>

<div class="col-md-12">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cedula</th>
				<th>Creado</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($recepcionistas as $recepcionista)
				<tr>
					<td>{{$recepcionista->firstname}}</td>
					<td>{{$recepcionista->lastname}}</td>
					<td>{{$recepcionista->ci}}</td>
					<td>{{($recepcionista->created_at)?$recepcionista->created_at->diffForHumans():'No hay registro...'}}</td>
					<td>
					<div class="btn-group">
						<a class="btn btn-warning btn-sm" href="{{route('recepcionistas.show',$recepcionista->id)}}">Ver</a>
						<a class="btn btn-success btn-sm" href="{{route('recepcionistas.edit',$recepcionista->id)}}">Editar</a>
						
						<form action="{{route('recepcionistas.destroy',$recepcionista->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button onclick="return confirm('Seguro de eliminar?')" class="btn btn-danger btn-sm" type="submit">Eliminar</button>
						</form>
					</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection