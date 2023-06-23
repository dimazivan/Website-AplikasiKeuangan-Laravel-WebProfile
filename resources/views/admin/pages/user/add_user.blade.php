@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : "Halaman Data User"; }}
@endsection
@section('content')
<!-- page content -->
<div class="">
    <div class="page-title">
        <div class="title_left">
            <p>
                <a href="/" id="word1">Home</a>&nbsp;<small><i class="fa fa-long-arrow-right"></small></i>
                <a href="{{ route('user.index') }}" id="word2">Data User</a>&nbsp;<small><i
                        class="fa fa-long-arrow-right"></small></i>
                <a href="#" id="word3">Tambah Data User</a>
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Tambah Data User</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="" action="{{ route('user.store') }}" method="post" validate
                        enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <p>Masukkan data user dengan benar digunakan sebagai login sistem</p>
                        <span class="section">Personal Info</span>
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
                        @if(\Session::has('info'))
                        <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">x</span>
                            </button>
                            <strong>{{ \Session::get('info') }}</strong>
                        </div>
                        @endif
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Depan<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control has-feedback-left" name="first_name"
                                    placeholder="Nama Depan User"
                                    onkeydown="return /[a-z, ,backspace,delete]/i.test(event.key)" required
                                    oninvalid="this.setCustomValidity('Silahkan masukan nama depan user')"
                                    oninput="this.setCustomValidity('')">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Belakang<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control has-feedback-right" name="last_name"
                                    placeholder="Nama Belakang User"
                                    onkeydown="return /[a-z, ,backspace,delete]/i.test(event.key)" required
                                    oninvalid="this.setCustomValidity('Silahkan masukan nama belakang user')"
                                    oninput="this.setCustomValidity('')">
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Username<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" id="username" name="username" placeholder="Username Login"
                                    required oninvalid="this.setCustomValidity('Silahkan masukan username user')"
                                    oninput="this.setCustomValidity('')" min-length="5" type="text" />
                                <div class="cekusername" id="cekusername">
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Email<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input type="email" class="form-control has-feedback-left" id="email" name="email"
                                    class="email" placeholder="Email User" required
                                    oninvalid="this.setCustomValidity('Silahkan masukan alamat email user')"
                                    oninput="this.setCustomValidity('')">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                <div class="cekemail" id="cekemail">
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Password<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="password" id="password1" name="password"
                                    title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character"
                                    required placeholder="Password User" />
                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                    <i id="slash" class="fa fa-eye-slash"></i>
                                    <i id="eye" class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Role User<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="cbrole" name="cbrole" required
                                    oninvalid="this.setCustomValidity('Silahkan pilih salah satu role tersedia')"
                                    oninput="this.setCustomValidity('')" style="text-transform:uppercase;">
                                    <option value="" selected disabled>Pilih Role User</option>
                                    @forelse($roles as $role)
                                    <option value="{{ $role->id }}">
                                        {{ $role->name }}
                                    </option>
                                    @empty
                                    <option value="#">Data Role Kosong</option>
                                    @endforelse
                                    <!-- <option value="admin">Admin</option>
                                    <option value="keuangan">Keuangan</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Telepon<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input type="number" class="form-control has-feedback-left" name="phone" class='tel'
                                    placeholder="Nomor Telepon User" min-length="10" max-length="13" required
                                    onkeydown="return /[0-9,backspace,delete]/i.test(event.key)"
                                    oninvalid="this.setCustomValidity('Silahkan masukan nomor telepon user')"
                                    oninput="this.setCustomValidity('')">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Negara<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="cbcountry" name="cbcountry" required
                                    oninvalid="this.setCustomValidity('Silahkan pilih Negara Anda')"
                                    oninput="this.setCustomValidity('')" style="text-transform:uppercase;">
                                    <option value="" selected disabled>Pilih Negara</option>
                                    <option value="1">Indonesia</option>
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Provinsi<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="cbprovince" name="cbprovince" required
                                    oninvalid="this.setCustomValidity('Silahkan pilih provinsi Anda')"
                                    oninput="this.setCustomValidity('')" style="text-transform:uppercase;">
                                    <option value="" selected disabled>Pilih Provinsi</option>
                                    <!-- <option value="#">Provinsi</option> -->
                                    @forelse($province as $provinces => $values)
                                    <option value="{{ $provinces }}">{{ $values }}</option>
                                    @empty
                                    <option value="" selected disabled>Data Provinsi Kosong</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kota<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="cbcity" name="cbcity" required
                                    oninvalid="this.setCustomValidity('Silahkan pilih kota Anda')"
                                    oninput="this.setCustomValidity('')" style="text-transform:uppercase;">
                                    <option value="" selected disabled>Pilih Kota</option>
                                    <option value="#">Kota</option>
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="cbdistrict" name="cbdistrict" required
                                    oninvalid="this.setCustomValidity('Silahkan pilih kecamatan Anda')"
                                    oninput="this.setCustomValidity('')" style="text-transform:uppercase;">
                                    <option value="" selected disabled>Pilih Kecamatan</option>
                                    <option value="#">Kecamatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="cbward" name="cbward" required
                                    oninvalid="this.setCustomValidity('Silahkan pilih kelurahan Anda')"
                                    oninput="this.setCustomValidity('')" style="text-transform:uppercase;">
                                    <option value="" selected disabled>Pilih Kelurahan</option>
                                    <option value="#">Kelurahan</option>
                                </select>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control has-feedback-left" name="address"
                                    placeholder="Alamat User" required
                                    oninvalid="this.setCustomValidity('Silahkan masukan alamat user')"
                                    oninput="this.setCustomValidity('')">
                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi Alamat<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                                <textarea id="message" class="form-control" name="desc" data-parsley-trigger="keyup"
                                    data-parsley-minlength="20" data-parsley-maxlength="100"
                                    data-parsley-minlength-message="Masukkan deskripsi alamat anda"
                                    data-parsley-validation-threshold="10"
                                    oninvalid="this.setCustomValidity('Silahkan masukan deskripsi alamat user')"
                                    oninput="this.setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">File Foto (Optional)<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" name="file_foto" accept="image/*"><br>
                                <small>Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang
                                    diperbolehkan: .JPG .JPEG .PNG</small>
                            </div>
                        </div>
                        <!-- <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Syarat dan Ketentuan<span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6" style="margin-top:7px;">
                                <input type="checkbox" class="flat" name="status" onclick="alert(1);">
                            </div>
                        </div> -->
                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <br>
                                    <button type='submit' class="btn btn-primary">Simpan</button>
                                    <button type='reset' class="btn btn-success">Reset</button>
                                    <a href="{{ route('user.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<!-- Javascript functions -->
@endsection
@section('script')
<script>
    function hideshow() {
        var password = document.getElementById("password1");
        var slash = document.getElementById("slash");
        var eye = document.getElementById("eye");

        if (password.type === 'password') {
            password.type = "text";
            slash.style.display = "block";
            eye.style.display = "none";
        } else {
            password.type = "password";
            slash.style.display = "none";
            eye.style.display = "block";
        }

    }
</script>
<script>
    // initialize a validator instance from the "FormValidator" constructor.
    // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({
        "events": ['blur', 'input', 'change']
    }, document.forms[0]);
    // on form "submit" event
    document.forms[0].onsubmit = function(e) {
        var submit = true,
            validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
    };
    // on form "reset" event
    document.forms[0].onreset = function(e) {
        validator.reset();
    };
    // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function() {
        validator.settings.alerts = !this.checked;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
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
<script src="{{ asset('asset/js/data_wilayah.js') }}"></script>
<script src="{{ asset('asset/js/cek_username.js') }}"></script>
<script src="{{ asset('asset/js/cek_email.js') }}"></script>
@endsection