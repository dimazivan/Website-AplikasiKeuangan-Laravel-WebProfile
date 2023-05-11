<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @hasSection('title')
    <title>{{ $title }}</title>
    @else
    <title>Login Page</title>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!--===============================================================================================-->
    <link rel="icon" href="{{ asset('asset/icon/dimaz4.png') }}" type="image/ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('gate/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('gate/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('gate/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('gate/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('gate/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('gate/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('gate/css/main.css') }}">
    <!--===============================================================================================-->

    <style>
        .dark-mode-bg {
            background: -webkit-linear-gradient(315deg, #000, #2d3436);
            background: -o-linear-gradient(315deg, #000, #2d3436);
            background: -moz-linear-gradient(315deg, #000, #2d3436);
            background: linear-gradient(315deg, #000, #2d3436);
            /* background-color: #000;
            background: #000;
            color: #fff; */
        }

        .dark-mode-form {
            background: linear-gradient(109.6deg, rgb(43, 1, 91) 13.4%, rgb(122, 2, 54) 100.2%);
            /* background-color: transparent; */
            /* background: none; */
            color: #fff;
            /* text-color: #fff; */
        }

        .dark-mode-text {
            color: #fff;
        }

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
</head>

<body>
    @include('sweetalert::alert')
    <div class="limiter">
        <div class="container-login100" id="bg">
            <div class="wrap-login100" id="bgform">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="IMG">
                    <!-- <img src="{{ asset('gate/images/img-01.png') }}" alt="IMG"> -->
                </div>
                <form class="login100-form validate-form" action="{{ route('login') }}" method="post" validate>
                    @csrf
                    @if(\Session::has('info'))
                    <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">x</span>
                        </button>
                        <strong>{{ \Session::get('info') }}</strong>
                    </div>
                    @endif
                    @if(($errors->any()) != null)
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">x</span>
                        </button>
                        {{ $error }}
                    </div>
                    @endforeach
                    @endif
                    <span class="login100-form-title" id="bgtext">
                        Member Login
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="captcha" style="margin-bottom: 10px;margin-left: 5px;">
                        <span>{!! captcha_img() !!}</span>
                        <button class="btn btn-danger reload" id="reload" type="button">&#x21bb;</button>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Captcha is required">
                        <input class="input100" type="text" name="captcha" placeholder="Captcha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-link" aria-hidden="true"></i>
                        </span>
                    </div>
                    <!-- <div class="" style="margin-left: 5px;">
                        <input type="checkbox" name="cbrememberme" disabled> Remember Me
                    </div> -->
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-12">
                        <span class="txt1" id="bgtext">
                            Forgot
                        </span>
                        <a class="txt2" href="{{ route('reset.index') }}">
                            Ur Password?
                        </a>
                    </div>
                    <div class="text-center">
                        <span class="txt1" id="bgtext">
                            What's new or upcoming ?
                        </span>
                        <a class="txt2" href="#">
                            Here...
                        </a>
                    </div>
                    <div class="text-center p-t-136" style="margin-top: -100px;margin-left:117px;">
                        <input type="checkbox" id="switch" onchange="darkMode(this)" disabled />
                        <label for="switch">Dark Mode</label>
                        <!-- <span id="bgtext">Dark Mode (Beta)</span> -->
                        <!-- <a class="txt2" href="#">
                            <input type="checkbox" onchange="darkMode(this)">
                            <span id="bgtext">Dark Mode (Beta)</span>
                        </a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="right_menu">
        <div class="right_menu_item">
            <a href="/register">
                Register Page
            </a>
        </div>
        <div class="right_menu_item">Menu 2</div>
        <div class="right_menu_item">Menu 3</div>
        <div class="right_menu_item">Menu 4</div>
        <div class="right_menu_item">Menu 5</div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('gate/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('gate/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('gate/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('gate/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('gate/vendor/tilt/tilt.jquery.min.js') }}"></script>

    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                    $(this).remove();
                });
            }, 5000);

        });

        if (localStorage.getItem("dark-mode-login") == "dark") {
            localStorage.removeItem("dark-mode-login");
            var elementbg = document.getElementById("bg");
            var elementform = document.getElementById("bgform");
            var elementtext = document.getElementById("bgtext");
            elementbg.classList.toggle("dark-mode-bg");
            elementform.classList.toggle("dark-mode-form");
            elementtext.classList.toggle("dark-mode-text");
            localStorage.setItem("dark-mode-login", "dark");
            console.log(localStorage.getItem("dark-mode-login"));
            document.getElementById("switch").checked = true;
        } else if (localStorage.getItem("dark-mode-login") == "light") {
            localStorage.removeItem("dark-mode-login");
            localStorage.setItem("dark-mode-login", "light");
            console.log(localStorage.getItem("dark-mode-login"));
            document.getElementById("switch").checked = false;
        } else {
            // 
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#reload').click(function() {
                $.ajax({
                    type: 'GET',
                    url: 'reload-captcha',
                    success: function(data) {
                        $(".captcha span").html(data.captcha)
                    }
                });
            });
        });
    </script>
    <!-- Dark Mode hanya menggunakan storage session dimana hanya dapat menyimpan 
    string dan akan hilang apabila di buka di tab selanjutnya -->
    <!-- Dark Mode sekarang menggunakan local storage dimana bisa 
    digunakan dalam browser yang sama -->
    <script>
        function darkMode(obj) {
            if ($(obj).is(":checked")) {
                localStorage.removeItem("dark-mode-login");
                var elementbg = document.getElementById("bg");
                var elementform = document.getElementById("bgform");
                var elementtext = document.getElementById("bgtext");
                elementbg.classList.toggle("dark-mode-bg");
                elementform.classList.toggle("dark-mode-form");
                elementtext.classList.toggle("dark-mode-text");
                localStorage.setItem("dark-mode-login", "dark");
                // sessionStorage.setItem("dark-mode-login", "dark");
                console.log(localStorage.getItem("dark-mode-login"));
            } else if ($(obj).prop('checked', false)) {
                localStorage.removeItem("dark-mode-login");
                var elementbg = document.getElementById("bg");
                var elementform = document.getElementById("bgform");
                var elementtext = document.getElementById("bgtext");
                elementbg.classList.toggle("dark-mode-bg");
                elementform.classList.toggle("dark-mode-form");
                elementtext.classList.toggle("dark-mode-text");
                localStorage.setItem("dark-mode-login", "light");
                console.log(localStorage.getItem("dark-mode-login"));
            } else {

            }
        }
    </script>
    <script>
        $('input').removeAttr('disabled');
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('gate/js/main.js') }}"></script>
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

</body>

</html>