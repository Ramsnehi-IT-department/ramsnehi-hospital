<!-- footer Start -->
<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="images/logo.png" alt="" class="img-fluid">
                    </div>
                    <p>{{ __('homepage.footer_intro') }}</p>
                        </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">{{ __('homepage.footer_links') }}</h4>
                    <div class="divider mb-4"></div>
                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="/about">{{ __('homepage.AboutUs_overview') }} </a></li>
                        <li><a href="/patientCare">{{ __('homepage.careCenter_facilities') }} </a></li>
                        <li><a href="/allDept">{{ __('homepage.department_allDept') }} </a>
                        </li>
                        <li><a href="/allEvents">{{ __('homepage.events_allEvents') }} </a>
                        </li>
                        <li><a href="/allMediaCoverage">{{ __('homepage.media_menu_allMediaCoverage') }} </a>
                        </li>
                        <li><a href="/career">{{ __('homepage.career_menu') }}
                            </a></li>
                        <li><a href="/contact">{{ __('homepage.contact_menu') }} </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">{{ __('homepage.footer_supports') }}</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#">{{ __('homepage.footer_terms') }}</a></li>
                        <li><a href="#">{{ __('homepage.footer_privacy') }}</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">{{ __('homepage.footer_getInTouch') }}</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span><a href="mailto:ramsnehi11@gmail.com">ramsnehi11@gmail.com</a></span>
                            {{-- <p>Support Available for 24/7</p> --}}
                        </div>
                        {{-- <h4 class="mt-2"></h4> --}}
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <ul class="list-unstyled">
                                <li><span class="h6 mb-0">{{ __('homepage.footer_morning') }}: 09:00AM - 01:00PM</span></li>
                                <li><span class="h6 mb-0">{{ __('homepage.footer_evening') }}: 05:00PM - 07:00PM</span></li>
                                <li><span class="h6 mb-0">{{ __('homepage.footer_sunday') }}: 09:00AM - 11:00AM</span></li>
                            </ul>
                        </div>
                        <ul class="list-unstyled">
                            <i class="icofont-support mr-3"></i>
                            <span><a href="tel:+23-345-67890">01482 234100</a></span>
                        </ul>
                        <ul class="list-unstyled">
                           <i class="icofont-support mr-3"></i>
                           <span><a href="tel:+23-345-67890">{{ __('homepage.footer_address') }}</a></span>
                       </ul>

                        <div class="col-lg-4 text-center text-lg-right mt-3 mt-lg-0">
                            <a class="backtop scroll-top-to" href="#top">
                                <i class="icofont-long-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-btm py-4 mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-8 text-center text-lg-left">
                        <div class="copyright">
                            &copy; 2021, Designed &amp; Developed by <a href="/" class="d-inline-block"><img
                                    src="/images/favicon.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>

                    {{-- Social media icons start --}}
                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/ram.snehi.965" target="_blank"><i class="icofont-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/ramsnehihospital/" target="_blank"><i class="icofont-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/company/ramsnehi-hospital-research-institute/" target="_blank"><i
                                    class="icofont-linkedin"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/@ramsnehihospital9156" target="_blank"><i class="icofont-youtube"></i></a>
                        </li>
                    </ul>
                    {{-- Social media icons end --}}
                </div>
            </div>
        </div>
</footer>