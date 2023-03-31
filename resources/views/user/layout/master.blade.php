<!DOCTYPE html>
<html lang="en">

<head>
  @include('user.layout.include.head')
</head>

<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

  <!-- Begin page -->
  <div id="wrapper">


    <!-- Topbar Start -->
    @include('user.layout.include.navbar')
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('user.layout.include.leftsidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">

        @yield('content')

      </div> <!-- content -->

      <!-- Footer Start -->
      @include('user.layout.include.footer')
      <!-- end Footer -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


  </div>
  <!-- END wrapper -->

  <!-- Right Sidebar -->
  @include('user.layout.include.rightsidebar')
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- Vendor -->
  <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
  <script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

  <!-- knob plugin -->
  <script src="{{asset('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

  <!--Morris Chart-->
  <script src="{{asset('assets/libs/morris.js06/morris.min.js')}}"></script>
  <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>

  <!-- Dashboar init js-->
  <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

  <!-- App js-->
  <script src="{{asset('assets/js/app.min.js')}}"></script>

  <!-- third party js -->
  <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
  <!-- third party js ends -->

  <!-- Datatables init -->
  <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
</body>

</html>