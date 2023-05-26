<!-- ====== Header Start ====== -->
<header class="ud-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <!-- <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="Logo" /> -->
                        <img style="max-width:40px;max-height: 100px;border-radius: 50%;"
                            src="{{ asset('asset/icon/dimaz4.png') }}" alt="Logo" />
                    </a>
                    <button class="navbar-toggler">
                        <span class="toggler-icon"> </span>
                        <span class="toggler-icon"> </span>
                        <span class="toggler-icon"> </span>
                    </button>
                    <div class="navbar-collapse">
                        <ul id="nav" class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#home">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="javascript:void(0)"> Pages </a>
                                <ul class="ud-submenu">
                                    <li class="ud-submenu-item">
                                        <a href="/project" class="ud-submenu-link">
                                            Project Portofolio
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link">
                                            About Page
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link">
                                            Pricing Page
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link">
                                            Contact Page
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @if(auth()->user())
                    <div class="navbar-btn d-none d-sm-inline-block">
                        <ul id="nav" class="navbar-nav mx-auto">
                            <li class="nav-item nav-item-has-children">
                                <a href="javascript:void(0)">Welcome,&nbsp;
                                    {{ $first_name =
                                    Str::limit(auth()->user()->first_name, 10) }}
                                </a>
                                <ul class="ud-submenu">
                                    <li class="ud-submenu-item">
                                        <i class="lni lni-dashboard"></i>
                                        <a href="/dashboard" class="ud-submenu-link" target="_blank">
                                            Admin
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <i class="lni lni-code"></i>
                                        <a href="#" class="ud-submenu-link">404 Page</a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <i class="lni lni-shift-right"></i>
                                        <a href="/logout" class="ud-submenu-link">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="navbar-btn d-none d-sm-inline-block">
                        <a href="/login" class="ud-main-btn ud-login-btn">
                            Sign In
                        </a>
                        <a class="ud-main-btn ud-white-btn" href="/register">
                            Sign Up
                        </a>
                    </div>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ====== Header End ====== -->