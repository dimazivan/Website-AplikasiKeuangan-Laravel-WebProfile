<div class="modal fade modalscandata" tabindex="-1" role="dialog" aria-hidden="true" id="modalscandata">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form class="" action="#" method="post" validate enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Scan Data User</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <form class="" action="#" method="post" validate enctype="multipart/form-data"
                                autocomplete="off">
                                @csrf
                                <p>Silahkan tekan tombol scan apabila data tidak muncul</p>
                                <span class="section">Scan QR</span>
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
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">QR Code User<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" class="form-control has-feedback-right" name="scan_qr"
                                            placeholder="Scan ID"
                                            onkeydown="return /[a-z,0-9, ,backspace,delete]/i.test(event.key)" required
                                            oninvalid="this.setCustomValidity('Silahkan masukan/Scan ID user')"
                                            oninput="this.setCustomValidity('')" autofocus>
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <br>
                                            <button type='submit' class="btn btn-primary">Scan</button>
                                            <button type='reset' class="btn btn-success">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <div class="hasil">
                                <form class="" action="#" method="post" validate enctype="multipart/form-data"
                                    autocomplete="off">
                                    @csrf
                                    <span class="section">Personal Info</span>
                                    @if(($errors->any()) != null)
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible " role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">x</span>
                                        </button>
                                        {{ $error }}
                                    </div>
                                    @endforeach
                                    @endif
                                    @if(\Session::has('info'))
                                    <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">x</span>
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
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-user form-control-feedback left"
                                                aria-hidden="true"></span>
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
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-user form-control-feedback right"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Username<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" id="username" name="username"
                                                placeholder="Username Login" required
                                                oninvalid="this.setCustomValidity('Silahkan masukan username user')"
                                                oninput="this.setCustomValidity('')" readonly min-length="5"
                                                type="text" />
                                            <div class="cekusername" id="cekusername">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Email<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="email" class="form-control has-feedback-left" id="email"
                                                name="email" class="email" placeholder="Email User" required
                                                oninvalid="this.setCustomValidity('Silahkan masukan alamat email user')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-envelope form-control-feedback left"
                                                aria-hidden="true"></span>
                                            <div class="cekemail" id="cekemail">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Role User<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left" name="role"
                                                placeholder="Role User" required
                                                onkeydown="return /[0-9,backspace,delete]/i.test(event.key)"
                                                oninvalid="this.setCustomValidity('Silahkan masukan Role User')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-phone form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nomor Telepon<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="number" class="form-control has-feedback-left" name="phone"
                                                class='tel' placeholder="Nomor Telepon User" min-length="10"
                                                max-length="13" required
                                                onkeydown="return /[0-9,backspace,delete]/i.test(event.key)"
                                                oninvalid="this.setCustomValidity('Silahkan masukan nomor telepon user')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-phone form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Negara<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left" name="country"
                                                placeholder="Negara" required
                                                onkeydown="return /[0-9,backspace,delete]/i.test(event.key)"
                                                oninvalid="this.setCustomValidity('Silahkan masukan Negara')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-phone form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Provinsi<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left" name="province"
                                                placeholder="Provinsi" required
                                                onkeydown="return /[0-9,backspace,delete]/i.test(event.key)"
                                                oninvalid="this.setCustomValidity('Silahkan masukan Provinsi')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-phone form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kota<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left" name="city"
                                                placeholder="Kota" required
                                                onkeydown="return /[0-9,backspace,delete]/i.test(event.key)"
                                                oninvalid="this.setCustomValidity('Silahkan masukan Kota')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-phone form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left" name="district"
                                                placeholder="Kecamatan" required
                                                onkeydown="return /[0-9,backspace,delete]/i.test(event.key)"
                                                oninvalid="this.setCustomValidity('Silahkan masukan Kecamatan')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-phone form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left" name="ward"
                                                placeholder="Kelurahan" required
                                                onkeydown="return /[0-9,backspace,delete]/i.test(event.key)"
                                                oninvalid="this.setCustomValidity('Silahkan masukan Kelurahan')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-phone form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat<span
                                                class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left" name="address"
                                                placeholder="Alamat User" required
                                                oninvalid="this.setCustomValidity('Silahkan masukan alamat user')"
                                                oninput="this.setCustomValidity('')" readonly>
                                            <span class="fa fa-home form-control-feedback left"
                                                aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi
                                            Alamat<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea id="message" class="form-control" name="desc"
                                                data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                data-parsley-maxlength="100"
                                                data-parsley-minlength-message="Masukkan deskripsi alamat anda"
                                                data-parsley-validation-threshold="10"
                                                oninvalid="this.setCustomValidity('Silahkan masukan deskripsi alamat user')"
                                                oninput="this.setCustomValidity('')" readonly></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // seleksi elemen video
    var video = document.querySelector("#video-webcam");

    // minta izin user
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia ||
        navigator.msGetUserMedia || navigator.oGetUserMedia;

    // jika user memberikan izin
    if (navigator.getUserMedia) {
        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
        navigator.getUserMedia({
            video: true
        }, handleVideo, videoError);
    }

    // fungsi ini akan dieksekusi jika  izin telah diberikan
    function handleVideo(stream) {
        video.srcObject = stream;
    }

    // fungsi ini akan dieksekusi kalau user menolak izin
    function videoError(e) {
        // do something
        alert("Please allowed ur webcam!")
    }
</script>