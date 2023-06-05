<!DOCTYPE html>
<!-- <html lang="en" data-bs-theme="dark"> -->
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @hasSection('title')
    <title>@yield('title')</title>
    @else
    <title>Dimz | Portofolio Website</title>
    @endif

    <!-- Primary Meta Tags -->
    <meta name="title" content="Dimz | Portofolio Website">
    <meta name="description" content="Dimz | Portofolio Website">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://github.com/dimazivan">
    <meta property="og:title" content="Dimz | Portofolio Website">
    <meta property="og:description" content="Dimz | Portofolio Website">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://github.com/dimazivan">
    <meta property="twitter:title" content="Dimz | Portofolio Website">
    <meta property="twitter:description" content="Dimz | Portofolio Website">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('asset/icon/dimaz4.png') }}" type="image" />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="{{ asset('portofolio/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('portofolio/assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('portofolio/assets/css/lineicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('portofolio/assets/css/ud-styles.css')}}" />
    <link rel="stylesheet" href="{{ asset('portofolio/assets/css/modal.css')}}" />
    @hasSection('style')
    @yield('style')
    @endif
</head>

<body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    @include('admin.components.preload.preload')

    @include('sweetalert::alert')

    @include('landing.layouts.header')

    @yield('content')

    @include('landing.layouts.team')
    @include('landing.layouts.contact')
    @include('landing.layouts.footer')

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="{{ asset('portofolio/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('portofolio/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('portofolio/assets/js/main.js')}}"></script>
    <script>
        var loader = document.getElementById('preloader');

        window.addEventListener("load", function() {
            loader.style.display = "none";
        });

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
    @hasSection('script')
    @yield('script')
    @endif

    @hasSection('components')
    @yield('components')
    @endif
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