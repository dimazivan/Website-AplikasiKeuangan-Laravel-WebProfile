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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet"
        href="{{ asset('gate/register/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('gate/register/css/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <form action="{{ route('register.store') }}" id="wizard" method="post" validated>
            @csrf
            @method('post')
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
                                <input type="text" placeholder="First Name" name="first_name" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" placeholder="Last Name" name="last_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="number" placeholder="Your Phone" name="phone" class="form-control">
                            </div>
                            <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                <input type="email" placeholder="Your Email" name="email" id="email"
                                    class="form-control">
                                <div class="cekemailregister" id="cekemailregister">
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-circle">
                            <label style="margin-left:-23px;">
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
                        <div class="gambar" style="margin-top:67px;">
                            <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="IMG">
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with your info</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Your Username" name="username" id="username"
                                    class="form-control">
                                <div class="cekusernameregister" id="cekusernameregister">
                                    <!--  -->
                                </div>
                            </div>
                            <div class="form-holder">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rbgender" id="inlineRadio1"
                                        value="admin" selected>
                                    <label class="form-check-label" for="inlineRadio1">Admin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rbgender" id="inlineRadio2"
                                        value="keuangan">
                                    <label class="form-check-label" for="inlineRadio2">Keuangan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="password" placeholder="Password" name="password" class="form-control"
                                    id="id_password">
                                <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                            </div>
                            <div class="form-holder">
                                <input type="password" placeholder="Confirm Password" class="form-control"
                                    id="id_confirmpassword" name="confirm_password">
                                <i class="far fa-eye" id="toggleconfirmPassword" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
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
                        <p>Please fill with additional info</p>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="text" placeholder="Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <div class="bs-aja">
                                    <select class="form-select" aria-label="Default select example" name="cbprovince"
                                        id="cbprovince">
                                        <option value="" selected disabled>Pilih Provinsi</option>
                                        @forelse($province as $provinces => $values)
                                        <option value="{{ $provinces }}">{{ $values }}</option>
                                        @empty
                                        <option value="" selected disabled>Data Provinsi Kosong</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="form-holder">
                                <div class="bs-aja">
                                    <select class="form-select" aria-label="Default select example" name="cbcity"
                                        id="cbcity">
                                        <option selected disabled>Pilih Kota</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <div class="bs-aja">
                                    <select class="form-select" aria-label="Default select example" name="cbdistrict"
                                        id="cbdistrict">
                                        <option selected disabled>Pilih Kelurahan</option>
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="form-holder">
                                <div class="bs-aja">
                                    <select class="form-select" aria-label="Default select example" name="cbward"
                                        id="cbward">
                                        <option selected disabled>Pilih Kecamatan</option>
                                    </select>
                                </div>
                            </div>
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
    <script src="{{ asset('asset/js/cek_data.js') }}"></script>
    <script src="{{ asset('asset/js/data_wilayah.js') }}"></script>
    <!-- Template created and distributed by Colorlib -->
    <script>
        $(document).ready(function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#id_password');
            const toggleconfirmPassword = document.querySelector('#toggleconfirmPassword');
            const confirmpassword = document.querySelector('#id_confirmpassword');

            // console.log(togglePassword);
            // console.log(password);
            togglePassword.addEventListener('click', function(e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
            });

            toggleconfirmPassword.addEventListener('click', function(e) {
                // toggle the type attribute
                const type = confirmpassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmpassword.setAttribute('type', type);
                // toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
            });


            $("li:last a:first").on('click', function(event) {
                // $("li:last a:first").attr('title', 'Click One More~');
                $("li:last a:first").html('Again');
                $("li:last a:first").click(function() {
                    document.getElementById('wizard').submit();
                });
                // var formregister = event.target.form;
                // console.log(formregister);
                // $("li:last a:first").attr("href", "javascript:void(0);");
            });
        });
    </script>
</body>

</html>