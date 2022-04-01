<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  {{-- <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" /> --}}
  <!--CSS datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

</head>

<body class="">
  <div class="wrapper ">

    {{-- Sidebar --}}
    @include('includes.admin.sidebar')


    <div class="main-panel">
      <!-- Navbar -->
      @include('includes.admin.navbar')


      @yield('content')

    </div>
  </div>

    @include('includes.admin.footer')

  <!--   Core JS Files   -->
  <script src="{{ asset('admin/assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('admin/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('admin/assets/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  {{-- <script src="{{ asset('admin/assets/demo/demo.js') }}"></script> --}}


  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

    <!-- Datatables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

  @yield('script')

</body>

</html>
