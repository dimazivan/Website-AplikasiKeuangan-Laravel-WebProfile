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
                                <a class="ud-menu-scroll" href="{{ route('index') }}">
                                    {{__('project.header.nav_home')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#">{{__('project.header.nav_about')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#team">{{__('project.header.nav_team')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#faq">{{__('project.header.nav_faq')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#">{{__('project.header.nav_contact')}}</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="javascript:void(0)">{{__('project.header.nav_pages')}}</a>
                                <ul class="ud-submenu">
                                    <li class="ud-submenu-item">
                                        <a href="{{ route('project.index') }}" class="ud-submenu-link">
                                            {{__('project.header.nav_project')}}
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link">
                                            {{__('project.header.nav_about')}}
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link">
                                            {{__('project.header.nav_pricing')}}
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link">
                                            {{__('project.header.nav_contact')}}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @if(auth()->user())
                    <div class="navbar-btn d-none d-sm-inline-block" style="padding-left: -30px;">
                        <ul id="nav" class="navbar-nav mx-auto">
                            <li class="nav-item nav-item-has-children">
                                <a href="javascript:void(0)" style="text-transform: capitalize;">Welcome,&nbsp;
                                    <i class="lni lni-user"></i>
                                    {{
                                    $first_name = Str::limit(auth()->user()->first_name, 10)
                                    }}
                                </a>
                                <ul class="ud-submenu">
                                    <li class="ud-submenu-item">
                                        <a href="{{ route('dashboard.index') }}" class="ud-submenu-link"
                                            target="_blank">
                                            <i class="lni lni-dashboard"></i>
                                            {{__('project.header.nav_admin')}}
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link">
                                            <i class="lni lni-code"></i>
                                            404 Page
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="{{ route('logout') }}" class="ud-submenu-link">
                                            <i class="lni lni-shift-right"></i>
                                            {{__('project.header.nav_logout')}}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="navbar-btn d-none d-sm-inline-block" style="padding-left: -30px;">
                        <a href="{{ route('login') }}" class="ud-main-btn ud-login-btn">
                            {{__('project.header.nav_signin')}}
                        </a>
                        <a class="ud-main-btn ud-white-btn" href="{{ route('register.index') }}">
                            {{__('project.header.nav_signup')}}
                        </a>
                    </div>
                    @endif
                    <div class="navbar-btn d-none d-sm-inline-block" style="padding-left: 30px;">
                        <!-- Localization -->
                        <a href="#" onclick="lange('id');">
                            ID
                        </a>&nbsp;|
                        <a href="#" onclick="lange('en');">
                            EN
                        </a>&nbsp;
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<script>
    function lange(val) {
        // alert('ahay')
        oldurl = window.location.href;
        console.log(window.location.href);
        console.log(oldurl);
        console.log(val);
        if (val == "id") {
            newurl = oldurl.replace("/en/", "/id/");
        } else if (val == "en") {
            newurl = oldurl.replace("/id/", "/en/");
        } else {
            // newurl = old.replace("/id/", "/en/");
        }
        console.log(newurl)
        window.location.href = newurl;
    }
</script>
<!-- ====== Header End ====== -->