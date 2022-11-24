<div class="modal fade modaladduser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form class="" action="#" method="post" validate enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Form Tambah Data User</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
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
                                placeholder="Nama Depan User" id="first_name"
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
                                placeholder="Nama Belakang User" id="last_name"
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
                            <input class="form-control" name="username" placeholder="Username Login" required
                                oninvalid="this.setCustomValidity('Silahkan masukan username user')" id="username"
                                oninput="this.setCustomValidity('')" min-length="5" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Email<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control has-feedback-left" name="email" class="email"
                                placeholder="Email User" required id="email"
                                oninvalid="this.setCustomValidity('Silahkan masukan alamat email user')"
                                oninput="this.setCustomValidity('')">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Password<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="password" name="password"
                                title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character"
                                required placeholder="Password User" id="password" />
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
                                oninput="this.setCustomValidity('')" id="cbrole">
                                <option value="" selected disabled autofocus>Pilih Role User</option>
                                <option value="admin">Admin</option>
                                <option value="keuangan">Keuangan</option>
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
                                oninput="this.setCustomValidity('')" id="phone">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat<span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control has-feedback-left" name="address"
                                placeholder="Alamat User" required id="address"
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
                            <input type="file" name="file_foto" accept="image/*" id="file_foto"><br>
                            <small>Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang
                                diperbolehkan: .JPG .JPEG .PNG</small>
                        </div>
                    </div>
                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <br>
                                <button type='button' class="btn btn-primary" id="simpan">Simpan</button>
                                <button type='reset' class="btn btn-success">Reset</button>
                                <a href="{{ route('user.index') }}" class="btn btn-danger">Batal</a>
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
    //action create post
    // $('#simpan').click(function(e) {
    //     alert('aman boz');
    // });

    $('#simpan').click(function(e) {
        // alert('apa iya');

        e.preventDefault();
        //define variable
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let username = $('#username').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let cbrole = $('#cbrole').val();
        let phone = $('#phone').val();
        let address = $('#address').val();
        let desc = $('#message').val();
        let file_foto = $('#file_foto').val();
        let token = $("meta[name='csrf-token']").attr("content");

        console.log(file_foto)

        //ajax
        $.ajax({
            // alert('apa iya');

            url: `/api/api_user`,
            type: "POST",
            mimeType: "multipart/form-data",
            cache: false,
            data: {
                "first_name": first_name,
                "last_name": last_name,
                "username": username,
                "email": email,
                "password": password,
                "cbrole": cbrole,
                "phone": phone,
                "address": address,
                "desc": desc,
                "file_foto": file_foto,
                "_token": token
            },
            success: function(response) {
                // console.log(response.message)
                // console.log(response.data)
                // console.log(response.responseJSON)
                //show success message
                Swal.fire({
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });
                //data post
                let post = `    
                    <tr>
                        <td>${response.data.first_name}&nbsp;${response.data.last_name}</td>
                        <td>substr_replace(${response.data.username},'*****',3,3)</td>
                        <td style="text-transform:uppercase;">${response.data.role}</td>
                        <td style="width:5%;">
                            <a id="drop4" href="#" class="dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" role="button"
                                aria-expanded="false">
                                Aksi
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="{{ route('user.edit',[Crypt::encrypt('a')]) }}"
                                    target="_blank" class="dropdown-item">
                                    <i class="fa fa-pencil"></i>&nbsp;
                                    Edit User
                                </a>
                            @if(auth()->user()->role == "admin")
                            <form
                                action="{{route('user.destroy', [Crypt::encrypt('a')])}}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">
                                    <i class="fa fa-trash-o"></i>&nbsp;
                                    Delete User
                                </button>
                            </form>
                            @endif
                            </div>
                        </td>
                    </tr>
                `;

                //append to table
                $('#tabel_user').prepend(post);
                //clear form
                $('#first_name').val('');
                $('#last_name').val('');
                $('#username').val('');
                $('#email').val('');
                $('#password').val('');
                $('#phone').val('');
                $('#address').val('');
                $('#desc').val('');
                $('#flie_foto').val('');
            },

            error: function(error) {
                console.log(error.responseJSON);
            }
        });
    });
</script>