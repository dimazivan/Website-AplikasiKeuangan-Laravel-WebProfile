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
                    <h1 class="ud-hero-title">
                        Welcome to my portofolio website
                    </h1>
                    <p class="ud-hero-desc">
                        As you can see there's many services that we can do for your
                        business or project as a developer, choose your choice
                    </p>
                    <ul class="ud-hero-buttons">
                        <li>
                            <a href="#contact" rel="nofollow noopener" class="ud-main-btn ud-white-btn">
                                Contact Now
                            </a>
                        </li>
                        <li>
                            <a href="#" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-link-btn">
                                See Project
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
                    <span class="tag">About Us</span>
                    <h2>Simple but Efficient</h2>
                    <p>
                        We have some solutions for your business problem or project requirement and able to solve the
                        problem
                        with simple and efficent ways.
                    </p>
                    <p>
                        We give other solution with a good recommendation based on your business problem or project
                        requirement.
                    </p>
                    <a href="#contact" class="ud-main-btn">Ask Now</a>
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