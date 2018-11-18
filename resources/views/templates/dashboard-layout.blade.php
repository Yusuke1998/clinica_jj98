<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title> @yield('title') </title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    {{-- datatables --}}
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>
  </head>

  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h4 class="text-white">SISTEMA III.</h4>
              <p class="text-muted">Clinica privada, sistema hecho para la materia de sistema 3 con la profesora Angela Lugo.</p>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    @guest 
                        <ul style="list-style: none;" class="list-group">
                          <li><a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('acceder') }}">{{ __('Acceder') }}</a></li>
                          <li><a class="list-group-item list-group-item-action list-group-item-secondary" href="{{ route('registrar') }}">{{ __('Registrar') }}</a></li>
                        </ul>
                    @else
                        <div class="panel">
                        @if(Auth::user()->rol=="admin")
                          <div class="text-white panel-title">
                            Administrador
                          </div>
                          <div class="panel-body">
                          <img width="100" class=" float-left img-thumbnail" src="{{asset('img/admin.png')}}" alt="administrador">
                          </div>
                        @endif

                        @if(Auth::user()->rol=="receptionist")
                        <div class="text-white panel-title">
                            Recepcionista
                          </div>
                          <div class="panel-body">
                          <img width="100" class=" float-left img-thumbnail" src="{{asset('img/recepcionista.png')}}" alt="recepcionista">
                          </div>
                        @endif

                        @if(Auth::user()->rol=="doctor")
                          <div class="text-white panel-title">
                            Medico
                          </div>
                          <div class="panel-body">
                          <img width="100" class=" float-left img-thumbnail" src="{{asset('img/doctor.png')}}" alt="medico">
                          </div>
                        @endif
                          <div class="panel-footer">
                            <a class="btn btn-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Cerrar') }}
                            </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                          </div>
                        </div>

                  @endguest
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Clinica S.I.</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
             @yield('content')
          </div>
        </div>
      </div>
    </main>
    <footer class="text-muted">
      <div class="container">
        <p>clinica-by_Jhonny_prz!</p>
      </div>
    </footer>
    @extends('layouts.script')
  </body>
</html>
