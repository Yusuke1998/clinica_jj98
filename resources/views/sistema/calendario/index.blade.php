@extends('templates/dashboard-template')
@section('title')
Clinica Privada
@endsection
@section('content-dashboard')
<style>
	#loading {
		text-align: center;
	    top: 10px;
	    padding: 1px;
	}
</style>
<div id='script-warning' class="h2 form-control" align="center"><p>CITAS</p></div>

<div class="alert alert-info" id='loading'>Cargando...</div>

<div style="color: black;" id='calendar'></div>
  <hr>
  <div class="row">
    <p class=" col-md-12 text-center h5">Estado de citas!</p>

    <div class="text-center col-xs-3 col-md-3">
      <p>
        <span style="padding: 5px; border-radius: 15%" class="bg-danger">Cancelada</span></p>
    </div>

    <div class="text-center col-xs-3 col-md-3">
      <p>
        <span style="padding: 5px; border-radius: 15%" class="bg-info">Pendiente</span></p>
    </div>

    <div class="text-center col-xs-3 col-md-3">
      <p>
        <span style="padding: 5px; border-radius: 15%" class="bg-success">Completa</span></p>
    </div>

    <div class="text-center col-xs-3 col-md-3">
      <p>
        <span style="padding: 5px; border-radius: 15%" class="bg-warning">No asistio</span></p>
    </div>
  </div>

@endsection

@section('script-person')
<script src="{{ asset('fullCalendar/locale/es.js') }}"></script>
<script>
  
  $(document).ready(function() {
      var url = '/sistema/calendario';
      $.get(url,function(data){
          calendario(data)
      });
  });

  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      editable: false,
      navLinks: true, // can click day/week names to navigate views
      eventLimit: true,
      selectable: true,
      events: 
      {
        url: '/sistema/calendario',
          error: function() {
            $('#script-warning').show();
          }
        },
        loading: function(bool) {
          $('#loading').toggle(bool);
      }
    });
  });

</script>
@stop