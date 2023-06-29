@extends('admin.layouts.app')
@section('title')
{{ $title }}
@endsection
@section('style_right_menu')
<style>
    #right_menu {
        position: fixed;
        z-index: 10000;
        width: 150px;
        background: #1b1a1a;
        border-radius: 5px;
        /* display: none; */
        transform: scale(0);
        transform-origin: top left;
    }

    #right_menu.visible {
        /* display: block; */
        transform: scale(1);
        transition: transform 200ms ease-in-out;
    }

    #right_menu .right_menu_item {
        padding: 8px 10px;
        font-size: 15px;
        color: #eee;
        cursor: pointer;
        border-radius: inherit;
    }

    #right_menu .right_menu_item:hover {
        background: #343434
    }
</style>
@endsection
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <p>
                <a href="/">Home</a>&nbsp;<small><i class="fa fa-long-arrow-right"></small></i>
                <a href="#">Product</a>&nbsp;
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
            <div class="tile-stats">
                <div class="icon">
                    <i class="fa fa-archive"></i>
                </div>
                <a href="#">
                    <div class="count">{{ $jml_product }}&nbsp;Item</div>
                </a>
                <h3>Total Item (Non Void)</h3>
                <p>Total Item (All Item)&nbsp;{{ $jml_product_all }}&nbsp;Item</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
            <div class="tile-stats">
                <div class="icon">
                    <i class="fa fa-inbox"></i>
                </div>
                <a href="#">
                    <div class="count">179</div>
                </a>
                <h3>Total Stock</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
            <div class="tile-stats">
                <div class="icon">
                    <i class="fa fa-clone"></i>
                </div>
                <a href="#">
                    <div class="count">179</div>
                </a>
                <h3>Total Category</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
            <div class="tile-stats">
                <div class="icon">
                    <i class="fa fa-trash"></i>
                </div>
                <a href="#">
                    <div class="count">179</div>
                </a>
                <h3>Void</h3>
                <p>Lorem ipsum psdea itgum rixt.</p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class=" col-md-12 col-sm-12">
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
                            <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab"
                                aria-controls="upload" aria-selected="false">Upload</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Coming Soon</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="x_panel" style="height: auto;">
                                        <div class="x_title">
                                            <h2>Form Tambah Data Produk</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"><i
                                                            class="fa fa-wrench"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" style="display: none;">
                                            <form class="" action="{{ route('product.store') }}" method="post" validate
                                                enctype="multipart/form-data">
                                                @csrf
                                                <p>Silahkan masukan file dengan tipe ekstensi .XLS .XLSX .CSV</p>
                                                <span class="section">Form Upload</span>
                                                @if(($errors->any()) != null)
                                                @foreach ($errors->all() as $error)
                                                <div class="alert alert-danger alert-dismissible " role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close" style="margin-top: -4px;">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    {{ $error }}
                                                </div>
                                                @endforeach
                                                @endif
                                                @if(\Session::has('info'))
                                                <div class="alert alert-info alert-dismissible" role="alert"
                                                    data-timeout="2000">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close" style="margin-top: -4px;">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <strong>{{ \Session::get('info') }}</strong>
                                                </div>
                                                @endif
                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">File
                                                        Excel<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="file" name="file_produk"
                                                            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                                            required>
                                                        <br>
                                                        <small>Besar file: maksimum 10.000.000 bytes (10 Megabytes).
                                                            Ekstensi file yang
                                                            diperbolehkan: .XLS .XLSX .CSV</small>
                                                    </div>
                                                </div>
                                                <div class="ln_solid">
                                                    <div class="form-group">
                                                        <div class="col-md-6 offset-md-3">
                                                            <br>
                                                            <button type='submit'
                                                                class="btn btn-primary">Upload</button>
                                                            <button type='reset' class="btn btn-success">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Data Produk</h2>
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
                                                        <div class="alert alert-info alert-dismissible" role="alert"
                                                            data-timeout="2000">
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close"><span aria-hidden="true">x</span>
                                                            </button>
                                                            <strong>{{ \Session::get('info') }}</strong>
                                                        </div>
                                                        @endif
                                                        <table id="datatable-responsive"
                                                            class="table table-striped table-bordered dt-responsive nowrap bulk_action"
                                                            cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th width="20px">
                                                                        <input type="checkbox" id="check-all"
                                                                            class="flat">
                                                                    </th>
                                                                    <th>Id</th>
                                                                    <th>Nama Produk</th>
                                                                    <th>Harga Produk (USD)</th>
                                                                    <th>Harga Produk (IDR)</th>
                                                                    <th>Stok Produk (Pcs)</th>
                                                                    <th>Brand Produk</th>
                                                                    <th>Gambar Produk</th>
                                                                    <th width="20px;">fVoid</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse($data as $data_product)
                                                                <tr>
                                                                    <td class="a-center">
                                                                        <input type="checkbox" class="flat"
                                                                            name="table_records">
                                                                    </td>
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
                                                                    <td class="a-center">
                                                                        <input type="checkbox" class="flat"
                                                                            name="table_records">
                                                                    </td>
                                                                    <td>
                                                                        <a id="drop4" href="#" class="dropdown-toggle"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            role="button" aria-expanded="false">
                                                                            Aksi
                                                                            <span class="caret"></span>
                                                                        </a>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuButton">
                                                                            <a href="#" target="_blank"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-pencil"></i>&nbsp;
                                                                                Edit Data
                                                                            </a>
                                                                            @if(auth()->user()->role == "admin")
                                                                            <form action="#" method="post">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit"
                                                                                    class="dropdown-item">
                                                                                    <i class="fa fa-trash-o"></i>&nbsp;
                                                                                    Delete Data
                                                                                </button>
                                                                            </form>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @empty
                                                                <tr>
                                                                    <td colspan="9">Data Product Kosong</td>
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
                        <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Form Tambah Data Produk</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"><i
                                                            class="fa fa-wrench"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <form class="" action="{{ route('product.store') }}" method="post" validate
                                                enctype="multipart/form-data">
                                                @csrf
                                                <p>Silahkan masukan file dengan tipe ekstensi .XLS .XLSX .CSV</p>
                                                <span class="section">Form Upload</span>
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
                                                <div class="alert alert-info alert-dismissible" role="alert"
                                                    data-timeout="2000">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close"><span aria-hidden="true">x</span>
                                                    </button>
                                                    <strong>{{ \Session::get('info') }}</strong>
                                                </div>
                                                @endif
                                                <div class="field item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">File
                                                        Excel<span class="required">*</span></label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="file" name="file_produk"
                                                            accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                                            required>
                                                        <br>
                                                        <small>Besar file: maksimum 10.000.000 bytes (10 Megabytes).
                                                            Ekstensi file yang
                                                            diperbolehkan: .XLS .XLSX .CSV</small>
                                                    </div>
                                                </div>
                                                <div class="ln_solid">
                                                    <div class="form-group">
                                                        <div class="col-md-6 offset-md-3">
                                                            <br>
                                                            <button type='submit'
                                                                class="btn btn-primary">Upload</button>
                                                            <button type='reset' class="btn btn-success">Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@section('content_right_menu')
<div id="right_menu">
    <div class="right_menu_item">Info</div>
    <div class="right_menu_item">Menu 2</div>
    <div class="right_menu_item">Menu 3</div>
    <div class="right_menu_item">Menu 4</div>
    <div class="right_menu_item">Delete</div>
</div>
@endsection
@section('script')
<script>
    // initialize a validator instance from the "FormValidator" constructor.
    // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({
        "events": ['blur', 'input', 'change']
    }, document.forms[0]);
    // on form "submit" event
    document.forms[0].onsubmit = function(e) {
        var submit = true,
            validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
    };
    // on form "reset" event
    document.forms[0].onreset = function(e) {
        validator.reset();
    };
    // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function() {
        validator.settings.alerts = !this.checked;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
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
@endsection
@section('script_right_menu')
<!-- <script>
        if (document.addEventListener) {
            document.addEventListener('contextmenu', function(e) {
                alert("You've tried to open context menu"); //here you draw your own menu
                e.preventDefault();
            }, false);
        } else {
            document.attachEvent('oncontextmenu', function() {
                alert("You've tried to open context menu");
                window.event.returnValue = false;
            });
        }
    </script> -->
<script>
    const contextMenu = document.getElementById("right_menu");
    const scope = document.querySelector("body");

    scope.addEventListener("contextmenu", (event) => {
        event.preventDefault();

        const {
            clientX: mouseX,
            clientY: mouseY
        } = event;

        contextMenu.style.top = `${mouseY}px`;
        contextMenu.style.left = `${mouseX}px`;

        contextMenu.classList.remove("visible");

        setTimeout(() => {
            contextMenu.classList.add("visible");
        });
    });

    scope.addEventListener("click", (e) => {
        if (e.target.offsetParent != contextMenu) {
            contextMenu.classList.remove("visible");
        }
    });

    // const normalizePozition = (mouseX, mouseY) => {
    //     // ? compute what is the mouse position relative to the container element (scope)
    //     const {
    //         left: scopeOffsetX,
    //         top: scopeOffsetY,
    //     } = scope.getBoundingClientRect();

    //     const scopeX = mouseX - scopeOffsetX;
    //     const scopeY = mouseY - scopeOffsetY;

    //     // ? check if the element will go out of bounds
    //     const outOfBoundsOnX =
    //         scopeX + contextMenu.clientWidth > scope.clientWidth;

    //     const outOfBoundsOnY =
    //         scopeY + contextMenu.clientHeight > scope.clientHeight;

    //     let normalizedX = mouseX;
    //     let normalizedY = mouseY;

    //     // ? normalzie on X
    //     if (outOfBoundsOnX) {
    //         normalizedX =
    //             scopeOffsetX + scope.clientWidth - contextMenu.clientWidth;
    //     }

    //     // ? normalize on Y
    //     if (outOfBoundsOnY) {
    //         normalizedY =
    //             scopeOffsetY + scope.clientHeight - contextMenu.clientHeight;
    //     }

    //     return {
    //         normalizedX,
    //         normalizedY
    //     };
    // };

    // scope.addEventListener("contextmenu", (event) => {
    //     event.preventDefault();

    //     const {
    //         offsetX: mouseX,
    //         offsetY: mouseY
    //     } = event;

    //     const {
    //         normalizedX,
    //         normalizedY
    //     } = normalizePozition(mouseX, mouseY);

    //     contextMenu.style.top = `${normalizedY}px`;
    //     contextMenu.style.left = `${normalizedX}px`;

    //     contextMenu.classList.remove("visible");

    //     setTimeout(() => {
    //         contextMenu.classList.add("visible");
    //     });
    // });
</script>
@endsection