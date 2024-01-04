@extends('frontends.layouts')
@section('title', 'Home')
@section('content')

<!-- Slider Start -->
<section>
    <div id="imageSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- Image 1 -->
                <img src="images/bg/bg-4.jpg" class="d-block w-100 h-50" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Your content for Image 1 -->
                    <div class="block">
                        <span class="text-uppercase text-sm letter-spacing" style="color: black;">WELCOME TO RAMSNEHI
                            HOSPITAL</span>
                        <h1 class="mb-3 mt-3" style="color: black;">Your Health Is Our Priority</h1>
                        <p class="mb-4 pr-5" style="color: black;">Ramsnehi Hospital is a Multi Specialty & General
                            Hospital, Professionally managed fully equipped with modern equipment and surgical gadgets.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- Image 2 -->
                <img src="images/bg/bg-4.jpg" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Your content for Image 2 -->
                    <div class="block">
                        <span class="text-uppercase text-sm letter-spacing" style="color: black;">ANOTHER SLIDE</span>
                        <h1 class="mb-3 mt-3" style="color: black;">Slide Title</h1>
                        <p class="mb-4 pr-5" style="color: black;">Your content for the second slide.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- Image 2 -->
                <img src="images/bg/22.jpg" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <!-- Your content for Image 2 -->
                    <div class="block">
                        <span class="text-uppercase text-sm letter-spacing" style="color: black;">ANOTHER SLIDE</span>
                        <h1 class="mb-3 mt-3" style="color: black;">Slide Title</h1>
                        <p class="mb-4 pr-5" style="color: black;">Your content for the second slide.</p>
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
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>ABOUT US</h2>
                        <div class="divider mx-auto my-3"></div>
                        <p>In the past years due to the blind race to become professional, although there has been an
                            unprecedented increase in medical facilities in Bhilwara, standard medical treatment for the
                            common man has remained a daydream. In the same way, the Ramasnehi Hospital, which was
                            inaugurated by the present Peetadhishwar Jagadguru Anant Sri Vibhushit Acharya Swamiji Shri
                            1008 Shri Ram Dayal Ji Maharaj of the International Ramsnehi Community, on 25 April 2000 by
                            his own staff, resolved to provide the best treatment to the proletariat at very reasonable
                            rates. It was embodied, still remains the only support for the poor and helpless patients
                            Is. The hospital has received several awards and honors from the state government for its
                            continuous participation in the family welfare program for 5 years and continued its active
                            participation at the state level. Recently, the hospital was awarded a certificate by the
                            Sixth Certification Organization, which certifies for quality at the national level. There
                            are few such hospitals all over India, which meet the standards set by the Sixth Sixth, so
                            it is a matter of pride for the Ramasnehi Hospital.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <img src="images/shree-maharaj.jpg" alt="Shree Maharaj" class="img-fluid">
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <img src="images/ramniwasDham.jpg" alt="Ramniwas Dham, Shahapura" class="img-fluid">
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <img src="images/acharya.jpg" alt="Acharya Shree" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="/about" class="btn btn-primary mt-3">View More</a>
        </div>
    </div>
</section>
<!--  About End -->

<!--  achievements starts -->
<section class="contents count-bar wow  fadeInUp  animated">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="row con-col">
                    <div class="col-sm-6 col-xs-6">
                        <div class=" count-col count-col-bdr">
                            <p class="icon"><i class="fa fa-smile-o fa-2x"></i></p>
                            <div class='numscroller numscroller-big-bottom main-text'>1000000 +</div>
                            <p class="common-text">Happy patients</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class=" count-col">
                            <p class="icon"><i class="fa fa-user-md fa-2x"></i></p>
                            <div class='numscroller numscroller-big-bottom main-text'>30 +</div>
                            <p class="common-text">Doctors </p>
                        </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-sm-6  col-xs-6">
                        <div class=" count-col">
                            <p class="icon"><i class="fa fa-group fa-2x"></i></p>
                            <div class='numscroller numscroller-big-bottom main-text'>300 +</div>
                            <p class="common-text">Staffs</p>
                        </div>
                    </div>
                    <div class="col-sm-6  col-xs-6">
                        <div class=" count-col">
                            <p class="icon"><i class="fa fa-trophy fa-2x"></i></p>
                            <div class='numscroller numscroller-big-bottom main-text'>50 +</div>
                            <p class="common-text">Awards</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="working-hours">
                    <h4>Working hours</h4>
                    <ul>
                        <li><p>Our activities <span>24/7 Open</span></p></li>
                        <li><p>OPD's Consultation <span>09:00 AM - 01:00 PM<br /> 05:00 PM - 07:00 PM</span></p></li>
                        <li><p>Pharmacy <span>24/7 Open</span></p></li>
                        <li><p>Ambulance <span>24/7 Open</span></p></li>
                        <li><p>Treatment <span>24/7 Open</span></p></li>
                        <li><p>Security team <span>24/7</span></p></li>
                        <li><p>Emergency <span>24/7</span></p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  achievements end -->

<!--  Patient Care Start -->
<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>PATIENT CARE</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="department-block mb-5">
                    <img src="images/service/service-1.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">HEALTH CHECKUP PLAN</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/clinicalServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="images/service/service-2.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2  title-color">TPA Empanement</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/diagnosticServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="images/service/service-3.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">GOVERNMENT SCHEMES</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/laboratoryServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="images/service/service-3.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">PATIENT TESTIMONIAL</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/laboratoryServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="images/service/service-3.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">PATIENT SUCCESS STORIES</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/laboratoryServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Patient Care End -->

<!--  Departments Start -->
<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Departments</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="department-block mb-5">
                    <img src="images/service/service-1.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Clinical Services</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/clinicalServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="images/service/service-2.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2  title-color">Diagnostic Services</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/diagnosticServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="images/service/service-3.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Laboratory Services</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/laboratoryServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5 mb-lg-0">
                    <img src="images/service/service-8.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Pharmacy</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/pharmacy" class="read-more">View More <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5 mb-lg-0">
                    <img src="images/service/service-6.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Transfusion Services</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/transfusionServices" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5 mb-lg-0">
                    <img src="images/service/service-8.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Professions Allied to Medicine</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/professionsAlliedToMedicine" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Departments End -->

<!--  Events Start -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Events</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, atque. Dolores, illo maxime.
                            Vitae sequi porro odio maxime perferendis sint, nihil quas magnam rerum quia, sunt dolores
                            reiciendis, ut veniam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <h4 class="mb-3">Hospital Events </h4>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>

                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <h4 class="mb-3">Health Camps</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minima inventore magnam tempora
                            atque animi sit qui veritatis omnis! A sed est aliquid architecto. Odit excepturi cum sed?
                            Quia, odio?</p>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <h4 class="mb-3">Health Talks</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Events End -->

<!--  Health Information Start -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Health Information </h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, atque. Dolores, illo maxime.
                            Vitae sequi porro odio maxime perferendis sint, nihil quas magnam rerum quia, sunt dolores
                            reiciendis, ut veniam.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div>
                        <h4 class="mb-3">Medi Updates </h4>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>

                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <h4 class="mb-3">Health Tips</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minima inventore magnam tempora
                            atque animi sit qui veritatis omnis! A sed est aliquid architecto. Odit excepturi cum sed?
                            Quia, odio?</p>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <h4 class="mb-3">Blogs</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
                        <a href="/#" class="btn btn-primary mt-3">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Events End -->

<!--  Testimonial Start -->
<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Patient's Review</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <h1>Review</h1>
            </div>
            <div class="col-lg-12 testimonial-wrap-2">
                <div class="testimonial-block style-2  gray-bg">
                    <i class="icofont-quote-right"></i>
                    <div class="client-info ">
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
                        <h4>Amazing service!</h4>
                        <span>John Partho</span>
                        <p>
                            They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium,
                            iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a class="btn btn-sm btn-primary mt-3">View More</a>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-12 mt-3 text-center">
                <h1>Video</h1>
            </div>
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
            <div class="col-lg-12 text-center">
                <a class="btn btn-sm btn-primary mt-3">View More</a>
            </div>
        </div>
    </div>
</section>
<!--  Testimonial end -->

@endsection
