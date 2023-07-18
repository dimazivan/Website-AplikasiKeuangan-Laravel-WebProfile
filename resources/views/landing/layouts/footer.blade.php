<!-- ====== Footer Start ====== -->
<footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
    <div class="shape shape-1">
        <img src="{{ asset('portofolio/assets/images/footer/shape-1.svg')}}" alt="shape" />
    </div>
    <div class="shape shape-2">
        <img src="{{ asset('portofolio/assets/images/footer/shape-2.svg')}}" alt="shape" />
    </div>
    <div class="shape shape-3">
        <img src="{{ asset('portofolio/assets/images/footer/shape-3.svg')}}" alt="shape" />
    </div>
    <div class="ud-footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="ud-widget">
                        <a href="#" class="ud-footer-logo">
                            <img style="max-width:100px;max-height: 100px;border-radius: 50%;"
                                src="{{ asset('asset/icon/dimaz4.png') }}" alt="logo" />
                        </a>
                        <p class="ud-widget-desc">
                            We create digital experiences for brands and companies by
                            using technology.
                        </p>
                        <ul class="ud-widget-socials">
                            <li>
                                <a href="https://github.com/dimazivan" target="_blank">
                                    <i class="lni lni-github-original"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/dimazivan/" target="_blank">
                                    <i class="lni lni-linkedin-original"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://linktr.ee/dimazivan" target="_blank">
                                    <i class="lni lni-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                    <div class="ud-widget">
                        <h5 class="ud-widget-title">
                            {{__('layouts_landing.header.nav_pages')}}
                        </h5>
                        <ul class="ud-widget-links">
                            <li>
                                <a href="{{ route('index') }}">
                                    {{__('layouts_landing.header.nav_home')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('project.index') }}">
                                    {{__('layouts_landing.header.nav_project')}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    {{__('layouts_landing.header.nav_about')}}
                                </a>
                            </li>
                            <li>
                                <a href="#contact">
                                    {{__('layouts_landing.header.nav_contact')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="ud-widget">
                        <h5 class="ud-widget-title">
                            {{__('layouts_landing.header.nav_information')}}
                        </h5>
                        <ul class="ud-widget-links">
                            <li>
                                <a href="https://github.com/dimazivan" target="_blank">
                                    <i class="lni lni-github-original"></i>
                                    {{__('layouts_landing.footer.footer_github')}}
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/dimazivan/" target="_blank">
                                    <i class="lni lni-linkedin-original"></i>
                                    {{__('layouts_landing.footer.footer_linkedin')}}
                                </a>
                            </li>
                            <li>
                                <a href="https://linktr.ee/dimazivan" target="_blank">
                                    <i class="lni lni-link"></i>
                                    {{__('layouts_landing.footer.footer_linktree')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="ud-widget">
                        <h5 class="ud-widget-title">
                            {{__('layouts_landing.footer.footer_comingsoon')}}
                        </h5>
                        <ul class="ud-widget-links">
                            <li>
                                <a href="#" rel="nofollow noopner">
                                    {{__('layouts_landing.footer.footer_comingsoon')}}
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow noopner">
                                    {{__('layouts_landing.footer.footer_comingsoon')}}
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow noopner">
                                    {{__('layouts_landing.footer.footer_comingsoon')}}
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="nofollow noopner">
                                    {{__('layouts_landing.footer.footer_comingsoon')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="ud-widget">
                        <h5 class="ud-widget-title">
                            {{__('layouts_landing.footer.footer_termandsupport')}}
                        </h5>
                        <ul class="ud-widget-links">
                            <li>
                                <a href="javascript:void(0)"> {{__('layouts_landing.header.nav_faq')}}</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    {{__('layouts_landing.footer.footer_privacy')}}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    {{__('layouts_landing.footer.footer_term')}}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    {{__('layouts_landing.footer.footer_refund')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ud-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <ul class="ud-footer-bottom-left">
                        <li>
                            <a href="javascript:void(0)">
                                {{__('layouts_landing.footer.footer_privacy')}}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                {{__('layouts_landing.footer.footer_term')}}
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                {{__('layouts_landing.footer.footer_refund')}}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- <p class="ud-footer-bottom-right">
                        This site load&nbsp;{{ (microtime(true) - LARAVEL_START) }}&nbsp;seconds to render
                    </p> -->
                    <p class="ud-footer-bottom-right">
                        Designed and Developed With ❤ by
                        <a href="https://github.com/dimazivan" target="_blank" rel="nofollow">Dimaz Ivan Perdana</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ====== Footer End ====== -->