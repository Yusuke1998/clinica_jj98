@extends('templates.dashboard-layout')
@section('title') Usuario @endsection
@section('content')
<div class="col-md-12">
	<a href="#" class="float-right btn btn-success">Nuevo Usuario</a>
</div>
<div class="col-md-8">
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Nombre de Usuario</th>
				<th>Correo Electronico</th>
				<th>Rol</th>
				<th>Creado</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->username}}</td>
					<td>{{$usuario->email}}</td>
					<td>{{$usuario->rol}}</td>
					<td>{{($usuario->created_at)?$usuario->created_at->diffForHumans():'No hay registro...'}}</td>
					<td>
						<button class="btn btn-flat" onclick="editar();" id="editar">Edtar</button>

						<form action="{{route('usuarios.destroy',$usuario->id)}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button onclick="return confirm('Seguro de eliminar?')" class="btn btn-flat" cla type="submit">Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="col-md-4">
	<div id="app"> 
       <h1> Nombres </h1>
       @{{ $data | json }}
       @{{ $info }} 

    </div>
</div>
@endsection