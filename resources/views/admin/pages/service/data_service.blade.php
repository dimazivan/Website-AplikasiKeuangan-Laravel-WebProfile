@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : "Halaman Data Service"; }}
@endsection
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <p>
                <a href="/" id="word1">Home</a>&nbsp;<small><i class="fa fa-long-arrow-right"></small></i>
                <a href="#" id="word2">Data Service</a>&nbsp;
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Service</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Tambah Data</a>
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
                                    Data service digunakan untuk.......
                                </p>
                                <br>
                                @if(\Session::has('info'))
                                <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                        style="margin-top: -4px;">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>{{ \Session::get('info') }}</strong>
                                </div>
                                @endif
                                <table id="datatable-responsive"
                                    class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabel_user">
                                        @forelse($data as $data_service)
                                        <tr>
                                            <td>
                                                {{ $data_service->title }}
                                            </td>
                                            <td>{{ $data_service->description }}</td>
                                            <td style="text-transform:uppercase;">
                                                {{ $data_service->images ? $data_service->images : "Tidak Ada Gambar" }}
                                            </td>
                                            <td style="width:5%;">
                                                <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" role="button" aria-expanded="false">
                                                    Aksi
                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a href="#" target="_blank" class="dropdown-item">
                                                        <i class="fa fa-pencil"></i>&nbsp;
                                                        Edit Service
                                                    </a>
                                                    @if(auth()->user()->role == "admin")
                                                    <form action="#" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="fa fa-trash-o"></i>&nbsp;
                                                            Delete Service
                                                        </button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="3">Data Service Kosong</td>
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
@endsection
<!-- additional script -->
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