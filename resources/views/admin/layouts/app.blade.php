<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('asset/icon/dimaz4.png') }}" type="image/ico" />
    @hasSection('title')
    <title>@yield('title')</title>
    @else
    <title>Admin || Keuangan</title>
    @endif
    <style>
        #preloader {
            background: white url('asset/icon/logogif.gif') no-repeat center center;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 99999;
            opacity: 50%;
        }
    </style>
    <!-- <style>
        .dark-mode,
        .nav_menu,
        .x_panel,
        .left_col {
            background-color: #000;
            background: #000;
            color: #fff;
        }
    </style> -->
    <!-- Bootstrap -->
    <link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('backend/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}"
        rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('backend/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet') }}">
    <!-- Select2 -->
    <link href="{{ asset('backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet') }}">
    <!-- Switchery -->
    <link href="{{ asset('backend/vendors/switchery/dist/switchery.min.css" rel="stylesheet') }}">
    <!-- starrr -->
    <link href="{{ asset('backend/vendors/starrr/dist/starrr.css" rel="stylesheet') }}">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet') }}">
    <!-- Custom Theme Style -->
    <link href="{{ asset('backend/build/css/custom.min.css')}}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @hasSection('style')
    @yield('style')
    @endif
</head>

<body class="nav-md">
    @include('admin.components.preload.preload')
    <!-- <div id="preloader" class="preloader"></div> -->
    <div class="container body">
        <div class="main_container">
            @include('sweetalert::alert')
            <!-- Sidebar -->
            @include('admin.layouts.sidebar')
            <!-- /Sidebar -->

            <!-- header navigation -->
            @include('admin.layouts.header')
            <!-- /header navigation -->

            <!-- page content -->
            @yield('content')
            <!-- /page content -->

            <!-- footer content -->
            @include('admin.layouts.footer')
            <!-- /footer content -->
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('backend/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('backend/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('backend/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('backend/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('backend/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('backend/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset('backend/vendors/switchery/dist/switchery.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('backend/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ asset('backend/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('backend/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('backend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
    <script src="{{ asset('backend/vendors/starrr/dist/starrr.js') }}"></script>
    <!-- PNotify -->
    <script src="{{ asset('backend/vendors/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{ asset('backend/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
    <script src="{{ asset('backend/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('backend/build/js/custom.min.js') }}"></script>
    <!-- additional components -->
    @hasSection('components')
    @yield('components')
    @endif
    <!-- additional script -->
    @hasSection('script')
    @yield('script')
    @endif
    <script>
        var loader = document.getElementById('preloader');

        window.addEventListener("load", function() {
            loader.style.display = "none";
        });
    </script>
    <!-- <script>
        function darkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
            element.classList.toggle("nav_menu");
            element.classList.toggle("x_panel");
            element.classList.toggle("left_col");
        }
    </script> -->
</body>

</html>