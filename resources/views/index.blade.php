@extends('frontends.layouts')
@section('title', 'Home')
@section('content')

<style>
    .slider-image {
        width: 100% !important;
        height: 100vh !important;
    }

    /* .slide {
        position: relative;
    }

    .animated-text {
        display: inline-block;
        animation: textAnimation 5s forwards;
        margin-bottom: 10px !important;
        margin-top: 10px !important;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
    }

    @keyframes textAnimation {
        0% {
            transform: translateY(100%);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    } */
</style>


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

<!--  Patient Care Start -->
{{-- <section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>{{ __('homepage.care_icon') }}</h1>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
            <div class="card-deck mx-2 custom-card-deck">
                <div class="card custom-card">
                    <a href="/healthCheckUpPlan">
                        <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.care_icon_healthCheck') }}</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/TPAEmpanelment">
                        <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.care_icon_TPA') }}</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/governmentSchemes">
                        <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.care_icon_govtSchemes') }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="/patientCare"
                class="btn btn-primary mt-3">{{ __('homepage.care_icon_more') }}</a>
        </div>
</section> --}}
<!--  Patient Care End -->

<!--  Departments Start -->
{{-- <section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>{{ __('homepage.department_menu') }}</h1>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/clinicalServices">
                                <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ __('homepage.department_clinicalServices') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/diagnosticServices">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ __('homepage.department_diagnosticServices') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/laboratoryServices">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ __('homepage.department_laboratoryServices') }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/allDept"
                        class="btn btn-primary mt-3">{{ __('homepage.Departments_iconMore') }}</a>
                </div>
            </div>
        </div>
</section> --}}
<!--  Departments End -->

<!--  Events Start -->
{{-- <section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>{{ __('homepage.events_menu') }}</h1>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
            <div class="card-deck mx-2 custom-card-deck">
                <div class="card custom-card">
                    <a href="/hospitalEvents">
                        <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.events_hospitalEvents') }}</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/healthCamp">
                        <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.events_healthCamp') }}</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="#">
                        <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.events_trainingProgram') }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
</section> --}}
<!--  Events End -->

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

<!--  Media's Covergare Start -->
{{-- <section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>{{ __('homepage.media_menu') }}</h1>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
            <div class="card-deck mx-2 custom-card-deck">
                <div class="card custom-card">
                    <a href="/doctorsDesk">
                        <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.media_menu_doctorDesk') }}</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/printMedia">
                        <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.media_menu_printMedia') }}</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/digitalMedia">
                        <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('homepage.media_menu_digitalMedia') }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
</section> --}}
<!--  Media's Covergare  End -->

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
                    <i class="icofont-quote-right"></i>
                    <div class="client-info ">
                        <img src="images/team/1.jpg" alt="1">
                        <h4>Amazing service!</h4>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>
                </div>
                <div class="testimonial-block style-2  gray-bg">
                    <i class="icofont-quote-right"></i>
                    <div class="client-info ">
                        <img src="images/team/2.jpg" alt="2">
                        <h4>Amazing service!</h4>
                        <span>John Partho</span>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>
                </div>
                <div class="testimonial-block style-2  gray-bg">
                    <i class="icofont-quote-right"></i>
                    <div class="client-info ">
                        <img src="images/team/3.jpg" alt="3">
                        <h4>Amazing service!</h4>
                        <span>John Partho</span>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>
                </div>
                <div class="testimonial-block style-2  gray-bg">
                    <i class="icofont-quote-right"></i>
                    <div class="client-info ">
                        <img src="images/team/4.jpg" alt="4">
                        <h4>Amazing service!</h4>
                        <span>John Partho</span>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>
                </div>
            </div>
        </div>

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
