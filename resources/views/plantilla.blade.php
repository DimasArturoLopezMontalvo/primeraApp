<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="{{ asset('../storage/app/public/descarga.png') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EDR-EVENTOS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/summernote/summernote-bs4.min.css">
  <!-- datatables bootstrap -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- datatables bootstrap responsive -->
  <link rel="stylesheet" href="http://localhost/primeraApp/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  @if(Auth::user())
    <!-- /wrapper -->
    <div class="wrapper">
      @include('modulos.cabecera')

      @if(auth()->user()->rol=="Vendedor")
        @include('modulos.menuV')
      @else
        @include('modulos.menu')
      @endif
      
      @yield('contenido')
    </div>
    <!-- /wrapper -->
  @else
    @yield('content')
  @endif

 
  <!-- jQuery -->
<script src="http://localhost/primeraApp/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/primeraApp/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost/primeraApp/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/primeraApp/public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/primeraApp/public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://localhost/primeraApp/public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost/primeraApp/public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/primeraApp/public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/primeraApp/public/plugins/moment/moment.min.js"></script>
<script src="http://localhost/primeraApp/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost/primeraApp/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost/primeraApp/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/primeraApp/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/primeraApp/public/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/primeraApp/public/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo This is only for demo purposes-->
<script src="http://localhost/primeraApp/public/dist/js/pages/dashboard.js"></script>

<!-- dataTables scripts -->
<script src="http://localhost/primeraApp/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/primeraApp/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- dataTables Responsive scripts -->
<script src="http://localhost/primeraApp/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="http://localhost/primeraApp/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script src="http://localhost/primeraApp/public/plugins/inputmask/jquery.inputmask.js"></script>
<script src="http://localhost/primeraApp/public/plugins/inputmask/jquery.inputmask.date.extensions.js"></script>
<script src="http://localhost/primeraApp/public/plugins/inputmask/jquery.inputmask.extensions.js"></script>


<!-- SweetAlert2 scripts -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(".dtUsers").DataTable({
    "language": {
      
        "sSearch": "Buscar:",
        "sEmptyTable": "No hay datos en la Tabla",
        "sZeroRecords": "No se encontraron resultados",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
        "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
        "oPaginate": {
          "sFirst": "Primero",
          "sLast": "Último",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
          
        },
        "sLoadingRecords": "Cargando...",
        "sLengthMenu": "Mostrar _MENU_ registros"
      }
  });
  $('.table').on('click','.EliminarUsuario',function(){
    var Uid = $(this).attr('Uid');
    var Usuario = $(this).attr('Usuario');
    Swal.fire({
      title: '¿Seguro que desea eliminar el Usuario: '+Usuario+' '+Uid+'?',
      icon: 'warning',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar',
      confirmButtonColor: '#3085d6',
    }).then((result)=>{
      if(result.isConfirmed){
        window.location = "Eliminar-Usuario/"+Uid;
      }
    })
  });
  $('.table').on('click','.EliminarCliente',function(){
    var Cid = $(this).attr('Cid');
    var Cliente = $(this).attr('Cliente');
    Swal.fire({
      title: '¿Seguro que desea eliminar el Empleado?: '+Cliente+'?',
      icon: 'warning',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar',
      confirmButtonColor: '#3085d6',
    }).then((result)=>{
      if(result.isConfirmed){
    
        window.location = "{{url('Eliminar-Cliente/')}}/"+Cid;
      }
    })
  });
  $('.table').on('click','.EliminarEvento',function(){
    var Eid = $(this).attr('Eid');
    var Evento = $(this).attr('Evento');
    Swal.fire({
      title: '¿Seguro que desea eliminar el Evento: '+Evento+' '+Eid+'?',
      icon: 'warning',
      showCancelButton: true,
      cancelButtonText: 'Cancelar',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar',
      confirmButtonColor: '#3085d6',
    }).then((result)=>{
      if(result.isConfirmed){
    
        window.location = "{{url('Eliminar-Evento/')}}/"+Eid;
      }
    })
  });
  $('data-mask').inputmask();
</script>

@if(session('UsuarioCreado')=='OK')
  <script type="text/javascript">
    Swal.fire(
      'El usuario ha sido creado',
      '',
      'success'
    );
  </script>
@elseif(session('EventoCreado')=='OK')
  <script type="text/javascript">
    Swal.fire(
      'Evento ha sido creado',
      '',
      'success'
    );
  </script>
@elseif(session('EmpleadoActualizado')=='OK')
  <script type="text/javascript">
    Swal.fire(
      'El Empleado ha sido actualizado',
      '',
      'success'
    );
  </script>
  @elseif(session('EventoActualizado')=='OK')
  <script type="text/javascript">
    Swal.fire(
      'El Evento ha sido actualizado',
      '',
      'success'
    );
  </script>
  @endif

<?php
  $exp = explode('/', $_SERVER["REQUEST_URI"]);
  echo $exp [3];
?>

@if($exp[3]=='Editar-Usuario')

<script type="text/javascript">
  $(document).ready(function(){
    $('#EditarUsuario').modal('toggle');
  });
</script>
@elseif($exp[3]=='Editar-Cliente')
<script type="text/javascript">
  $(document).ready(function(){
    $('#EditarCliente').modal('toggle');
  }); 
</script>
@elseif($exp[3]=='Editar-Evento')
<script type="text/javascript">
  $(document).ready(function(){
    $('#EditarEvento').modal('toggle');
  }); 
</script>
@endif 