<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-database"></i>
                <span>
                    Dashboard
                </span>
            </a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="dimaz4.png" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Access {{ auth()->user()->role }}</span>
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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Dashboard2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            @if(auth()->user()->role == "admin")
            <div class="menu_section">
                <h3>Data Master</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-user"></i>Data User<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="/user">Daftar Data User</a></li>
                            <li><a href="/user/create">Tambah Data User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            @endif
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
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
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