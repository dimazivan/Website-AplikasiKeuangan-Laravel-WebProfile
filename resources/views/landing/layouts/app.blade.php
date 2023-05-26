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
    @hasSection('style')
    @yield('style')
    @endif
</head>

<body>
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
        // // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        // window.document.addEventListener("scroll", onScroll);
    </script>
    <script>
        var loader = document.getElementById('preloader');

        window.addEventListener("load", function() {
            loader.style.display = "none";
        });
    </script>
    @hasSection('script')
    @yield('script')
    @endif

    @hasSection('components')
    @yield('components')
    @endif
</body>

</html>