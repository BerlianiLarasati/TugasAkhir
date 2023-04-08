<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.layout.include.head')
</head>

<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

  <!-- Begin page -->
  <div id="wrapper">


    <!-- Topbar Start -->
    @include('admin.layout.include.navbar')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.layout.include.leftsidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">

        @yield('content')

      </div> <!-- content -->

      <!-- Footer Start -->
      @include('admin.layout.include.footer')
      <!-- end Footer -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


  </div>
  <!-- END wrapper -->

  <!-- Right Sidebar -->
  @include('admin.layout.include.rightsidebar')
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- Vendor -->
  <script src="{{asset('adminto/libs/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('adminto/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('adminto/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset('adminto/libs/node-waves/waves.min.js')}}"></script>
  <script src="{{asset('adminto/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('adminto/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('adminto/libs/feather-icons/feather.min.js')}}"></script>

  <!-- knob plugin -->
  <script src="{{asset('adminto/libs/jquery-knob/jquery.knob.min.js')}}"></script>

  <!--Morris Chart-->
  <script src="{{asset('adminto/libs/morris.js06/morris.min.js')}}"></script>
  <script src="{{asset('adminto/libs/raphael/raphael.min.js')}}"></script>

  <!-- Dashboar init js-->
  <script src="{{asset('adminto/js/pages/dashboard.init.js')}}"></script>

  <!-- App js-->
  <script src="{{asset('adminto/js/app.min.js')}}"></script>

  <!-- third party js -->
  <script src="{{asset('adminto/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('adminto/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('adminto/libs/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{asset('adminto/libs/pdfmake/build/vfs_fonts.js')}}"></script>
  <!-- third party js ends -->

  <!-- Datatables init -->
  <script src="{{ asset('adminto/js/pages/datatables.init.js') }}"></script>

  
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets/js/script-table.js') }}"></script>
</body>

</html>