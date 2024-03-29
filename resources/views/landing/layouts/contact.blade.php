<!-- ====== Contact Start ====== -->
<section id="contact" class="ud-contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7">
                <div class="ud-contact-content-wrapper">
                    <div class="ud-contact-title">
                        <span>{{__('layouts_landing.contact.title_contact')}}</span>
                        <h2 style="text-transform: capitalize;">
                            {{__('layouts_landing.contact.subtitle_contact')}}
                        </h2>
                    </div>
                    <div class="ud-contact-info-wrapper">
                        <div class="ud-single-info">
                            <div class="ud-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="ud-info-meta">
                                <h5>{{__('layouts_landing.contact.location_contact')}}</h5>
                                <p>
                                    <a href="https://goo.gl/maps/WQepFnY4ZFomQfcF6" target="_blank"
                                        rel="noopener noreferrer">
                                        https://goo.gl/maps/WQepFnY4ZFomQfcF6
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="ud-single-info">
                            <div class="ud-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="ud-info-meta">
                                <h5>{{__('layouts_landing.contact.mail_contact')}}</h5>
                                <p>dimazivan740@gmail.com</p>
                                <p>
                                    <a href="https://www.linkedin.com/in/dimazivan/" target="_blank"
                                        rel="noopener noreferrer">
                                        https://www.linkedin.com/in/dimazivan/
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="ud-contact-form-title">{{__('layouts_landing.contact.title_form')}}</h3>
                    <form class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="fullName">{{__('layouts_landing.contact.name_form')}}*</label>
                            <input type="text" name="fullName"
                                placeholder="{{__('layouts_landing.contact.name_holder')}}" />
                        </div>
                        <div class="ud-form-group">
                            <label for="email">{{__('layouts_landing.contact.mail_form')}}*</label>
                            <input type="email" name="email"
                                placeholder="{{__('layouts_landing.contact.mail_holder')}}" />
                        </div>
                        <div class="ud-form-group">
                            <label for="phone">{{__('layouts_landing.contact.phone_form')}}*</label>
                            <input type="text" name="phone"
                                placeholder="{{__('layouts_landing.contact.phone_holder')}}" />
                        </div>
                        <div class="ud-form-group">
                            <label for="message">{{__('layouts_landing.contact.message_form')}}*</label>
                            <textarea name="message" rows="1"
                                placeholder="{{__('layouts_landing.contact.message_holder')}}"></textarea>
                        </div>
                        <div class="ud-form-group mb-0">
                            <button type="submit" class="ud-main-btn">
                                {{__('layouts_landing.contact.btn_form')}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Contact End ====== -->