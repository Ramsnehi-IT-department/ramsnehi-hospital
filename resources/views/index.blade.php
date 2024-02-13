@extends('frontends.layouts')
@section('title', 'Home')
@section('content')

<!-- Slider Start -->
<section>
    <div id="imageSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/bg/bg-4.jpeg" class="slider-image d-block w-100" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <div class="block text-dark">
                        <h1 class="animated-text" style="color: white"></h1>
                        <h3 class="animated-text" style="color: white"></h3>
                        <h1 class="animated-text" style="color: white">{{ __('homepage.slider_text_top') }}</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bg/night_slide.jpeg" class="slider-image d-block w-100" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <div class="block text-dark">
                        <h1 class="animated-text" style="color: white">{{ __('homepage.slider_text_top') }}</h1>
                        <h3 class="animated-text" style="color: white">{{ __('homepage.slider_text_middle') }}</h3>
                        <h5 class="animated-text" style="color: white">{{ __('homepage.slider_text_bottom') }}</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bg/slider-bg-1.jpg" class="slider-image d-block w-100" alt="Image 3">
                <div class="carousel-caption d-none d-md-block">
                    <div class="block text-dark">
                        <h1 class="animated-text">{{ __('homepage.slider_text_top') }}</h1>
                        <h3 class="animated-text">{{ __('homepage.slider_text_middle') }}</h3>
                        <h5 class="animated-text">{{ __('homepage.slider_text_bottom') }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add navigation controls if desired -->
        <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- Slider End -->

<!--  About Start -->
<section class="section service">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="feature-item mb-5 mb-lg-0" style="box-shadow: none !important;">
                                    <img src="images/shree_maharaj.jpeg" alt="Shree Maharaj" class="img-fluid"
                                        style="width: 300px;">
                                    <p class="text-center mt-3" style="font-size: 1rem;">स्वामीजी श्री १००८ रामचरण जी
                                        महाराज</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item mb-5 mb-lg-0" style="box-shadow: none !important;">
                                    <img src="images/acharya.jpeg" alt="Acharya Shree" class="img-fluid"
                                        style="width: 300px;">
                                    <p class="text-center mt-3" style="font-size: 1rem;">स्वामीजी श्री १००८ रामदयाल जी
                                        महाराज</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <p>{{ __('homepage.content') }}</p>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-12 text-center">
                                <a href="/overview"
                                    class="btn btn-sm btn-primary">{{ __('homepage.about_us') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--  About End -->

<!--  achievements starts -->
<section class="contents count-bar wow fadeInUp animated" style="background-color: #f8f9fa; padding: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="row con-col">
                    <div class="col-sm-6 col-xs-6 mb-4">
                        <div class="count-col count-col-bdr text-center p-4 achievements">
                            <p class="icon"><i class="fa fa-smile-o fa-3x text-primary"></i></p>
                            <span class="h3 counter" data-count="5000000">0</span>+
                            <p class="common-text text-dark">{{ __('homepage.achievements_opd') }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 mb-4">
                        <div class="count-col text-center p-4 achievements">
                            <p class="icon"><i class="fa fa-group fa-3x text-primary"></i></p>
                            <span class="h3 counter" data-count="1000000">0</span>+
                            <p class="common-text text-dark">{{ __('homepage.achievements_surgery') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 mb-4">
                        <div class="count-col text-center p-4 achievements">
                            <p class="icon"><i class="fa fa-trophy fa-3x text-primary"></i></p>
                            <span class="h3 counter" data-count="58">0</span>+
                            <p class="common-text text-dark">{{ __('homepage.achievements_doctors') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 mb-4">
                        <div class="count-col text-center p-4 achievements">
                            <p class="icon"><i class="fa fa-trophy fa-3x text-primary"></i></p>
                            <span class="h3 counter" data-count="100">0</span>+
                            <p class="common-text text-dark">{{ __('homepage.achievements_awards') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="working-hours">
                    <h4>{{ __('homepage.working_hours') }}</h4>
                    <ul>
                        <li>
                            <p>{{ __('homepage.working_hours_activity') }}<span>24/7</span></p>
                        </li>
                        <li>
                            <p>{{ __('homepage.working_hours_OPD') }} <span>09:00 AM - 01:00 PM <br />
                                    05:00 PM - 07:00 PM</span></p>
                        </li>
                        <li>
                            <p>{{ __('homepage.working_hours_pharmacy') }} <span>24/7</span></p>
                        </li>
                        <li>
                            <p>{{ __('homepage.working_hours_ambulance') }} <span>24/7</span></p>
                        </li>
                        <li>
                            <p>{{ __('homepage.working_treatment') }} <span>24/7</span></p>
                        </li>
                        <li>
                            <p>{{ __('homepage.working_security') }} <span>24/7</span></p>
                        </li>
                        <li>
                            <p>{{ __('homepage.working_emergency') }} <span>24/7</span></p>
                        </li>
                        <li>
                            <p>{{ __('homepage.working_Ramsnehi Optics') }} <span></span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  achievements end -->

<!--  Testimonial Start -->
<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h3>{{ __('homepage.testimonial_review') }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">
                <div class="testimonial-block style-2  gray-bg">
                    <div class="carousel-item active">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/f1BvyKbEY3k"></iframe>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block style-2  gray-bg">
                    <div class="carousel-item active">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/3uRXNSLrixg"></iframe>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block style-2  gray-bg">
                    <div class="carousel-item active">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/CY_K0fDLEAY"></iframe>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block style-2  gray-bg">
                    <div class="carousel-item active">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/1zHT8t4wE9o"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Testimonial end -->

@endsection
