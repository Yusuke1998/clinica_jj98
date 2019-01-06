{{-- <script src="{{asset('js/app.js')}}"></script> --}}
<script  type="text/javascript" src="{{asset('DataTables/jquery/jquery-3.3.1.js')}}"></script>
<script  type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script  type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
<script  type="text/javascript" src='{{asset('fullcalendar/lib/moment.min.js') }}'></script>
<script  type="text/javascript" src="{{asset('chosen/chosen.jquery.js')}}"></script>

{{-- <script  type="text/javascript" src='{{ asset('fullcalendar/lib/jquery.min.js') }}'></script> --}}
<script  type="text/javascript" src='{{ asset('fullcalendar/fullcalendar.min.js') }}'></script>

<!-- DATA TABLES -->
<script>
  $(function () {
      $("#example").DataTable(
        {
         "language":{
         "lengthMenu":"Mostrar _MENU_ registros por página.",
         "zeroRecords": "Lo sentimos. No se encontraron registros.",
         "sInfo": "Mostrando: _START_ de _END_ - Total registros: _TOTAL_ ",
         "infoEmpty": "No hay registros aún.",
         "infoFiltered": "(filtrados de un total de _MAX_ registros)",
         "search" : "Búsqueda",
         "LoadingRecords": "Cargando ...",
         "Processing": "Procesando...",
         "SearchPlaceholder": "Escribe...",
         "paginate": {
         "previous": "Anterior",
         "next": "Siguiente", 
            }
          }
      }
      );
  });
</script>
<!-- DATA TABLES -->

<!-- CHOSEN-->
<script>
    $(".my_select_box").chosen({
    disable_search_threshold: 10,
    allow_single_deselect: true,
    no_results_text: "No se encontraron resultados!",
    width: "100%"
  });
</script>
<!-- CHOSEN-->

@yield('script-person')