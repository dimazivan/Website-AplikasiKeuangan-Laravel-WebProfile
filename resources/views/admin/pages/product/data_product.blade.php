@extends('admin.layouts.app')
@section('title')
{{ $title }}
@endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-archive"></i>&nbsp;Product<small>Inventory</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="data-tab" data-toggle="tab" href="#data" role="tab"
                                aria-controls="data" aria-selected="true">Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Data Product</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"><i
                                                            class="fa fa-wrench"></i></a>
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
                                                            Data Produk berasal dari data API yang disimpan ke database
                                                            lokal,
                                                            <a href="https://dummyjson.com/products" target="_blank">
                                                                Link https://dummyjson.com/products
                                                            </a>
                                                        </p>
                                                        @if(\Session::has('info'))
                                                        <div class="alert alert-info alert-dismissible" role="alert"
                                                            data-timeout="2000">
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close"><span aria-hidden="true">x</span>
                                                            </button>
                                                            <strong>{{ \Session::get('info') }}</strong>
                                                        </div>
                                                        @endif
                                                        <table id="datatable-responsive"
                                                            class="table table-striped table-bordered dt-responsive nowrap"
                                                            cellspacing="0" width="100%">
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
                                                                @forelse($data as $data_product)
                                                                <tr>
                                                                    <td>{{ $data_product->id }}</td>
                                                                    <td>{{ $data_product->title }}</td>
                                                                    <td>${{ $data_product->price }}</td>
                                                                    <td>Rp.{{
                                                                        number_format($data_product->price*15000,2,',','.')
                                                                        }}</td>
                                                                    <td>{{ $data_product->stock }} Pcs</td>
                                                                    <td>{{ $data_product->brand }}</td>
                                                                    <td>
                                                                        <a href="{{ $data_product->images }}"
                                                                            target="_blank">
                                                                            Link {{ $data_product->title }}
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                @empty
                                                                <tr>
                                                                    <td colspan="7">Data Product Kosong</td>
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
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk
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