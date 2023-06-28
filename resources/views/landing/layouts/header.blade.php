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
                                    {{__('layouts_landing.header.nav_home')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="{{ route('index') }}#about">
                                    {{__('layouts_landing.header.nav_about')}}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#team">{{__('layouts_landing.header.nav_team')}}</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="javascript:void(0)">{{__('layouts_landing.header.nav_project')}}</a>
                                <ul class="ud-submenu">
                                    <li class="ud-submenu-item">
                                        <a href="{{ route('project.index') }}" class="ud-submenu-link">
                                            {{__('layouts_landing.header.nav_project')}}
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="{{ route('pricing.index') }}" class="ud-submenu-link">
                                            {{__('layouts_landing.header.nav_pricing')}}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="javascript:void(0)">
                                    {{__('layouts_landing.header.nav_pages')}}
                                </a>
                                <ul class="ud-submenu">
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link">
                                            {{__('layouts_landing.header.nav_about')}}
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="{{ route('change_log.index') }}" class="ud-submenu-link"
                                            target="_blank">
                                            {{__('layouts_landing.header.nav_changelog')}}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="ud-menu-scroll" href="#contact">
                                    {{__('layouts_landing.header.nav_contact')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    @if(auth()->user())
                    <div class="navbar navbar-expand-lg">
                        <!-- <div class="navbar-btn d-none d-sm-inline-block" style="padding-left: -30px;"> -->
                        <ul id="nav" class="navbar-nav mx-auto">
                            <li class="nav-item nav-item-has-children">
                                <a href="javascript:void(0)" style="text-transform: capitalize;">Welcome,&nbsp;
                                    <i class="lni lni-user" style="padding-right: 10px;"></i>
                                    {{
                                    $first_name = Str::limit(auth()->user()->first_name, 10)
                                    }}
                                </a>
                                <ul class="ud-submenu">
                                    @if(auth()->user()->isAdmin() || auth()->user()->isSuper())
                                    <li class="ud-submenu-item">
                                        <a href="{{ route('dashboard.index') }}" class="ud-submenu-link" target="_blank"
                                            style="color:#212b36;">
                                            <i class="lni lni-dashboard" style="padding-right: 10px;"></i>
                                            {{__('layouts_landing.header.nav_admin')}}
                                        </a>
                                    </li>
                                    <li class="ud-submenu-item">
                                        <a href="#" class="ud-submenu-link" style="color:#212b36;">
                                            <i class="lni lni-code" style="padding-right: 10px;"></i>
                                            404 Page
                                        </a>
                                    </li>
                                    @endif
                                    <li class="ud-submenu-item">
                                        <a href="{{ route('logout') }}" class="ud-submenu-link" style="color:#212b36;">
                                            <i class="lni lni-shift-right" style="padding-right: 10px;"></i>
                                            {{__('layouts_landing.header.nav_logout')}}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="navbar navbar-expand-lg" style="padding-left: -30px;">
                        <a href="{{ route('index.login') }}" class="ud-login-btn ud-main-btn" style="padding: 10px;">
                            {{__('layouts_landing.header.nav_signin')}}
                        </a>
                        <div class="div" style="padding-right: 10px;"></div>
                        <a class="ud-main-btn ud-white-btn" href="{{ route('register.index') }}" style="padding: 10px;">
                            {{__('layouts_landing.header.nav_signup')}}
                        </a>
                    </div>
                    @endif
                    <div class="navbar navbar-expand-lg" style="padding-left: 20px;">
                        <!-- Localization -->
                        <a href="javascript:void(0)" onclick="lange('id');">
                            ID
                        </a>&nbsp;|
                        <a href="javascript:void(0)" onclick="lange('en');">
                            EN
                        </a>&nbsp;
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- <script>
    function lange(val) {
        // alert('ahay')
        localStorage.removeItem("lang");
        oldurl = window.location.href;
        console.log(window.location.href);
        console.log(oldurl);
        console.log(val);
        if (val == "id" || localStorage.getItem("lang") == "id") {
            localStorage.removeItem("lang");
            localStorage.setItem("lang", "id");
            console.log(localStorage.getItem("lang"));
            newurl = oldurl.replace("/en", "/id");
        } else if (val == "en" || localStorage.getItem("lang") == "edn") {
            localStorage.removeItem("lang");
            localStorage.setItem("lang", "en");
            console.log(localStorage.getItem("lang"));
            newurl = oldurl.replace("/id", "/en");
        } else {
            localStorage.removeItem("lang");
            // newurl = old.replace("/id/", "/en/");
        }
        console.log(newurl)
        window.location.href = newurl;
    }
</script> -->
<!-- ====== Header End ====== -->