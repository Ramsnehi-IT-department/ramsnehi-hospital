@extends('frontends.layouts')
@section('title', 'Home')
@section('content')

<style>
    .custom-card-deck {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .custom-card {
        width: 300px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }

    .custom-card:hover {
        transform: scale(1.05);
    }

    .custom-card img {
        width: 100%;
        height: auto;
    }

    .custom-card .card-body {
        text-align: center;
    }

    .custom-card .card-title {
        font-size: 1.25rem;
        margin-top: 10px;
        color: #333;
    }

    /* Style for the achievements section */
    .achievements {
        background-color: #bfafaf;
        padding: 1rem;
        border-radius: 0.5rem; 
    }

    /* Style for the working-hours section */
    .working-hours {
        background-color: #0b0a0a;
        padding: 1rem;
        border-radius: 0.5rem;
    }

    /* Style for the heading */
    .working-hours h4 {
        margin-bottom: 1rem;
        color: #d7333e;
    }

    /* Style for the content within <p> tags to be displayed in one line */
    .working-hours p {
        margin-bottom: 0;
        /* Adjust margin to prevent extra spacing */
        display: flex;
        /* Use flexbox */
        justify-content: space-between;
        /* Space content within the <p> tag */
    }

    /* Style for the list items */
    .working-hours ul {
        list-style: none;
        padding: 0;
        /* Adjust padding */
    }

    /* Style for spans within <p> tags */
    .working-hours p span {
        font-weight: bold;
        /* Make span content bold */
    }

    /* Additional specific styles for certain items */
    .working-hours li:nth-child(2) span {
        color: #0f9d58;
    }

    .working-hours li:nth-child(8) span {
        color: #ff5722;
    }

</style>
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
                <img src="images/bg/bg-4.jpg" class="d-block w-100" alt="Image 3">
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
<section class="section service">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="feature-item mb-5 mb-lg-0">
                                    <img src="images/shree_maharaj.jpeg" alt="Shree Maharaj" class="img-fluid">
                                    <p class="text-center mt-3" style="font-size: 1.2rem;">स्वामीजी श्री १००८ रामचरन जी महाराज</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item mb-5 mb-lg-0">
                                    <img src="images/ramsnehi_hospital.jpg" alt="Ramsnehi Hospital Bhilwara" class="img-fluid">
                                    <p class="text-center mt-3" style="font-size: 1.2rem;">रामस्नेही चिकित्सालय एवं अनुसंधान केंद्र</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-item mb-5 mb-lg-0">
                                    <img src="images/acharya.jpeg" alt="Acharya Shree" class="img-fluid">
                                    <p class="text-center mt-3" style="font-size: 1.2rem;">स्वामीजी श्री १००८ रामदयाल जी महाराज</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <p>Being a conventional institute Ramsnehi Hospital competing in the current corporate cohort of Rajasthan by breaching the paucity of reasonable but high end treatment for last 23 years. Ramsnehi Hospital and Research and Institute, a 300 bedded Multispecialty Hospital with 4 consecutive NABH Accreditation believes and based on the righteous principle of Ramsnehi International Community. Inaugurated by present Peetadhishwar Shri 1008 Shri Ram Dayal Ji Maharaj on 25th April 2000 focuses more and more in providing continuous quality service keeping the affordability as its major constraint. Having a track record of several awards and honor from the state government implies our active participation at intra state family welfare programme.</p>
                        </div>

                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-12 text-center">
                                <a href="/ramsnehi" class="btn btn-sm btn-primary">Overview</a>
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
<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>Patient Care & Facilities</h1>
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
                            <h5 class="card-title">HEALTH CHECKUP PLAN</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/TPAEmpanelment">
                        <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">TPA Empanelment</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/governmentSchemes">
                        <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">GOVERNMENT SCHEMES</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="/patientCare" class="btn btn-primary mt-3">More Facilities</a>
        </div>

</section>
<!--  Patient Care End -->

<!--  Departments Start -->
<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>Departments</h1>
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
                                    <h5 class="card-title">Clinical Services</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/diagnosticServices">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Diagnostic Services</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/laboratoryServices">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Laboratory Services</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/pharmacy">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Pharmacy</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/transfusionServices">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Transfusion Services</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/professionsAlliedToMedicine">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1rem;">Professions Allied to Medicine</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--  Departments End -->

<!--  Events Start -->
<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>Events & Initiatives</h1>
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
                            <h5 class="card-title">Hospital Events</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/healthCamp">
                        <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Health Camp</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="#">
                        <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Training Program</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
</section>
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
                            <div class="numscroller numscroller-big-bottom main-text text-secondary">350,000 +</div>
                            <p class="common-text text-dark">OPD + IPD Patients</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 mb-4">
                        <div class="count-col text-center p-4 achievements">
                            <p class="icon"><i class="fa fa-group fa-3x text-primary"></i></p>
                            <div class="numscroller numscroller-big-bottom main-text text-secondary">150,000 +</div>
                            <p class="common-text text-dark">Surgery</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 mb-4">
                        <div class="count-col text-center p-4 achievements">
                            <p class="icon"><i class="fa fa-trophy fa-3x text-primary"></i></p>
                            <div class="numscroller numscroller-big-bottom main-text text-secondary">50 +</div>
                            <p class="common-text text-dark">Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 mb-4">
                        <div class="count-col text-center p-4 achievements">
                            <p class="icon"><i class="fa fa-trophy fa-3x text-primary"></i></p>
                            <div class="numscroller numscroller-big-bottom main-text text-secondary">100 +</div>
                            <p class="common-text text-dark">Awards</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="working-hours">
                    <h4>Working hours</h4>
                    <ul>
                        <li>
                            <p>Our Activities<span>24/7 Open</span></p>
                        </li>
                        <li>
                            <p>OPD's Consultation <span>09:00 AM - 01:00 PM <br /> 05:00 PM - 07:00 PM</span></p>
                        </li>
                        <li>
                            <p>Pharmacy <span>24/7 Open</span></p>
                        </li>
                        <li>
                            <p>Ambulance <span>24/7 Open</span></p>
                        </li>
                        <li>
                            <p>Treatment <span>24/7 Open</span></p>
                        </li>
                        <li>
                            <p>Security Team <span>24/7</span></p>
                        </li>
                        <li>
                            <p>Emergency <span>24/7</span></p>
                        </li>
                        <li>
                            <p>Ramsnehi Optics <span>12 hour</span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  achievements end -->

<!--  Media's Covergare Start -->
<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>Media's Coverage</h1>
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
                            <h5 class="card-title">Doctor's Desk</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/printMedia">
                        <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Print Media</h5>
                        </div>
                    </a>
                </div>
                <div class="card custom-card">
                    <a href="/digitalMedia">
                        <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Digital Media</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
</section>
<!--  Media's Covergare  End -->

<!--  Testimonial Start -->
<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h3>Patient's Review</h3>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
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
            <div class="col-lg-12 text-center">
                <a class="btn btn-sm btn-primary mt-3">View More</a>
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
            <div class="col-lg-12 text-center">
                <a class="btn btn-sm btn-primary mt-3">View More</a>
            </div>
        </div>
    </div>
</section>
<!--  Testimonial end -->

@endsection
