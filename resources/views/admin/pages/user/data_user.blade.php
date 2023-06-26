@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : "Halaman Data User"; }}
@endsection
@if(auth()->user()->role == 'admin')
@section('style')
<style>
    tr {
        cursor: pointer;
    }
</style>
@endsection
@endif
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <p>
                <a href="/" id="word1">Home</a>&nbsp;<small><i class="fa fa-long-arrow-right"></small></i>
                <a href="#" id="word2">Data User</a>&nbsp;
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data User</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('user.create') }}">Tambah Data</a>
                                <a class="dropdown-item" href="{{ route('log_user.index') }}" target="_blank">
                                    Cek Log User
                                </a>
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
                                <!-- <button class="btn btn-primary" data-toggle="modal"
                                    data-target=".modaladduser" disabled>
                                    Tambah Data Ajax (Under Develop)
                                </button> -->
                                <a class="btn btn-app" data-toggle="modal" data-target=".modalscandata">
                                    <i class="fa fa-search"></i>
                                    Scan QR
                                </a>
                                <a class="btn btn-app">
                                    <i class="fa fa-trash"></i>
                                    Delete Data
                                </a>
                                <br>
                                @if(\Session::has('info'))
                                <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">x</span>
                                    </button>
                                    <strong>{{ \Session::get('info') }}</strong>
                                </div>
                                @endif
                                <table id="datatable-responsive"
                                    class="table table-hover table-striped table-bordered dt-responsive nowrap bulk_action"
                                    cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th hidden>
                                                Data
                                            </th>
                                            <th width="20px;">
                                                <input type="checkbox" id="check-all" class="flat">
                                            </th>
                                            <th width="30px;">QR Code</th>
                                            <th>Nama User</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th width="20px">Status (Aktif)</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabel_user">
                                        @forelse($data_user as $data_user)
                                        <tr>
                                            <td hidden>
                                                {{ Crypt::encrypt($data_user->id) }}
                                            </td>
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records" id="cbnouser"
                                                    value="{{ Crypt::encrypt($data_user->id) }}">
                                            </td>
                                            <td>
                                                {{
                                                QrCode::size(50)->generate($data_user->first_name)
                                                }}
                                            </td>
                                            <td>
                                                {{ $data_user->first_name }}&nbsp;
                                                {{ $data_user->last_name }}
                                            </td>
                                            <td>{{ substr_replace($data_user->username,'*****',3,3) }}</td>
                                            <td style="text-transform:uppercase;">{{ $data_user->role }}</td>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        @if($data_user->status == 1)
                                                        <form action="{{ route('deactive.user') }}" method="post"
                                                            id="formcbckuser{{Crypt::encrypt($data_user->id)}}">
                                                            @csrf
                                                            @method('post')
                                                            <input type="checkbox" class="js-switch"
                                                                id="cbckuser{{ Crypt::encrypt($data_user->id) }}"
                                                                name="cbckuserid"
                                                                value="{{ Crypt::encrypt($data_user->id) }}" checked
                                                                onclick="deactiveUser();">
                                                        </form>
                                                        @elseif($data_user->status == 2)
                                                        <input type="checkbox" class="js-switch"
                                                            id="cbckuser{{ Crypt::encrypt($data_user->id) }}"
                                                            name="cbckuserid"
                                                            value="{{ Crypt::encrypt($data_user->id) }}"
                                                            onclick="activeUser()">
                                                        @else
                                                        <input type="checkbox" class="js-switch"
                                                            id="cbckuser{{ Crypt::encrypt($data_user->id) }}"
                                                            name="cbckuserid"
                                                            value="{{ Crypt::encrypt($data_user->id) }}"
                                                            onclick="activeUser()">
                                                        @endif
                                                    </label>
                                                </div>
                                                <script>
                                                    function deactiveUser() {
                                                        var formcbckuser = event.target.form;
                                                        // event.preventDefault(); // prevent form submit
                                                        // var formcbckuser = event.target.form; // storing the form
                                                        // console.log(formcbckuser);
                                                        swal({
                                                                title: "Are you sure to deactive this user?",
                                                                text: "You can turn it back active later",
                                                                type: "warning",
                                                                showCancelButton: true,
                                                                confirmButtonColor: "#DD6B55",
                                                                confirmButtonText: "Yes, deactive it!",
                                                                cancelButtonText: "No, cancel it!",
                                                                closeOnConfirm: false,
                                                                closeOnCancel: false
                                                            },
                                                            function(isConfirm) {
                                                                if (isConfirm) {
                                                                    console.log(formcbckuser);
                                                                    formcbckuser.submit();
                                                                    swal("Success",
                                                                        "Your data already updated :)",
                                                                        "success");
                                                                } else {
                                                                    swal("Cancelled",
                                                                        "You cancelled :)",
                                                                        "error");
                                                                }
                                                            });
                                                    }

                                                    function activeUser() {
                                                        // 
                                                    }
                                                </script>
                                            </td>
                                            <td style="width:5%;">
                                                <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" role="button" aria-expanded="false">
                                                    Aksi
                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a href="#" target="_blank" class="dropdown-item">
                                                        <i class="fa fa-eye"></i>&nbsp;
                                                        View Data
                                                    </a>
                                                    @if(auth()->user()->isAdmin() || auth()->user()->isSuper())
                                                    <a href="{{ route('user.edit',[Crypt::encrypt($data_user->id)]) }}"
                                                        target="_blank" class="dropdown-item">
                                                        <i class="fa fa-pencil"></i>&nbsp;
                                                        Edit Data
                                                    </a>
                                                    <form
                                                        action="{{route('user.destroy', [Crypt::encrypt($data_user->id)])}}"
                                                        method="post" id="formdel{{Crypt::encrypt($data_user->id)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            id="btndel{{Crypt::encrypt($data_user->id)}}"
                                                            class="dropdown-item" onclick="delFunction()">
                                                            <i class="fa fa-trash-o"></i>&nbsp;
                                                            Delete Data
                                                        </button>
                                                    </form>
                                                    <script>
                                                        function delFunction() {
                                                            event.preventDefault(); // prevent form submit
                                                            var form = event.target.form; // storing the form
                                                            console.log(form);
                                                            swal({
                                                                    title: "Are you sure?",
                                                                    text: "You cannt recover data permanently",
                                                                    type: "warning",
                                                                    showCancelButton: true,
                                                                    confirmButtonColor: "#DD6B55",
                                                                    confirmButtonText: "Yes, delete it!",
                                                                    cancelButtonText: "No, cancel it!",
                                                                    closeOnConfirm: false,
                                                                    closeOnCancel: false
                                                                },
                                                                function(isConfirm) {
                                                                    if (isConfirm) {
                                                                        form
                                                                            .submit(); // submitting the form when user press yes
                                                                        swal("Success",
                                                                            "Your data already deleted :)",
                                                                            "success");
                                                                    } else {
                                                                        swal("Cancelled",
                                                                            "Your data is safe :)",
                                                                            "error");
                                                                    }
                                                                });
                                                        }
                                                    </script>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7">Data User Kosong</td>
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
<script>
    $('#datatable-responsive').dataTable({
        "order": [3, "asc"],
        "columnDefs": [{
            "targets": [1, 2, 6, 7],
            "orderable": false,
        }]
    });
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
<!-- <script>
    $(document).ready(function() {
        $('input:checkbox[name=table_records]').on('ifToggled', function(event) {
            // console.log('test');
            $('input:checkbox[name=table_records]').val();
        });
    });
</script> -->
@if(auth()->user()->role == 'admin')
<!-- <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> -->
<script src="{{ asset('asset/js/click_datatableuser.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('asset/js/instascan.min.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{ asset('asset/js/scan.js') }}"></script> -->
@endif
@endsection
<!-- additional components -->
@section('components')
@include('admin.components.modal.modal_add_user')
@include('admin.components.modal.modal_datatable')
@include('admin.components.modal.modal_scandata')
@endsection