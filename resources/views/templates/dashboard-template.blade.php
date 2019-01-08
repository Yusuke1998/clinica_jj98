@extends('templates/dashboard-layout')
@section('title') {{ (App\config::find(1)->name)?App\config::find(1)->name:'Clinica' }} @endsection
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
              @if(Auth::user()->rol=="admin")
                <li><a title="Usuarios" data-toggle="modal" href="#UsuariosModal"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
              @endif
              @if(Auth::user()->rol=="admin" || Auth::user()->rol=="doctor")
                <li><a title="Medicos" data-toggle="modal" href="#MedicosModal"><span class="glyphicon glyphicon-plus-sign"></span> Medicos</a></li>
              @endif
              @if(Auth::user()->rol=="admin" || Auth::user()->rol=="receptionist")
                <li><a title="Recepcionistas" data-toggle="modal" href="#RecepcionistasModal"><span class="glyphicon glyphicon-plus-sign"></span> Recepcionistas</a></li>
              @endif
                <li><a title="Pacientes" data-toggle="modal" href="#PacientesModal"><span class="glyphicon glyphicon-plus-sign"></span> Pacientes</a></li>

                <li><a title="Calendario" data-toggle="modal" href="#CalendarioModal"><span class="glyphicon glyphicon-plus-sign"></span> Citas</a></li>
              @if(Auth::user()->rol=="admin")
                <li><a title="Opciones" data-toggle="modal" href="#OpcionesModal"><span class="glyphicon glyphicon-plus-sign"></span> Opciones</a></li>
              @endif
                <li>
                  <a style="width: 100px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="glyphicon glyphicon-off"></span> Cerrar sesion
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                </li>
            </ul>
        </li>
        <hr>
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Reportes <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse" id="menu2">
                <li><a title="Facturas emitidas" data-toggle="modal" href="#FacturasModal"><span class="glyphicon glyphicon-euro"></span> Facturas</a></li>
            </ul>
          @if(Auth::user()->rol=="admin")
            <ul class="list-unstyled collapse" id="menu2">
                <li><a title="Reporte general del sistema" data-toggle="modal" href="#GeneralModal"><span class="glyphicon glyphicon-plus"></span> General</a></li>
            </ul>
          @endif
        </li>
      </ul> 
      <hr>    
    </div>
    <!-- /col-3 -->
    <div class="col-md-9">
      @yield('content-dashboard')
    </div>
      <div class="modal" id="UsuariosModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para usuarios</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body row">
              <div class="col-md-6">
                <ul>
                  <li><a href="{{ Route('usuarios.index') }}" title="Todos los Usuarios">Lista de Usuarios</a></li>
                  <li><a href="{{ Route('usuarios.create') }}" title="Crear nuevo Usuario">Nuevo</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <center><img src="{{ asset('img/usuarios.png') }}" width="100px"></center>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
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
            <div class="modal-body row">
              <div class="col-md-6">
                <ul>
                  <li><a href="{{ Route('medicos.index') }}" title="Lista de medicos">Lista de medicos</a></li>
                  <li><a href="{{ Route('medicos.create') }}" title="Crear nuevo">Nuevo</a></li>
                  <li><a href="{{ Route('consultorios.index') }}" title="Consultorios">Consultorios</a></li>
                  <li><a href="{{ Route('especialidades.index') }}" title="Especialidades">Especialidades</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <center><img src="{{ asset('img/medico.png') }}" width="100px"></center>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
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
            <div class="modal-body row">
              <div class="col-md-6">
                <ul>
                  <li><a href="{{ Route('recepcionistas.index') }}" title="Todos los Recepcionistas">Lista de Recepcionistas</a></li>
                  <li><a href="{{ Route('recepcionistas.create') }}" title="Crear nueva recepcionista">Nueva</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <center><img src="{{ asset('img/recepcionistas.png') }}" width="100px"></center>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
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
            <div class="modal-body row">
              <div class="col-md-6">
                <ul>
                  <li><a href="{{ Route('pacientes.index') }}" title="Todos los Pacientes">Lista de Pacientes</a></li>
                  <li><a href="{{ Route('pacientes.create') }}" title="Nuevo Paciente">Nuevo Paciente</a></li>
                  <li><a href="{{ Route('expedientes.index') }}" title="Lista de expedientes">Expedientes</a></li>
                  <li><a href="{{ Route('expedientes.create') }}" title="Crear expediente">Nuevo Expediente</a></li>
                  <li><a href="{{ Route('evoluciones.index') }}" title="Lista de evoluciones">Evoluciones</a></li>
                  <li><a href="{{ Route('evoluciones.create') }}" title="Crear evolucion">Nueva Evolucion de paciente</a></li>
                  <li><a href="{{ Route('citas.create') }}" title="Crear cita">Nueva Cita</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <center><img src="{{ asset('img/pacientes.png') }}" width="100px"></center>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->

      <div class="modal" id="CalendarioModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Opciones para citas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
              <ul>
                <li><a href="{{ Route('citas.index') }}" title="Todas las citas">Lista de Citas</a></li>
                <li><a href="{{ Route('citas.create') }}" title="Nueva cita">Nueva Cita</a></li>
              </ul>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
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
            <div class="modal-body row">
              <div class="col-md-6">
                <ul>
                  <li><a href="{{ Route('configuraciones.index') }}" title="Caracteristicas del sistema">Editar datos del sistema</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <center><img src="{{ asset('img/configuracion.png') }}" width="100px"></center>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
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
            <div class="modal-body row">
              <div class="col-md-6">
                <ul>
                  <li><a href="{{ Route('facturas.index') }}" title="Todas las facturas emitidas por el sistema">Todas las facturas</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <center><img src="{{ asset('img/facturas.png') }}" width="100px"></center>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->

            <div class="modal" id="GeneralModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Reportes generales del sistema</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body row">
              <div class="col-md-6">
                <ul>
                  <li><a href="#" title="Estado de ingresos">Grafica de ingresos</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <center><img src="{{ asset('img/reportes.png') }}" width="100px"></center>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
    <!--/col-span-9-->
<!-- /Main -->
@endsection