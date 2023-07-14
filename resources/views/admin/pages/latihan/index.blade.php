@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : "Halaman Latihan"; }}
@endsection
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <p>
                <a href="/" id="word1">Home</a>&nbsp;
                <small>
                    <i class="fa fa-long-arrow-right"></i>
                </small>
                <a href="#" id="word2">Latihan</a>&nbsp;
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Latihan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('latihan.create') }}">Tambah Data</a>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <p class="text-muted font-13 m-b-30">
                                    Data yang digunakan untuk latihan
                                </p>
                                @if(\Session::has('info'))
                                <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                        style="margin-top: -4px;">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>{{ \Session::get('info') }}</strong>
                                </div>
                                @endif
                                <hr>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h4 style="text-align:center;">
                                            Hasil Pemecahan Array
                                        </h4>
                                        <hr>
                                        <p>Data : </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="text-align:center;">
                                            Hasil Perhitungan Matriks
                                        </h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
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