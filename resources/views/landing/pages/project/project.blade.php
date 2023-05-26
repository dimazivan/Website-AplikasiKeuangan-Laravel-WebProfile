@extends('landing.layouts.app')
@section('title')
{{ isset($title) ? $title : "Dimz | Portofolio Website"; }}
@endsection
@section('content')
<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-banner-content">
                    <h1>Project Portofolio</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Banner End ====== -->
<!-- ====== Blog Start ====== -->
<section class="ud-blog-grids">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="ud-single-blog">
                    <div class="ud-blog-image">
                        <a href="#">
                            <img src="{{ asset('portofolio/assets/images/project/dashboard.png')}}" alt="dashboard" />
                        </a>
                        <!-- Modal -->

                    </div>
                    <div class="ud-blog-content">
                        <span class="ud-blog-date">Dec 22, 2023</span>
                        <h3 class="ud-blog-title">
                            <a href="#">
                                Meet AutoManage, the best AI management tools
                            </a>
                        </h3>
                        <p class="ud-blog-desc">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Blog End ====== -->
@endsection