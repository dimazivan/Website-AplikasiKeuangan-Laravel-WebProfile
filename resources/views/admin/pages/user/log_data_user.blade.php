@extends('admin.layouts.app')
@section('title')
{{ $title }}
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <p>
                    <a href="/">Home</a>&nbsp;<small><i class="fa fa-long-arrow-right"></small></i>
                    <a href="#">Log Data User</a>&nbsp;
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Log Data User</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <!-- <a class="dropdown-item" href="#">Tambah Data</a> -->
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
                                        Data user digunakan untuk pengguna melakukan proses login pada aplikasi.
                                    </p>
                                    @if(\Session::has('info'))
                                    <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">x</span>
                                        </button>
                                        <strong>{{ \Session::get('info') }}</strong>
                                    </div>
                                    @endif
                                    <table id="datatable-responsive"
                                        class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nama User (Username)</th>
                                                <th>Activity Log</th>
                                                <th>Status</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($data as $log_users)
                                            <tr>
                                                <td>
                                                    {{ $log_users->nama_depan }}&nbsp;{{ $log_users->nama_belakang }}
                                                    ({{ substr_replace($log_users->username,'*****',3,3) }})
                                                </td>
                                                <td style="text-transform:uppercase;">{{ $log_users->activity }}</td>
                                                <td style="text-transform:uppercase;">
                                                    @if($log_users->status == "success")
                                                    <span class="badge badge-success">{{ $log_users->status }}</span>
                                                    @elseif($log_users->status == "failed")
                                                    <span class="badge badge-danger">{{ $log_users->status }}</span>
                                                    @else
                                                    <span class="badge badge-warning">{{ $log_users->status }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $log_users->updated_at }}</td>
                                                <td style="width:50px;">
                                                    <a id="dropdown" href="#" class="dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" role="button"
                                                        aria-expanded="false">
                                                        Aksi
                                                        <span class="caret"></span>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a href="#" target="_blank" class="dropdown-item">
                                                            <i class="fa fa-eye"></i>
                                                            Detail
                                                        </a>
                                                        <a href="#" target="_blank" class="dropdown-item">
                                                            <i class="fa fa-trash"></i>
                                                            Hapus Data
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">Data Log User Kosong</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
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