<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
$bg = asset('asset/icon/logogif.gif');
?>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
            background: white url("<?php echo asset('asset/icon/logogif.gif') ?>") no-repeat center center;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 99999;
            opacity: 50%;
        }

        .dark-mode-bg {
            background: #21262d !important;
        }

        .dark-mode-text {
            color: white;
        }
    </style>
    <!-- Bootstrap -->
    <link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <!-- <link href="{{ asset('backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet"> -->
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
    <link href="{{ asset('backend/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('backend/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('backend/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <!-- <link href="{{ asset('backend/vendors/starrr/dist/starrr.css') }}" rel="stylesheet"> -->
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('backend/build/css/custom.min.css')}}" rel="stylesheet">
    <!-- PNotify -->
    <!-- <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!-- jQuery -->
    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    @hasSection('style')
    @yield('style')
    @endif
    @hasSection('style_right_menu')
    @yield('style_right_menu')
    @else
    <style>
        #right_menu {
            position: fixed;
            z-index: 10000;
            width: 150px;
            background: #1b1a1a;
            border-radius: 5px;
            /* display: none; */
            transform: scale(0);
            transform-origin: top left;
        }

        #right_menu.visible {
            /* display: block; */
            transform: scale(1);
            transition: transform 200ms ease-in-out;
        }

        #right_menu .right_menu_item {
            padding: 8px 10px;
            font-size: 15px;
            color: #eee;
            cursor: pointer;
            border-radius: inherit;
        }

        #right_menu .right_menu_item:hover {
            background: #343434
        }
    </style>
    @endif
</head>

<body class="nav-md footer_fixed">
    @include('admin.components.preload.preload')
    <!-- @hasSection('content_right_menu')
    @yield('content_right_menu')
    @else
    @include('admin.components.right_menu.right_menu')
    @endif -->
    <div class="container body">
        <div class="main_container" id="maincontainer">
            @include('sweetalert::alert')
            <!-- Sidebar -->
            @include('admin.layouts.sidebar')
            <!-- /Sidebar -->

            <!-- header navigation -->
            @include('admin.layouts.header')
            <!-- /header navigation -->
            <div class="right_col" role="main" id="rightcol" style="padding-bottom:20px;">
                <!-- page content -->
                @yield('content')
                <!-- /page content -->
            </div>

            <!-- footer content -->
            @include('admin.layouts.footer')
            <!-- /footer content -->
        </div>
    </div>

    <!-- FastClick -->
    <script src="{{ asset('backend/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <!-- <script src="{{ asset('backend/vendors/nprogress/nprogress.js') }}"></script> -->
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
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('backend/build/js/custom.min.js') }}"></script>
    <!-- additional script -->
    @hasSection('script')
    @yield('script')
    @endif
    <!-- additional components -->
    @hasSection('components')
    @yield('components')
    @endif
    <!-- @hasSection('script_right_menu')
    @yield('script_right_menu')
    @else
    <script>
        const contextMenu = document.getElementById("right_menu");
        const scope = document.querySelector("body");

        scope.addEventListener("contextmenu", (event) => {
            event.preventDefault();

            const {
                clientX: mouseX,
                clientY: mouseY
            } = event;

            contextMenu.style.top = `${mouseY}px`;
            contextMenu.style.left = `${mouseX}px`;

            contextMenu.classList.remove("visible");

            setTimeout(() => {
                contextMenu.classList.add("visible");
            });
        });

        scope.addEventListener("click", (e) => {
            if (e.target.offsetParent != contextMenu) {
                contextMenu.classList.remove("visible");
            }
        });

        // const normalizePozition = (mouseX, mouseY) => {
        //     // ? compute what is the mouse position relative to the container element (scope)
        //     const {
        //         left: scopeOffsetX,
        //         top: scopeOffsetY,
        //     } = scope.getBoundingClientRect();

        //     const scopeX = mouseX - scopeOffsetX;
        //     const scopeY = mouseY - scopeOffsetY;

        //     // ? check if the element will go out of bounds
        //     const outOfBoundsOnX =
        //         scopeX + contextMenu.clientWidth > scope.clientWidth;

        //     const outOfBoundsOnY =
        //         scopeY + contextMenu.clientHeight > scope.clientHeight;

        //     let normalizedX = mouseX;
        //     let normalizedY = mouseY;

        //     // ? normalzie on X
        //     if (outOfBoundsOnX) {
        //         normalizedX =
        //             scopeOffsetX + scope.clientWidth - contextMenu.clientWidth;
        //     }

        //     // ? normalize on Y
        //     if (outOfBoundsOnY) {
        //         normalizedY =
        //             scopeOffsetY + scope.clientHeight - contextMenu.clientHeight;
        //     }

        //     return {
        //         normalizedX,
        //         normalizedY
        //     };
        // };

        // scope.addEventListener("contextmenu", (event) => {
        //     event.preventDefault();

        //     const {
        //         offsetX: mouseX,
        //         offsetY: mouseY
        //     } = event;

        //     const {
        //         normalizedX,
        //         normalizedY
        //     } = normalizePozition(mouseX, mouseY);

        //     contextMenu.style.top = `${normalizedY}px`;
        //     contextMenu.style.left = `${normalizedX}px`;

        //     contextMenu.classList.remove("visible");

        //     setTimeout(() => {
        //         contextMenu.classList.add("visible");
        //     });
        // });
    </script>
    @endif -->
    <script>
        // 
    </script>
    <!-- Preloader + Dark Mode -->
    <script>
        var loader = document.getElementById('preloader');

        window.addEventListener("load", function() {
            loader.style.display = "none";
        });
        if (localStorage.getItem("dark-mode-dashboard") == "dark") {
            localStorage.removeItem("dark-mode-dashboard");
            var elementbg1 = document.getElementById("maincontainer");
            var elementbg2 = document.getElementById("rightcol");
            var elementbg3 = document.getElementById("bgsidebar1");
            var elementbg4 = document.getElementById("bgsidebar2");
            var elementbg5 = document.getElementById("bgsidebar3");
            var elementbg6 = document.getElementById("bgsidebar4");
            var elementbg7 = document.getElementById("nav_menu");
            var elementbg8 = document.getElementById("footer");
            var elementbg9 = document.getElementById("navbarDropdown");
            var elementbg10 = document.getElementById("namauser");
            elementbg1.classList.toggle("dark-mode-bg");
            elementbg2.classList.toggle("dark-mode-bg");
            elementbg3.classList.toggle("dark-mode-bg");
            elementbg4.classList.toggle("dark-mode-bg");
            elementbg5.classList.toggle("dark-mode-bg");
            elementbg6.classList.toggle("dark-mode-bg");
            elementbg7.classList.toggle("dark-mode-bg");
            elementbg8.classList.toggle("dark-mode-bg");
            elementbg9.classList.toggle("dark-mode-text");
            elementbg10.classList.toggle("dark-mode-text");
            localStorage.setItem("dark-mode-dashboard", "dark");
            console.log(localStorage.getItem("dark-mode-dashboard"));
            document.getElementById("switch").checked = true;
        } else if (localStorage.getItem("dark-mode-dashboard") == "light") {
            localStorage.removeItem("dark-mode-dashboard");
            localStorage.setItem("dark-mode-dashboard", "light");
            console.log(localStorage.getItem("dark-mode-dashboard"));
            document.getElementById("switch").checked = false;
        } else {
            // 
        }

        oldurl = window.location.href;
        pathurl = window.location.pathname.split("/");
        console.log(window.location.href);
        // console.log(oldurl);
        // console.log(pathurl);
        console.log(pathurl[1]);
        console.log("===========");
        console.log(localStorage.getItem("lang"));
        // console.log(sessionStorage.getItem("lang"));
        if (localStorage.getItem("lang") != pathurl[1] && localStorage.getItem("lang") == "id") {
            localStorage.removeItem("lang");
            sessionStorage.removeItem("lang");
            localStorage.setItem("lang", "id");
            sessionStorage.setItem("lang", "id");
            console.log(localStorage.getItem("lang"));
            newurl = oldurl.replace("/" + pathurl[1], "/id");
            console.log(newurl)
            window.location.href = newurl;
        } else if (localStorage.getItem("lang") != pathurl[1] && localStorage.getItem("lang") == "en") {
            localStorage.removeItem("lang");
            sessionStorage.removeItem("lang");
            localStorage.setItem("lang", "en");
            sessionStorage.setItem("lang", "en");
            console.log(localStorage.getItem("lang"));
            newurl = oldurl.replace("/" + pathurl[1], "/en");
            console.log(newurl)
            window.location.href = newurl;
        } else {
            // localStorage.removeItem("lang");
            // newurl = old.replace("/id/", "/en/");
        }
    </script>
    <script>
        function darkModeAdm(obj) {
            if ($(obj).is(":checked")) {
                localStorage.removeItem("dark-mode-dashboard");
                var elementbg1 = document.getElementById("maincontainer");
                var elementbg2 = document.getElementById("rightcol");
                var elementbg3 = document.getElementById("bgsidebar1");
                var elementbg4 = document.getElementById("bgsidebar2");
                var elementbg5 = document.getElementById("bgsidebar3");
                var elementbg6 = document.getElementById("bgsidebar4");
                var elementbg7 = document.getElementById("nav_menu");
                var elementbg8 = document.getElementById("footer");
                var elementbg9 = document.getElementById("navbarDropdown");
                var elementbg10 = document.getElementById("namauser");
                elementbg1.classList.toggle("dark-mode-bg");
                elementbg2.classList.toggle("dark-mode-bg");
                elementbg3.classList.toggle("dark-mode-bg");
                elementbg4.classList.toggle("dark-mode-bg");
                elementbg5.classList.toggle("dark-mode-bg");
                elementbg6.classList.toggle("dark-mode-bg");
                elementbg7.classList.toggle("dark-mode-bg");
                elementbg8.classList.toggle("dark-mode-bg");
                elementbg9.classList.toggle("dark-mode-text");
                elementbg10.classList.toggle("dark-mode-text");
                // elementbg10.classList.toggle("dark-mode-text");
                // elementbg11.classList.toggle("dark-mode-text");
                localStorage.setItem("dark-mode-dashboard", "dark");
                console.log(localStorage.getItem("dark-mode-dashboard"));
                document.getElementById("switch").checked = true;
            } else if ($(obj).prop('checked', false)) {
                localStorage.removeItem("dark-mode-dashboard");
                var elementbg1 = document.getElementById("maincontainer");
                var elementbg2 = document.getElementById("rightcol");
                var elementbg3 = document.getElementById("bgsidebar1");
                var elementbg4 = document.getElementById("bgsidebar2");
                var elementbg5 = document.getElementById("bgsidebar3");
                var elementbg6 = document.getElementById("bgsidebar4");
                var elementbg7 = document.getElementById("nav_menu");
                var elementbg8 = document.getElementById("footer");
                var elementbg9 = document.getElementById("navbarDropdown");
                var elementbg10 = document.getElementById("namauser");
                elementbg1.classList.toggle("dark-mode-bg");
                elementbg2.classList.toggle("dark-mode-bg");
                elementbg3.classList.toggle("dark-mode-bg");
                elementbg4.classList.toggle("dark-mode-bg");
                elementbg5.classList.toggle("dark-mode-bg");
                elementbg6.classList.toggle("dark-mode-bg");
                elementbg7.classList.toggle("dark-mode-bg");
                elementbg8.classList.toggle("dark-mode-bg");
                elementbg9.classList.toggle("dark-mode-text");
                elementbg10.classList.toggle("dark-mode-text");
                localStorage.setItem("dark-mode-dashboard", "light");
                console.log(localStorage.getItem("dark-mode-dashboard"));
                document.getElementById("switch").checked = false;
            } else {

            }
        }
    </script>
    <!-- FullScreen -->
    <script>
        function go_full_screen() {
            var elem = document.documentElement;
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.msRequestFullscreen) {
                elem.msRequestFullscreen();
            } else if (elem.mozRequestFullScreen) {
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
                elem.webkitRequestFullscreen();
            }
        }
    </script>
    <!-- Clock -->
    <script>
        var timestamp = '<?=time();?>';

        function updateTime() {
            $('#time').html(Date(timestamp));
            timestamp++;
        }
        $(function() {
            setInterval(updateTime, 1000);
        });
    </script>
    <!-- Lang -->
    <script>
        function lange(val) {
            // alert('ahay')
            // localStorage.removeItem("lang");
            oldurl = window.location.href;
            console.log(window.location.href);
            console.log(oldurl);
            console.log(val);
            if (val == "id") {
                localStorage.removeItem("lang");
                sessionStorage.removeItem("lang");
                localStorage.setItem("lang", "id");
                sessionStorage.setItem("lang", "id");
                console.log(localStorage.getItem("lang"));
                console.log(sessionStorage.getItem("lang"));
                newurl = oldurl.replace("/en", "/id");
            } else if (val == "en") {
                localStorage.removeItem("lang");
                sessionStorage.removeItem("lang");
                localStorage.setItem("lang", "en");
                sessionStorage.setItem("lang", "en");
                console.log(localStorage.getItem("lang"));
                console.log(sessionStorage.getItem("lang"));
                newurl = oldurl.replace("/id", "/en");
            } else {
                // localStorage.removeItem("lang");
                // newurl = old.replace("/id/", "/en/");
            }
            console.log(newurl)
            window.location.href = newurl;
        }
    </script>
</body>

</html>