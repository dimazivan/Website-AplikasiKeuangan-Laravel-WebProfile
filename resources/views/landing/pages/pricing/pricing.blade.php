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
                    <h1>Pricing</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Banner End ====== -->
<!-- ====== Pricing Start ====== -->
<section id="pricing" class="ud-pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title mx-auto text-center">
                    <span>Single Project Pricing</span>
                    <h2>Single Project Pricing Plans</h2>
                    <p>
                        There are many variations of our service that u can prefer. Every single of service had many
                        bonus.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-0 align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing first-item wow fadeInUp" data-wow-delay=".15s">
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            BASIC PROJECT
                        </h3>
                        <h4>Rp. 300.000,00 ++</h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">Simple Project (BOOTSTRAP)</li>
                            <li style="text-transform: uppercase;">FRAMEWORK</li>
                            <li style="text-transform: uppercase;">Lifetime access (LOCAL FILE)</li>
                            <li style="text-transform: uppercase;">No updates</li>
                            <li style="text-transform: uppercase;">
                                FREE INSTALLATIONS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                GUIDE BOOK
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">3 Months support (max)</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing active wow fadeInUp" data-wow-delay=".1s">
                    <span class="ud-popular-tag">FAVORITE</span>
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            BUSINESS PROJECT
                        </h3>
                        <small style="color: white;">start from Rp. 2.xxx.xxx,00</small>
                        <h4>Rp. 5.000.000,00 (max)</h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                Customize Project (BOOTSTRAP)
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                PREMIUM TEMPLATE (BOOTSTRAP)
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">FRAMEWORK&nbsp;/&nbsp;NATIVE</li>
                            <li style="text-transform: uppercase;">
                                Lifetime access (G-DRIVE)*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE UPDATES (IN BUILD PROGRESS)**
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE INSTALLATIONS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                GUIDE & DOCUMENTATIONS BOOKS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">6 Months support</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-white-btn">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing last-item wow fadeInUp" data-wow-delay=".15s">
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            ADVANCE PROJECT
                        </h3>
                        <h4>Rp. 7.500.000,00 ++</h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                Customize Project
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                PREMIUM TEMPLATE (BOOTSTRAP)*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                Customize Languanges
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                Lifetime access (G-DRIVE)*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE UPDATES (IN GUARANTEE)**
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE HOSTING (ONLINE WEBSITE)
                                <i class="lni lni-cloud-check"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                <i class="lni lni-lock"></i>
                                PRIVACY MODE
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE INSTALLATIONS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                GUIDE & DOCUMENTATIONS BOOKS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">24 Months support</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title mx-auto text-center" style="padding-top: 120px;">
                    <h2>Project Pricing Plans</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-0 align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing first-item wow fadeInUp" data-wow-delay=".15s">
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">LOCAL PROJECT</h3>
                        <h4>Rp. 1.xxx.xxx,00</h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">Simple Project (BOOTSTRAP)</li>
                            <li style="text-transform: uppercase;">FRAMEWORK</li>
                            <li style="text-transform: uppercase;">Lifetime access (LOCAL FILE)</li>
                            <li style="text-transform: uppercase;">No updates</li>
                            <li style="text-transform: uppercase;">
                                FREE INSTALLATIONS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                GUIDE BOOK
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">4 Months support*</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing active wow fadeInUp" data-wow-delay=".1s">
                    <span class="ud-popular-tag">FAVORITE</span>
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            BUSINESS LOCAL PROJECT
                        </h3>
                        <small style="color: white;">start from Rp. 3.xxx.xxx,00</small>
                        <h4>Rp. 5.XXX.XXX,00</h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                Customize Project (BOOTSTRAP)
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                PREMIUM TEMPLATE (BOOTSTRAP)
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">FRAMEWORK&nbsp;/&nbsp;NATIVE</li>
                            <li style="text-transform: uppercase;">
                                Lifetime access (G-DRIVE)*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE UPDATES (IN BUILD PROGRESS)**
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                <i class="lni lni-lock"></i>
                                PRIVACY MODE
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE INSTALLATIONS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                GUIDE & DOCUMENTATIONS BOOKS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">6 Months support</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-white-btn">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing last-item wow fadeInUp" data-wow-delay=".15s">
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            ADVANCE COMPANY PROJECT
                        </h3>
                        <h4>Rp. 7.XXX.XXX,00 ++</h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                Customize Project
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                PREMIUM TEMPLATE (BOOTSTRAP)*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                Customize Languanges
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                Lifetime access (G-DRIVE)*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE UPDATES (IN GUARANTEE)**
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE HOSTING (ONLINE WEBSITE)
                                <i class="lni lni-cloud-check"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                <i class="lni lni-lock"></i>
                                PRIVACY MODE
                            </li>
                            <li style="text-transform: uppercase;">
                                FREE INSTALLATIONS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                GUIDE & DOCUMENTATIONS BOOKS
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">24 Months support</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Pricing End ====== -->
@endsection