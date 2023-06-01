<!-- ====== Team Start ====== -->
<section id="team" class="ud-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title mx-auto text-center">
                    <span>{{__('layouts_landing.team.title_team')}}</span>
                    <h2>{{__('layouts_landing.team.subtitle_team')}}</h2>
                    <p>
                        {{__('layouts_landing.team.desc_team')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12">
                <div class="ud-single-team wow fadeInUp" data-wow-delay=".1s">
                    <div class="ud-team-image-wrapper">
                        <div class="ud-team-image">
                            <img src="{{ asset('portofolio/assets/images/team/Dimz.jpeg') }}"
                                style="max-width:100%;max-height:170px;object-fit:cover;object-position:center"
                                alt="team" />
                        </div>

                        <img src="{{ asset('portofolio/assets/images/team/dotted-shape.svg') }}" alt="shape"
                            class="shape shape-1" />
                        <img src="{{ asset('portofolio/assets/images/team/shape-2.svg') }}" alt="shape"
                            class="shape shape-2" />
                    </div>
                    <div class="ud-team-info">
                        <h5>Dimaz Ivan Perdana</h5>
                        <h6>{{__('layouts_landing.team.role_team')}}</h6>
                    </div>
                    <ul class="ud-team-socials">
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
        </div>
    </div>
</section>
<!-- ====== Team End ====== -->
<!-- ====== FAQ Start ====== -->
<section id="faq" class="ud-faq">
    <div class="shape">
        <img src="{{ asset('portofolio/assets/images/faq/shape.svg')}}" alt="shape" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title text-center mx-auto">
                    <span>{{__('layouts_landing.faq.title_faq')}}</span>
                    <h2>{{__('layouts_landing.faq.subtitle_faq')}}</h2>
                    <p>
                        {{__('layouts_landing.faq.desc_faq')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>{{__('layouts_landing.faq.faq_1')}}</span>
                        </button>
                        <div id="collapseOne" class="accordion-collapse collapse">
                            <div class="ud-faq-body">
                                {{__('layouts_landing.faq.ans_1')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>{{__('layouts_landing.faq.faq_2')}}</span>
                        </button>
                        <div id="collapseTwo" class="accordion-collapse collapse">
                            <div class="ud-faq-body">
                                {{__('layouts_landing.faq.ans_2')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>{{__('layouts_landing.faq.faq_3')}}</span>
                        </button>
                        <div id="collapseThree" class="accordion-collapse collapse">
                            <div class="ud-faq-body">
                                {{__('layouts_landing.faq.ans_3')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>{{__('layouts_landing.faq.faq_4')}}</span>
                        </button>
                        <div id="collapseFour" class="accordion-collapse collapse">
                            <div class="ud-faq-body">
                                {{__('layouts_landing.faq.ans_4')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".15s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>{{__('layouts_landing.faq.faq_5')}}</span>
                        </button>
                        <div id="collapseFive" class="accordion-collapse collapse">
                            <div class="ud-faq-body">
                                {{__('layouts_landing.faq.ans_5')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-single-faq wow fadeInUp" data-wow-delay=".2s">
                    <div class="accordion">
                        <button class="ud-faq-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                            <span class="icon flex-shrink-0">
                                <i class="lni lni-chevron-down"></i>
                            </span>
                            <span>{{__('layouts_landing.faq.faq_6')}}</span>
                        </button>
                        <div id="collapseSix" class="accordion-collapse collapse">
                            <div class="ud-faq-body">
                                {{__('layouts_landing.faq.ans_6')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== FAQ End ====== -->