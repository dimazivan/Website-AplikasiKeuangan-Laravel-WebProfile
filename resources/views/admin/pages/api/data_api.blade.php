@extends('admin.layouts.app')
@section('title')
{{ $title }}
@endsection
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <p>
                <a href="/">Home</a>&nbsp;<small><i class="fa fa-long-arrow-right"></small></i>
                <a href="#">Data API</a>&nbsp;
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data API</h2>
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
                                    Data Api.
                                </p>
                                @if(\Session::has('info'))
                                <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">x</span>
                                    </button>
                                    <strong>{{ \Session::get('info') }}</strong>
                                </div>
                                @endif
                                <table id="datatable-responsive"
                                    class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Produk (USD)</th>
                                            <th>Harga Produk (IDR)</th>
                                            <th>Stok Produk (Pcs)</th>
                                            <th>Brand Produk</th>
                                            <th>Gambar Produk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($dataMap as $data_api => $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>${{ $item->price }}</td>
                                            <td>Rp.{{ number_format($item->price*15000,2,',','.') }}</td>
                                            <td>{{ $item->stock }} Pcs</td>
                                            <td>{{ $item->brand }}</td>
                                            <td>
                                                <a href="{{ $item->images[0] }}" target="_blank">
                                                    Link {{ $item->title }}
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7">Data Api Kosong</td>
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