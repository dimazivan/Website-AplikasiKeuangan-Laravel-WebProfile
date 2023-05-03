<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    @hasSection('title')
    <title>{{ $title }}</title>
    @else
    <title>Register Page</title>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="author" content="https://github.com/dimazivan">

    <link rel="icon" href="{{ asset('asset/icon/dimaz4.png') }}" type="image/ico" />
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet"
        href="{{ asset('gate/register/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('gate/register/css/style.css')}}">
</head>

<body>
    <div class="wrapper">
        <form action="" id="wizard">
            <!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <div class="gambar" style="margin-top:67px;">
                            <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="IMG">
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with your details</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="First Name" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Your Email" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Phone Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Age" class="form-control">
                            </div>
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                <div class="checkbox-tick">
                                    <label class="male">
                                        <input type="radio" name="gender" value="male" checked> Male<br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="female">
                                        <input type="radio" name="gender" value="female"> Female<br>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-circle">
                            <label style="margin-left:-23px;">
                                <!-- <input type="checkbox" checked> Nor again is there anyone who loves or pursues or
                                desires to obtaini.
                                <span class="checkmark"></span> -->
                                <a href="/login">Already have an account?</a>
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-2.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with additional info</p>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="text" placeholder="Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="City" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Zip Code" class="form-control">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="select">
                                <div class="form-holder">
                                    <div class="select-control">Your country</div>
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <ul class="dropdown">
                                    <li rel="United States">United States</li>
                                    <li rel="United Kingdom">United Kingdom</li>
                                    <li rel="Viet Nam">Viet Nam</li>
                                </ul>
                            </div>
                            <div class="form-holder"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="images/form-wizard-3.jpg" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Send an optional message</p>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <textarea name="" id="" placeholder="Your messagere here!" class="form-control"
                                    style="height: 99px;"></textarea>
                            </div>
                        </div>
                        <div class="checkbox-circle mt-24">
                            <label>
                                <input type="checkbox" checked> Please accept <a href="#">terms and conditions ?</a>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <!-- JQUERY -->
    <script src="{{ asset('gate/register/js/jquery-3.3.1.min.js')}}"></script>

    <!-- JQUERY STEP -->
    <script src="{{ asset('gate/register/js/jquery.steps.js')}}"></script>
    <script src="{{ asset('gate/register/js/main.js')}}"></script>
    <!-- Template created and distributed by Colorlib -->
</body>

</html>