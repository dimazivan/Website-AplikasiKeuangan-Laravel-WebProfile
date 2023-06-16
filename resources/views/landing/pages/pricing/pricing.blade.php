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
                    <span>{{__('pricing.content.title_banner_1')}}</span>
                    <h2>{{__('pricing.content.subtitle_banner_1')}}</h2>
                    <p>
                        {{__('pricing.content.desc_banner_1')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-0 align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing first-item wow fadeInUp" data-wow-delay=".15s">
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            {{__('pricing.content.title_packet_1_1')}}
                        </h3>
                        <h4>{{__('pricing.content.price_packet_1_1')}}</h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_simpleproject')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_frameworknative')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_lifetimelocal')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_noupdate')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_freeinstallations')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_guidebook')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_support')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">{{__('pricing.content.txt_guarantee_3')}}</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-border-btn"
                            style="text-transform: capitalize;">
                            {{__('pricing.content.btn_purchasenow')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing active wow fadeInUp" data-wow-delay=".1s">
                    <span class="ud-popular-tag" style="text-transform: uppercase;">
                        {{__('pricing.content.title_recommended')}}
                    </span>
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            {{__('pricing.content.title_packet_1_2')}}
                        </h3>
                        <small style="color: white;">{{__('pricing.content.subprice_packet_1_2')}}</small>
                        <h4>{{__('pricing.content.price_packet_1_2')}}</h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_customizeproject1')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_template')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_frameworknative')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_lifetimedrive')}}*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_updatebuild')}}**
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_freeinstallations')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_guidebookdoc')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_support')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">{{__('pricing.content.txt_guarantee_6')}}</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-white-btn"
                            style="text-transform: capitalize;">
                            {{__('pricing.content.btn_purchasenow')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing last-item wow fadeInUp" data-wow-delay=".15s">
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            {{__('pricing.content.title_packet_1_3')}}
                        </h3>
                        <h4>
                            {{__('pricing.content.price_packet_1_3')}}
                        </h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_customizeproject2')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_template')}}*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_languages')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_lifetimedrive')}}*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_updateguarantee')}}**
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_hosting')}}
                                <i class="lni lni-cloud-check"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                <i class="lni lni-lock"></i>
                                {{__('pricing.content.txt_privacy')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_freeinstallations')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_guidebookdoc')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_support')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">{{__('pricing.content.txt_guarantee_24')}}</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-border-btn"
                            style="text-transform: capitalize;">
                            {{__('pricing.content.btn_purchasenow')}}
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
                    <h2>{{__('pricing.content.subtitle_banner_2')}}</h2>
                    <p>
                        {{__('pricing.content.desc_banner_2')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-0 align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing first-item wow fadeInUp" data-wow-delay=".15s">
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            {{__('pricing.content.title_packet_2_1')}}
                        </h3>
                        <h4>
                            {{__('pricing.content.price_packet_2_1')}}
                        </h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_simpleproject')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_frameworknative')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_lifetimelocal')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_noupdate')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_freeinstallations')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_guidebook')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_support')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">{{__('pricing.content.txt_guarantee_4')}}*</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-border-btn"
                            style="text-transform: capitalize;">
                            {{__('pricing.content.btn_purchasenow')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing active wow fadeInUp" data-wow-delay=".1s">
                    <span class="ud-popular-tag" style="text-transform: uppercase;">
                        {{__('pricing.content.title_recommended')}}
                    </span>
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            {{__('pricing.content.title_packet_2_2')}}
                        </h3>
                        <small style="color: white;">
                            {{__('pricing.content.subprice_packet_2_2')}}
                        </small>
                        <h4>
                            {{__('pricing.content.price_packet_2_2')}}
                        </h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_customizeproject1')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_template')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_frameworknative')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_lifetimedrive')}}*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_updatebuild')}}**
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                <i class="lni lni-lock"></i>
                                {{__('pricing.content.txt_privacy')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_freeinstallations')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_guidebookdoc')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_support')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">{{__('pricing.content.txt_guarantee_6')}}</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-white-btn"
                            style="text-transform: capitalize;">
                            {{__('pricing.content.btn_purchasenow')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="ud-single-pricing last-item wow fadeInUp" data-wow-delay=".15s">
                    <div class="ud-pricing-header">
                        <h3 style="text-transform: uppercase;">
                            {{__('pricing.content.title_packet_2_3')}}
                        </h3>
                        <h4>
                            {{__('pricing.content.price_packet_2_3')}}
                        </h4>
                    </div>
                    <div class="ud-pricing-body">
                        <ul>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_customizeproject2')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_template')}}*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_languages')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_lifetimedrive')}}*
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_updateguarantee')}}**
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_hosting')}}
                                <i class="lni lni-cloud-check"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                <i class="lni lni-lock"></i>
                                {{__('pricing.content.txt_privacy')}}
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_freeinstallations')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_guidebookdoc')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="text-transform: uppercase;">
                                {{__('pricing.content.txt_support')}}
                                <i class="lni lni-checkmark-circle"></i>
                            </li>
                            <li style="color: black;">{{__('pricing.content.txt_guarantee_24')}}</li>
                        </ul>
                    </div>
                    <div class="ud-pricing-footer">
                        <a href="javascript:void(0)" class="ud-main-btn ud-border-btn"
                            style="text-transform: capitalize;">
                            {{__('pricing.content.btn_purchasenow')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Pricing End ====== -->
@endsection