<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('asset/icon/dimaz4.png') }}" type="image/ico" />
    @hasSection('title')
    <title>{{ $title }}</title>
    @else
    <title>Login Page</title>
    @endif

    <!-- Bootstrap -->
    <link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('backend/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('backend/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet') }}">
    <!-- Select2 -->
    <link href="{{ asset('backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet') }}">
    <!-- Switchery -->
    <link href="{{ asset('backend/vendors/switchery/dist/switchery.min.css" rel="stylesheet') }}">
    <!-- starrr -->
    <link href="{{ asset('backend/vendors/starrr/dist/starrr.css" rel="stylesheet') }}">
    <!-- Custom Theme Style -->
    <link href="{{ asset('backend/build/css/custom.min.css') }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
</head>

<body class="login">
    @include('sweetalert::alert')
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <!-- Login -->
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('login') }}" method="post" validate>
                        @csrf
                        <h1>Login Page</h1>
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
                        <div>
                            <input type="text" class="form-control" placeholder="Username" name="username" required />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                required />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">Log In</button>
                            <a class="reset_pass" href="#">Forget your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">Don't have any account?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <!-- Register -->
            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form action="#" method="post" validate>
                        @csrf
                        <h1>Registration Page</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="First Name" required=""
                                name="first_name" />
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="Last Name" required=""
                                name="last_name" />
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required=""
                                name="username" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" name="email" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required=""
                                name="password" />
                        </div>
                        <div>
                            <input type="tel" class="form-control" placeholder="Phone" required="" name="phone" />
                        </div>
                        <br>
                        <div>
                            <input type="text" class="form-control" placeholder="Address" required="" name="address" />
                        </div>
                        <input type="text" class="form-control" placeholder="cbrole" required="" name="cbrole"
                            value="keuangan" hidden />
                        <div>
                            <button type="submit" class="btn btn-default submit">Register</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
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
</body>

</html>