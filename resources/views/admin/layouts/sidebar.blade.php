<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="fa fa-database"></i>
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
                <img src="{{ url('/data_file/user/foto/'.auth()->user()->file_foto) }}"
                    alt="{{ auth()->user()->file_foto }}" class="img-circle profile_img">
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
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="/">Dashboard2</a></li>
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
            @if(auth()->user()->role == "admin")
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
                            <li><a href="{{ route('api.index') }}">Daftar Data Api</a></li>
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
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen" onClick="go_full_screen();">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
<script>
    function go_full_screen() {
        var elem = document.documentElement;
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen();
        }
    }
</script>