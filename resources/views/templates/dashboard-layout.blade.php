<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="JhonnyPrz">
    <link rel="icon" href="">
    <title> @yield('title','CLINICA JJPM') </title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('fullcalendar/fullcalendar.css')}}"/>
  </head>

  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <p class="text-muted">Clinica privada, sistema hecho para la materia de sistema 3 con la profesora Angela Lugo.</p>
            </div>
            <div class="col-md-2">
              @guest
                  <p class="h5 text-center text-white">Debes iniciar sesion para acceder al sistema clinico!</p>
              @else
                <div class="">
                  @if(Auth::user()->rol=="admin")
                    <div class="panel-body">
                        <center><img src="{{ asset('img/LGA.png') }}" width="100" alt="ADMINISTRADOR"></center>
                      <img width="100" class=" float-left img-thumbnail" src="{{asset('img/admin.png')}}" alt="administrador">
                      <a class="btn btn-success" style="width: 100px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar?</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                    </div>
                  @endif

                  @if(Auth::user()->rol=="receptionist")
                    <div class="panel-body">
                        <center><img src="{{ asset('img/LGR.png') }}" width="100" alt="RECEPCIONISTA"></center>
                      <img width="100" class=" float-left img-thumbnail" src="{{asset('img/recepcionista.png')}}" alt="recepcionista">
                      <a class="btn btn-success" style="width: 100px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar?</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                    </div>
                  @endif

                  @if(Auth::user()->rol=="doctor")
                    <div class="panel-body">
                        <center><img src="{{ asset('img/LGD.png') }}" width="100" alt="MEDICO"></center>
                      <img width="100" class=" float-left img-thumbnail" src="{{asset('img/doctor.png')}}" alt="medico">
                      <a class="btn btn-success" style="width: 100px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar?</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                    </div>
                  @endif
                </div>
              @endguest
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="{{ URL('/') }}" class="navbar-brand d-flex align-items-center">
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
