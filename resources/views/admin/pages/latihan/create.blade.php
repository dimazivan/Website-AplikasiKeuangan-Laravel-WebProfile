@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : "Halaman Latihan"; }}
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <p>
                    <a href="/">Home</a>&nbsp;<small><i class="fa fa-long-arrow-right"></small></i>
                    <a href="{{ route('latihan.index') }}">Latihan</a>&nbsp;<small><i
                            class="fa fa-long-arrow-right"></small></i>
                    <a href="#">Form Latihan</a>
                </p>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Latihan</h2>
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
                        <form class="" action="#" method="post" validate enctype="multipart/form-data">
                            @csrf
                            <p>Form Latihan</p>
                            <span class="section">Latihan</span>
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Inputan Angka<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" class="form-control has-feedback-left" name="inputan_looping"
                                        placeholder="Angka Inputan Looping"
                                        onkeydown="return /[a-z, ,backspace,delete]/i.test(event.key)" required
                                        oninvalid="this.setCustomValidity('Silahkan masukan Angka Inputan Looping')"
                                        oninput="this.setCustomValidity('')">
                                    <span class="fa fa-list-ol form-control-feedback left" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Inputan Array<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="tags_1" type="text" class="tags form-control" name="inputan_array[]"
                                        placeholder="Inputan Array"
                                        onkeydown="return /[a-z, ,backspace,delete]/i.test(event.key)" required
                                        oninvalid="this.setCustomValidity('Silahkan masukan inputan Array')"
                                        oninput="this.setCustomValidity('')" />
                                </div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <br>
                                        <button type='submit' class="btn btn-primary">Proses</button>
                                        <button type='reset' class="btn btn-success">Reset</button>
                                        <!-- <a href="{{ route('latihan.index') }}" class="btn btn-danger">Batal</a> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 5000);

    });
</script>
@endsection