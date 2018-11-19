@extends('templates.dashboard-layout')
@section('title') Paciente @endsection
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
            <form action="{{route('pacientes.store')}}" method="POST">
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
		      		<label for="telephone1">Telefono</label>
		      		<input name="telephone1" id="telephone1" class="form-control" type="tel" required>
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="telephone2">Telefono(2)</label>
		      		<input placeholder="(Opcional)" name="telephone2" id="telephone2" class="form-control" type="tel">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="address1">Direccion</label>
		      		<input required id="address1" class="form-control" type="text" name="address1">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="address2">Direccion(2)</label>
		      		<input placeholder="(Opcional)" id="address2" class="form-control" type="text" name="address2">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="email1">Correo Electronico</label>
		      		<input required name="email1" id="email1" class="form-control" type="email">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="email2">Correo Electronico 2</label>
		      		<input required name="email2" id="email2" class="form-control" type="email">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="username">Nombre de Usuario</label>
		      		<input id="username" class="form-control" type="text" name="username">
		      	</div>
		      	<div class="form-group col-md-6">
		      		<label for="password">Contraseña de Usuario</label>
		      		<input id="password" class="form-control" type="password" name="password">
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

<div class="col-md-6">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cedula</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pacientes as $paciente)
				<tr>
					<td>{{$paciente->firstname}}</td>
					<td>{{$paciente->lastname}}</td>
					<td>{{$paciente->ci}}</td>
					<td>
					<div class="btn-group">
						<a class="btn btn-primary btn-sm" href="{{route('pacientes.show',$paciente->id)}}">Ver</a>
						<a class="btn btn-primary btn-sm" href="{{route('pacientes.edit',$paciente->id)}}">Editar</a>
						<form action="{{route('pacientes.destroy',$paciente->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button onclick="return confirm('Seguro de eliminar?')" class="btn btn-primary btn-sm" type="submit">Eliminar</button>
						</form>
					</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="col-md-6">
    @if($editarp)
	<form action="{{route('pacientes.update',$editarp->id)}}" method="POST">
      <input type="hidden" name="_method" value="PUT">
            @csrf
		      <div class="modal-body">
		      	<div class="form-group">
		      		<label for="firstname">Nombres</label>
		      		<input id="firstname" value="{{$editarp->firstname}}" class="form-control" type="text" name="firstname">
		      	</div>
		      	<div class="form-group">
		      		<label for="lastname">Apellidos</label>
		      		<input id="lastname" value="{{$editarp->lastname}}" class="form-control" type="text" name="lastname">
		      	</div>
		      	<div class="form-group">
		      		<label for="ci">Cedula</label>
		      		<input name="ci" id="ci" value="{{$editarp->ci}}" class="form-control" type="text">
		      	</div>
		      	<div class="form-group">
		      		<label for="telephones1">Telefono</label>
		      		<input name="telephone1" value="{{$editarp->telephone1}}" id="telephones1" class="form-control" type="text">
		      	</div>

		      	<div class="form-group">
		      		<label for="telephone2">Telefono 2</label>
		      		<input id="telephone2" class="form-control" placeholder="Opcional" value="{{$editarp->telephone2}}" type="text" name="telephone2">
		      	</div>

		      	<div class="form-group">
		      		<label for="email1">Correo Electronico</label>
		      		<input id="email1" class="form-control" value="{{$editarp->email1}}" type="text" name="email1">
		      	</div>

		      	<div class="form-group">
		      		<label for="email2">Correo Electronico 2</label>
		      		<input id="email2" class="form-control" placeholder="Opcional" value="{{$editarp->email2}}" type="text" name="email2">
		      	</div>

		      	<div class="form-group">
		      		<label for="address1">Direccion</label>
		      		<input id="address1" class="form-control" value="{{$editarp->address1}}" type="text" name="address1">
		      	</div>

		      	<div class="form-group">
		      		<label for="address2">Direccion 2</label>
		      		<input id="address2" class="form-control" placeholder="Opcional" value="{{$editarp->address2}}" type="text" name="address2">
		      	</div>
		      	
		        <button type="submit" class=" form-control btn btn-primary">Actualizar</button>
		      </div>
            </form>
    </form>
	@else
	       {!! redirect(route('pacientes.index')) !!}
	@endif
</div>
@endsection