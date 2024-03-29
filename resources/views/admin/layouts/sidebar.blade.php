<div class="col-md-3 left_col" id="bgsidebar1">
    <div class="left_col scroll-view" id="bgsidebar2">
        <div class="navbar nav_title" style="border: 0;" id="bgsidebar3">
            <a href="{{ route('dashboard.index') }}" class="site_title"><i class="fa fa-database"></i>
                <span>
                    Dashboard
                </span>
            </a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                @if(auth()->user()->file_foto == null)
                <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="dimaz4.png" class="img-circle profile_img">
                @else
                <img src="{{ asset('storage/data/image/user/'.auth()->user()->file_foto) }}"
                    alt="{{ auth()->user()->file_foto }}" class="img-circle profile_img"
                    style="max-width: 57px;max-height: 57px;object-fit:cover;object-position:center">
                <!-- <img src="{{ url('/data_file/user/foto/'.auth()->user()->file_foto) }}"
                    alt="{{ auth()->user()->file_foto }}" class="img-circle profile_img"> -->
                @endif
            </div>
            <div class="profile_info">
                <span>
                    Access <span style="text-transform:uppercase;">{{ auth()->user()->role }}</span>
                </span>
                <h2>{{ auth()->user()->first_name }}&nbsp;{{ auth()->user()->last_name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Homepage</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i>Home<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            <li><a href="{{ route('index') }}" target="_blank">Landing Page</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Data Latihan (Admin)</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bookmark"></i>Latihan<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('latihan.index') }}">Halaman Latihan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            @if(auth()->user()->isAdmin() || auth()->user()->isSuper())
            <div class="menu_section">
                <h3>Data Log (Admin)</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cog"></i>Log Auth<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('log_auth.index') }}">Daftar Data Log Auth</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Data Master (Admin)</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-user"></i>Data User<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('user.index') }}">Daftar Data User</a></li>
                            <li><a href="{{ route('user.create') }}">Tambah Data User</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-archive"></i>Data Produk<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('product.index') }}">Daftar Data Produk</a></li>
                            <li><a href="#">Tambah Data Produk</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            @endif
            <div class="menu_section">
                <h3>Data Api</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-database"></i>Data Api<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('api.index') }}">Daftar Data API Produk</a></li>
                            <li><a href="{{ route('api_product.index') }}">Daftar Data API Produk (EndPoint)</a></li>
                            <!-- <li><a href="/api/create">Tambah Data Api</a></li> -->
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Keuangan</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-usd"></i>Data Keuangan<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Daftar Data Keuangan</a></li>
                            <li><a href="#">Form Tambah Data Keuangan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Other Menu</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-gear"></i>Change Log<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('change_log.index') }}" target="_blank">Change Log</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <!-- <div class="sidebar-footer hidden-small" style="margin-bottom:40px;">
            <span id="time">#</span>
        </div> -->
        <div class="sidebar-footer hidden-small" id="bgsidebar4" style="padding-top:10px;">
            <a data-toggle="tooltip" data-placement="top" title="Settings" id="bgtooltips1">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen" onClick="go_full_screen();"
                id="bgtooltips2">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock" id="bgtooltips3">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout" id="bgtooltips4">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>