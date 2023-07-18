@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : __('data_user.header.title'); }}
@endsection
@if(auth()->user()->isAdmin() || auth()->user()->isSuper())
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
                <a href="/" id="word1">{{__('data_user.header.nav_home')}}</a>&nbsp;
                <small>
                    <i class="fa fa-long-arrow-right"> </i>
                </small>
                <a href="#" id="word2">{{__('data_user.header.nav_title')}}</a>&nbsp;
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{__('data_user.header.nav_title')}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item"
                                    href="{{ route('user.create') }}">{{__('data_user.content.btn_adddata')}}</a>
                                <a class="dropdown-item" href="{{ route('log_user.index') }}" target="_blank">
                                    {{__('data_user.content.btn_logdata')}}
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
                                    {{__('data_user.header.desc_title')}}
                                </p>
                                <!-- <button class="btn btn-primary" data-toggle="modal"
                                    data-target=".modaladduser" disabled>
                                    Tambah Data Ajax (Under Develop)
                                </button> -->
                                <a class="btn btn-app" data-toggle="modal" data-target=".modalscandata">
                                    <i class="fa fa-search"></i>
                                    {{__('data_user.content.btn_scanqr')}}
                                </a>
                                <a class="btn btn-app">
                                    <i class="fa fa-trash"></i>
                                    {{__('data_user.content.btn_deletedata')}}
                                </a>
                                <br>
                                @if(\Session::has('info'))
                                <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                        style="margin-top: -4px;">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>
                                        {{ \Session::get('info') }}
                                    </strong>
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
                                            <th width="30px;">
                                                {{__('data_user.table.title_col1')}}
                                            </th>
                                            <th>
                                                {{__('data_user.table.title_col2')}}
                                            </th>
                                            <th>
                                                {{__('data_user.table.title_col3')}}
                                            </th>
                                            <th>
                                                {{__('data_user.table.title_col4')}}
                                            </th>
                                            <th width="20px">
                                                {{__('data_user.table.title_col5')}}
                                            </th>
                                            <th>
                                                {{__('data_user.table.title_col6')}}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabel_user">
                                        @forelse($data_user as $data_user)
                                        <tr>
                                            <td hidden>
                                                {{ Crypt::encrypt($data_user->id) }}
                                            </td>
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records"
                                                    id="cbnousernon" value="{{ Crypt::encrypt($data_user->id) }}">
                                                <input type="hidden" class="flat" name="table_records" id="cbnouser"
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
                                                            id="formcbckdeacuser{{Crypt::encrypt($data_user->id)}}">
                                                            @csrf
                                                            @method('post')
                                                            <input type="hidden" class="btn btn-primary"
                                                                name="cbckuserid"
                                                                value="{{ Crypt::encrypt($data_user->id) }}">
                                                            <input type="checkbox" class="js-switch"
                                                                id="cbckuser{{ Crypt::encrypt($data_user->id) }}"
                                                                name="cbckuseridnon" checked
                                                                value="{{ Crypt::encrypt($data_user->id) }}"
                                                                onclick="deactiveUser();">
                                                            <span id="txttitle1" hidden>
                                                                {{__('data_user.script.title1')}}
                                                            </span>
                                                            <span id="text1" hidden>
                                                                {{__('data_user.script.text1')}}
                                                            </span>
                                                            <span id="btn_yes1" hidden>
                                                                {{__('data_user.script.btn_yes1')}}
                                                            </span>
                                                            <span id="btn_no1" hidden>
                                                                {{__('data_user.script.btn_no1')}}
                                                            </span>
                                                            <span id="text_titlesuccess1" hidden>
                                                                {{__('data_user.script.text_titlesuccess1')}}
                                                            </span>
                                                            <span id="text_titlecancel1" hidden>
                                                                {{__('data_user.script.text_titlecancel1')}}
                                                            </span>
                                                            <span id="text_success1" hidden>
                                                                {{__('data_user.script.text_success1')}}
                                                            </span>
                                                            <span id="text_cancel1" hidden>
                                                                {{__('data_user.script.text_cancel1')}}
                                                            </span>
                                                        </form>
                                                        @elseif($data_user->status == 2)
                                                        <form action="{{ route('active.user') }}" method="post"
                                                            id="formcbckacuser{{Crypt::encrypt($data_user->id)}}">
                                                            @csrf
                                                            @method('post')
                                                            <input type="hidden" class="btn btn-primary"
                                                                name="cbckuserid"
                                                                value="{{ Crypt::encrypt($data_user->id) }}">
                                                            <input type="checkbox" class="js-switch"
                                                                id="cbckuser{{ Crypt::encrypt($data_user->id) }}"
                                                                name="cbckuseridnon"
                                                                value="{{ Crypt::encrypt($data_user->id) }}"
                                                                onclick="activeUser();">
                                                            <span id="txttitle2" hidden>
                                                                {{__('data_user.script.title2')}}
                                                            </span>
                                                            <span id="text2" hidden>
                                                                {{__('data_user.script.text2')}}
                                                            </span>
                                                            <span id="btn_yes2" hidden>
                                                                {{__('data_user.script.btn_yes2')}}
                                                            </span>
                                                            <span id="btn_no1" hidden>
                                                                {{__('data_user.script.btn_no1')}}
                                                            </span>
                                                            <span id="text_titlesuccess1" hidden>
                                                                {{__('data_user.script.text_titlesuccess1')}}
                                                            </span>
                                                            <span id="text_titlecancel1" hidden>
                                                                {{__('data_user.script.text_titlecancel1')}}
                                                            </span>
                                                            <span id="text_success1" hidden>
                                                                {{__('data_user.script.text_success1')}}
                                                            </span>
                                                            <span id="text_cancel1" hidden>
                                                                {{__('data_user.script.text_cancel1')}}
                                                            </span>
                                                        </form>
                                                        @else
                                                        <form action="{{ route('active.user') }}" method="post"
                                                            id="formcbckacuser{{Crypt::encrypt($data_user->id)}}">
                                                            @csrf
                                                            @method('post')
                                                            <input type="hidden" class="btn btn-primary"
                                                                name="cbckuserid"
                                                                value="{{ Crypt::encrypt($data_user->id) }}">
                                                            <input type="checkbox" class="js-switch"
                                                                id="cbckuser{{ Crypt::encrypt($data_user->id) }}"
                                                                name="cbckuseridnon"
                                                                value="{{ Crypt::encrypt($data_user->id) }}"
                                                                onclick="activeUser();">
                                                            <span id="txttitle2" hidden>
                                                                {{__('data_user.script.title2')}}
                                                            </span>
                                                            <span id="text2" hidden>
                                                                {{__('data_user.script.text2')}}
                                                            </span>
                                                            <span id="btn_yes2" hidden>
                                                                {{__('data_user.script.btn_yes2')}}
                                                            </span>
                                                            <span id="btn_no1" hidden>
                                                                {{__('data_user.script.btn_no1')}}
                                                            </span>
                                                            <span id="text_titlesuccess1" hidden>
                                                                {{__('data_user.script.text_titlesuccess1')}}
                                                            </span>
                                                            <span id="text_titlecancel1" hidden>
                                                                {{__('data_user.script.text_titlecancel1')}}
                                                            </span>
                                                            <span id="text_success1" hidden>
                                                                {{__('data_user.script.text_success1')}}
                                                            </span>
                                                            <span id="text_cancel1" hidden>
                                                                {{__('data_user.script.text_cancel1')}}
                                                            </span>
                                                        </form>
                                                        @endif
                                                    </label>
                                                </div>
                                                <script>
                                                    function deactiveUser() {
                                                        var txttitle1 = document.getElementById("txttitle1").innerText;
                                                        var text1 = document.getElementById("text1").innerText;
                                                        var btn_yes1 = document.getElementById("btn_yes1").innerText;
                                                        var btn_no1 = document.getElementById("btn_no1").innerText;
                                                        var text_titlesuccess1 = document.getElementById(
                                                            "text_titlesuccess1").innerText;
                                                        var text_titlecancel1 = document.getElementById(
                                                            "text_titlecancel1").innerText;
                                                        var text_success1 = document.getElementById("text_success1")
                                                            .innerText;
                                                        var text_cancel1 = document.getElementById("text_cancel1")
                                                            .innerText;
                                                        // console.log(txttitle1);
                                                        // alert('ahay');
                                                        var formcbckdeacuser = event.target.form;
                                                        // event.preventDefault(); // prevent form submit
                                                        // var formcbckuser = event.target.form; // storing the form
                                                        // console.log(formcbckuser);
                                                        swal({
                                                                title: txttitle1,
                                                                text: text1,
                                                                type: "warning",
                                                                showCancelButton: true,
                                                                confirmButtonColor: "#DD6B55",
                                                                confirmButtonText: btn_yes1,
                                                                cancelButtonText: btn_no1,
                                                                closeOnConfirm: false,
                                                                closeOnCancel: false
                                                            },
                                                            function(isConfirm) {
                                                                if (isConfirm) {
                                                                    console.log(formcbckdeacuser);
                                                                    formcbckdeacuser.submit();
                                                                    swal(text_titlesuccess1,
                                                                        text_success1,
                                                                        "success");
                                                                } else {
                                                                    swal(text_titlecancel1,
                                                                        text_cancel1,
                                                                        "error");
                                                                }
                                                            });
                                                    }

                                                    function activeUser() {
                                                        var txttitle2 = document.getElementById("txttitle2").innerText;
                                                        var text2 = document.getElementById("text2").innerText;
                                                        var btn_yes2 = document.getElementById("btn_yes2").innerText;
                                                        var btn_no1 = document.getElementById("btn_no1").innerText;
                                                        var text_titlesuccess1 = document.getElementById(
                                                            "text_titlesuccess1").innerText;
                                                        var text_titlecancel1 = document.getElementById(
                                                            "text_titlecancel1").innerText;
                                                        var text_success1 = document.getElementById("text_success1")
                                                            .innerText;
                                                        var text_cancel1 = document.getElementById("text_cancel1")
                                                            .innerText;
                                                        var formcbckacuser = event.target.form;
                                                        swal({
                                                                title: txttitle2,
                                                                text: text2,
                                                                type: "warning",
                                                                showCancelButton: true,
                                                                confirmButtonColor: "#DD6B55",
                                                                confirmButtonText: btn_yes2,
                                                                cancelButtonText: btn_no1,
                                                                closeOnConfirm: false,
                                                                closeOnCancel: false
                                                            },
                                                            function(isConfirm) {
                                                                if (isConfirm) {
                                                                    console.log(formcbckacuser);
                                                                    formcbckacuser.submit();
                                                                    swal(text_titlesuccess1,
                                                                        text_success1,
                                                                        "success");
                                                                } else {
                                                                    swal(text_titlecancel1,
                                                                        text_cancel1,
                                                                        "error");
                                                                }
                                                            });
                                                    }
                                                </script>
                                            </td>
                                            <td style="width:5%;">
                                                <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" role="button" aria-expanded="false">
                                                    {{__('data_user.table.title_col6')}}
                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a href="#" target="_blank" class="dropdown-item">
                                                        <i class="fa fa-eye"></i>&nbsp;
                                                        {{__('data_user.table.btn_view')}}
                                                    </a>
                                                    @if(auth()->user()->isAdmin() || auth()->user()->isSuper())
                                                    <a href="{{ route('user.edit',[Crypt::encrypt($data_user->id)]) }}"
                                                        target="_blank" class="dropdown-item">
                                                        <i class="fa fa-pencil"></i>&nbsp;
                                                        {{__('data_user.table.btn_edit')}}
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
                                                            {{__('data_user.table.btn_delete')}}
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
                                            <td colspan="7">
                                                {{__('data_user.table.txt_empty')}}
                                            </td>
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
@if(auth()->user()->isAdmin() || auth()->user()->isSuper())
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