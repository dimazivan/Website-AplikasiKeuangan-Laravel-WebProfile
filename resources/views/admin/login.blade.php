<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    @hasSection('title')
    <title>{{ $title }}</title>
    @else
    <title>Login Page</title>
    @endif
</head>

<body>
    @include('sweetalert::alert')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="IMG">
                    <!-- <img src="{{ asset('gate/images/img-01.png') }}" alt="IMG"> -->
                </div>
                <form class="login100-form validate-form" action="{{ route('login') }}" method="post" validate>
                    @csrf
                    @if(\Session::has('info'))
                    <div class="alert alert-danger alert-dismissible " role="alert">
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
                    <span class="login100-form-title">
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
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="{{ route('reset.index') }}">
                            Ur Password?
                        </a>
                    </div>
                    <div class="text-center">
                        <span class="txt1">
                            What's new or upcoming ?
                        </span>
                        <a class="txt2" href="#">
                            Here...
                        </a>
                    </div>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            <!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
                        </a>
                    </div>
                </form>
            </div>
        </div>
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
    <!--===============================================================================================-->
    <script src="{{ asset('gate/js/main.js') }}"></script>

</body>

</html>