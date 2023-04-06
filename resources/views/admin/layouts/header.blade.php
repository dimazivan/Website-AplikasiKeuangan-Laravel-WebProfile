<div class="top_nav">
    <div class="nav_menu" id="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                        data-toggle="dropdown" aria-expanded="false">
                        @if(auth()->user()->file_foto == null)
                        <img src="{{ asset('asset/icon/dimaz4.png') }}" alt="Foto Profil">
                        @else
                        <img src="{{ asset('storage/data/image/user/'.auth()->user()->file_foto) }}"
                            alt="{{ auth()->user()->file_foto }}"
                            style="max-width: 29px;max-height:29px;object-fit:cover;object-position:center">
                        <!-- <img src="{{ url('/data_file/user/foto/'.auth()->user()->file_foto) }}"
                            alt="{{ auth()->user()->file_foto }}"
                            style="max-width: 29px;max-height:29px;object-fit:cover;object-position:center"> -->
                        @endif
                        <span id="namauser">
                            {{ auth()->user()->first_name }}
                            &nbsp;{{ auth()->user()->last_name }}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.show',[Crypt::encrypt(auth()->user()->id)]) }}">
                            <i class="fa fa-user pull-right"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-cog pull-right"></i>
                            Setting
                        </a>
                        <!-- <a class="dropdown-item" href="javascript:darkMode();" style="cursor: default;">
                            <i class="fa fa-cog pull-right"></i>
                            Dark Mode
                        </a> -->
                        <!-- <label for="switch" class="dropdown-item">
                            <span style="padding-right: 85px;" disabled>
                                Dark Mode
                            </span>
                            <input type="checkbox" class="js-switch" id="switch" onchange="darkModeAdm(this)" />
                        </label> -->
                        <a class="dropdown-item" href="/logout">
                            <i class="fa fa-sign-out pull-right"></i>
                            Log Out
                        </a>
                    </div>
                </li>
                <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        <li class="nav-item">
                            <a class="dropdown-item">
                                <span class="image"><img src="{{ asset('asset/icon/dimaz4.png') }}"
                                        alt="Profile Image" /></span>
                                <span>
                                    <span>John Smith</span>
                                    <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Film festivals used to be do-or-die moments for movie makers. They were
                                    where...
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="text-center">
                                <a class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>