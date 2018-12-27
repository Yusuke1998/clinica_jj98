@extends('templates/dashboard-layout')
@section('title')
Clinica Privada
@endsection
@section('content')
<!-- Main -->
    <div class="col-md-3">
      <!-- Left column -->
      <a href="#" onclick="alert('')"><strong><i class="glyphicon glyphicon-asterisk"></i> Herramientas</strong></a>   
      <hr>
      <ul class="list-unstyled">
        <li class="nav-header"> <a class="" href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Opciones <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul style="height: auto;" class="list-unstyled in" id="userMenu">
                {{-- <li class="active"> <a href="{{ Route('home') }}"><i class="glyphicon glyphicon-home"></i> Inicio</a></li> --}}

                <li><a title="Usuarios" data-toggle="modal" href="#UsuariosModal"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>

                <li><a title="Medicos" data-toggle="modal" href="#MedicosModal"><span class="glyphicon glyphicon-plus-sign"></span> Medicos</a></li>

                <li><a title="Recepcionistas" data-toggle="modal" href="#RecepcionistasModal"><span class="glyphicon glyphicon-plus-sign"></span> Recepcionistas</a></li>

                <li><a title="Pacientes" data-toggle="modal" href="#PacientesModal"><span class="glyphicon glyphicon-plus-sign"></span> Pacientes</a></li>

                <li><a title="Calendario" data-toggle="modal" href="#CalendarioModal"><span class="glyphicon glyphicon-plus-sign"></span> Calendario</a></li>

                <li><a title="Opciones" data-toggle="modal" href="#OpcionesModal"><span class="glyphicon glyphicon-plus-sign"></span> Opciones</a></li>

                <li><a title="Cerrar sesion" data-toggle="modal" href="#CerrarSesionModal"><span class="glyphicon glyphicon-off"></span> Cerrar sesion</a></li>
            </ul>
        </li>
        <hr>
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Reportes <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse" id="menu2">
                <li><a title="Cerrar sesion" data-toggle="modal" href="#FacturasModal"><span class="glyphicon glyphicon-euro"></span> Facturas</a></li>
            </ul>
        </li>
      </ul>
           
      <hr>
    </div>
    <!-- /col-3 -->
    <div class="col-md-9">
      <p class="text-center h4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <!--/col-span-9-->
<!-- /Main -->
      <div class="modal" id="UsuariosModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para usuarios</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
      <div class="modal" id="MedicosModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para medicos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
      <div class="modal" id="RecepcionistasModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para recepcionistas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
      <div class="modal" id="PacientesModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para pacientes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
      <div class="modal" id="CalendarioModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para calendario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
      <div class="modal" id="OpcionesModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
      <div class="modal" id="CerrarSesionModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para cerrar sesion</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
      <div class="modal" id="FacturasModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para facturas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
@endsection