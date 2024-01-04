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
                            Hospital, Professionally managed fully equipped with modern equipment and surgical gadgets.</p>
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
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>ACHIEVEMENTS AND FACILITIES</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, atque. Dolores, illo maxime.
                            Vitae sequi porro odio maxime perferendis sint, nihil quas magnam rerum quia, sunt dolores
                            reiciendis, ut veniam.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 cta-section cta position-relative">
                <div class="row">
                    <div class="col-6">
                        <div class="counter-stat">
                            {{-- <i class="icofont-doctor"></i> --}}
                            <span class="h3 counter" data-count="250000">0</span>
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="counter-stat">
                            {{-- <i class="icofont-flag"></i> --}}
                            <span class="h3 counter" data-count="150000">0</span>
                            <p>Surgery Comepleted</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="counter-stat">
                            {{-- <i class="icofont-badge"></i> --}}
                            <span class="h3 counter" data-count="40">0</span>+
                            <p>Doctors</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="counter-stat">
                            {{-- <i class="icofont-globe"></i> --}}
                            <span class="h3 counter" data-count="20">0</span>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="background: rgb(237, 112, 112)">
                <h1 class="mt-3 text-center">Working Hours</h1>
                <ul class="mb-3" style="list-style-type: disc; padding-left: 20px;">
                    <li>
                        <h4>Our Activities: 24/7</h4>
                    </li>
                    <li>
                        <h4>OPD's Consultation</h4>
                        <ul style="list-style-type: disc; padding-left: 20px;">
                            <li class="mx-5" style="color: black">09:00 AM - 01:00 PM</li>
                            <li class="mx-5" style="color: black">05:00 PM - 07:00 PM</li>
                        </ul>
                    </li>
                    <li>
                        <h4>Pharmacy: 24/7 Open</h4>
                    </li>
                    <li>
                        <h4>Ambulance: 24/7 Open</h4>
                    </li>
                    <li>
                        <h4>Treatment: 24/7 Open</h4>
                    </li>
                    <li>
                        <h4>Security: 24/7 Open</h4>
                    </li>
                    <li>
                        <h4>Emergency: 24/7 Open</h4>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>
<!--  achievements end -->

<!--  Patient Care Start -->
<section class="section service gray-bg">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>PATIENT CARE</h2>
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
                        <h4 class="mb-3">HEALTH CHECKUP PLAN</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minima inventore magnam tempora
                            atque animi sit qui veritatis omnis! A sed est aliquid architecto. Odit excepturi cum sed?
                            Quia, odio?</p>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <h4 class="mb-3">TPA Empanement</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minima inventore magnam tempora
                            atque animi sit qui veritatis omnis! A sed est aliquid architecto. Odit excepturi cum sed?
                            Quia, odio?</p>
                    </div>
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <h4 class="mb-3">GOVERNMENT SCHEMES</h4>
                        <p>Get ALl time support for emergency.We have introduced the principle of family
                            medicine.Get Conneted with us for any urgency .</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="#" class="btn btn-primary mt-3">View More</a>
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
                        <a href="/laboratoryServices" class="read-more">View More <i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5 mb-lg-0">
                    <img src="images/service/service-8.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Pharmacy</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/pharmacy" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
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
