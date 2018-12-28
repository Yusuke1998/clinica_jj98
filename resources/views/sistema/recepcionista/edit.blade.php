@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
@section('content-dashboard')
<form action="{{route('recepcionistas.update',$editarr->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">
    @csrf
      <div class="modal-body">
      	<div class="form-group">
      		<label for="firstname">Nombres</label>
      		<input id="firstname" value="{{$editarr->firstname}}" class="form-control" type="text" name="firstname">
      	</div>
      	<div class="form-group">
      		<label for="lastname">Apellidos</label>
      		<input id="lastname" value="{{$editarr->lastname}}" class="form-control" type="text" name="lastname">
      	</div>
      	<div class="form-group">
      		<label for="ci">Cedula</label>
      		<input name="ci" id="ci" value="{{$editarr->ci}}" class="form-control" type="text">
      	</div>
      	<div class="form-group">
      		<label for="telephones1">Telefono</label>
      		<input name="telephone1" value="{{$editarr->telephone1}}" id="telephones1" class="form-control" type="text">
      	</div>

      	<div class="form-group">
      		<label for="telephone2">Telefono 2</label>
      		<input id="telephone2" class="form-control" placeholder="Opcional" value="{{$editarr->telephone2}}" type="text" name="telephone2">
      	</div>

      	<div class="form-group">
      		<label for="email1">Correo Electronico</label>
      		<input id="email1" class="form-control" value="{{$editarr->email1}}" type="text" name="email1">
      	</div>

      	<div class="form-group">
      		<label for="email2">Correo Electronico 2</label>
      		<input id="email2" class="form-control" placeholder="Opcional" value="{{$editarr->email2}}" type="text" name="email2">
      	</div>

      	<div class="form-group">
      		<label for="address1">Direccion</label>
      		<input id="address1" class="form-control" value="{{$editarr->address1}}" type="text" name="address1">
      	</div>

      	<div class="form-group">
      		<label for="address2">Direccion 2</label>
      		<input id="address2" class="form-control" placeholder="Opcional" value="{{$editarr->address2}}" type="text" name="address2">
      	</div>
      	
        <button type="submit" class=" form-control btn btn-primary">Actualizar</button>
      </div>
    </form>
</form>
@stop