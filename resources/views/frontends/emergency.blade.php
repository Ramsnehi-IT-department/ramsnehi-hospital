@extends('frontends.layouts')
@section('title', 'Emergency')
@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/clinicalServices" class="text-white-50">All Clinical
                                Services</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/emergency" class="text-white-50">Department Details</a>
                        </li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Emergency</h1>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Vision Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="title-color">Introduction</h3>
                <p>Emergency Care at Ramsnehi Hospital is an exclusive center committed to provide immediate treatment
                    in any emergency. All the Emergency Medicine doctors, trauma surgeons and support staffs are trained
                    to deal with cases from minor injuries to patients requiring advanced trauma care.</p>
                <p>The primary objective of the centre is to provide acute care to injured patients. This centre
                    provides round-the-clock service with 24 x 7 accesses to modern operation theatres, a fully stocked
                    24-hour pharmacy & imaging and diagnostic tools for immediate and accurate diagnosis of the
                    patient's condition. The emergency care staffs are specially trained and equipped to respond to
                    patients who need immediate and prompt medical care.</p>

                <h3 class="title-color">Facilities</h3>
                <ul>
                    <li>Tertiary trauma centre with a trauma team, including neurosurgery, orthopedics, general surgery
                        and anesthesiology</li>
                    <li>Emergency operation theatre, triage room, trauma bay, transit ward, a pneumatic system for blood
                        investigation, and shock room that is exclusively meant for cardiac arrest patients for CPR
                        (Cardiopulmonary resuscitation)</li>
                    <li>Ventilators, cardiac monitors, biphasic defibrillator and all the emergency equipments and drugs
                        required to handle every emergency.</li>
                    <li>Mobile X-Ray unit, an ultra sonogram and CT & MRI facility.</li>
                    <li>24-hour pharmacy</li>
                </ul>
                <h3 class="title-color">Available Services</h3>
                <p>The Center is equipped to handle all emergencies ranging from minor to major medical and accident
                    emergencies, including:</p>
                <ul>
                    <li>Surgical</li>
                    <li>Medical</li>
                    <li>Environmental emergencies like drug abuse/ poisoning</li>
                    <li>Emergency care for elderly / handicapped, terminally ill or patients with multi-system failures
                    </li>
                    <li>Treatment of mass causalities and disaster victims</li>
                    <li>Simple procedures like wound suturing, incision and drainage, dressing, application of plaster
                        of Paris casts</li>
                    <li>Cardiopulmonary resuscitation, endotracheal intubation, securing central venous access, facility
                        for treating poly -trauma and severe head injuries.</li>
                </ul>

                <h3 class="title-color">Useful info and health tips</h3>
                <h4 class="title-color">Emergency healthy tips</h4>
                <p>If patient having fever should immediately seek Medical attention. because fever is one of clinical
                    symptom of underlying infection in the Body . so it is advisable to patient if they are running
                    fever should seek medical attention. Diagnosing and Treating the Infection Early Reduces the
                    complications.</p>
                <p>Avoid Over the counter Purchase of Antibiotics always consult your Treating Doctor. unnecessary use
                    of Antibiotics use increases the resistance and sometimes can give fetal Drug related allergic
                    Reactions.</p>

                <h3 class="title-color">Patient Testimonial</h3>
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
        </div>
    </div>
</section>
{{-- neuro End --}}

@endsection
