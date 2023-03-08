<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alfian Yulianto | {{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('') }}/tamplates/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('') }}/tamplates/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('') }}/tamplates/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="{{ url('') }}/tamplates/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ url('') }}/tamplates/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

  <!-- jQuery -->
  <script src="{{ url('') }}/tamplates/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ url('') }}/tamplates/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
        height="60" width="60">
    </div>

    <!-- Navbar -->
    @include('partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    @include('partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid mt-5">
          @yield('main_content')
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Bootstrap 4 -->
  <script src="{{ url('') }}/tamplates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ url('') }}/tamplates/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/jszip/jszip.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{ url('') }}/tamplates/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
  <!-- AdminLTE App -->
  <script src="{{ url('') }}/tamplates/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ url('') }}/tamplates/dist/js/pages/dashboard.js"></script>
</body>

</html>
