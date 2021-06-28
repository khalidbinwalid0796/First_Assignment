<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Laravel</title>

  <!-- public/css/app.css-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('backend/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body>

  
<div id="app">

 

  <router-view></router-view>
  <!-- /#wrapper -->
</div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- public/js/app.js-->
  <script src="{{ asset('js/app.js')}}"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
  <!--   <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->



  <!-- Core plugin JavaScript-->
  <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('backend/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('backend/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script src="{{ asset('backend/js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
