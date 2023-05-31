@extends('landing.layouts.app')
@section('title')
{{ isset($title) ? $title : "Dimz | Portofolio Website"; }}
@endsection
@section('content')
@include('landing.components.modal.modal_index')
<!-- ====== Hero Start ====== -->
<section class="ud-hero" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
                    <h1 class="ud-hero-title" style="text-transform: capitalize;">
                        {{__('landing.content.title_banner')}}
                    </h1>
                    <p class="ud-hero-desc">
                        {{__('landing.content.desc_banner')}}
                    </p>
                    <ul class="ud-hero-buttons">
                        <li>
                            <a href="#contact" rel="nofollow noopener" class="ud-main-btn ud-white-btn">
                                {{__('landing.content.btn_contactnow')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-link-btn">
                                {{__('landing.content.btn_seeproject')}}
                                <i class="lni lni-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ud-hero-brands-wrapper wow fadeInUp" data-wow-delay=".3s">
                    <img src="{{ asset('portofolio/assets/images/hero/hero.png')}}" alt="brand"
                        style="min-height: 40px;" />
                    <img src="{{ asset('portofolio/assets/images/hero/hero2.png')}}" alt="brand"
                        style="min-height: 40px;" />
                </div>
                <div class="ud-hero-image wow fadeInUp" data-wow-delay=".25s">
                    <img src="{{ asset('portofolio/assets/images/hero/dashboard.png')}}" alt="dashboard" />
                    <img src="{{ asset('portofolio/assets/images/hero/dotted-shape.svg')}}" alt="shape"
                        class="shape shape-1" />
                    <img src="{{ asset('portofolio/assets/images/hero/dotted-shape.svg')}}" alt="shape"
                        class="shape shape-2" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Hero End ====== -->
<!-- ====== About Start ====== -->
<section id="about" class="ud-about">
    <div class="container">
        <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
            <div class="ud-about-content-wrapper">
                <div class="ud-about-content">
                    <span class="tag"> {{__('landing.content.about_title')}}</span>
                    <h2>
                        {{__('landing.content.about_slogan')}}
                    </h2>
                    <p>
                        {{__('landing.content.first_desc')}}
                    </p>
                    <p>
                        {{__('landing.content.second_desc')}}
                    </p>
                    <a href="#contact" class="ud-main-btn"> {{__('landing.content.btn_contactnow')}}</a>
                </div>
            </div>
            <div class="ud-about-image">
                <img src="{{ asset('portofolio/assets/images/about/about-image.svg')}}" alt="about-image" />
            </div>
        </div>
    </div>
</section>
<!-- ====== About End ====== -->
@endsection