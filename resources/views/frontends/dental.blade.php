@extends('frontends.layouts')
@section('title', 'DENTAL DEPARTMENT')
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
                        <li class="list-inline-item"><a href="/allDept" class="text-white-50">Departments</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/clinicalServices" class="text-white-50">Clinical Services</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Dental</h1>
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
                <p>This department has become very strong due to the regular and full-time availability of dental
                    specialists and maxillofacial surgeons in the Department of Dentistry. Nearly all diseases of teeth
                    like pyorrhea, tooth ache, cold hot feeling, bad mouth smell, proper treatment of tooth infection
                    along with root canal, lightening, restoration of teeth in accident, etc., along with mouth and jaw
                    The complex operations of the structure are also being successfully carried out.
                </p>
                <p>
                    The presence of dedicated and competent doctors in the above mentioned departments has given this
                    hospital a distinct identity as a superior trauma center.
                </p>

                <h3 class="title-color">Available Services</h3>
                <ul>
                    <li>Services 1</li>
                    <li>Services 2</li>
                    <li>Services 3</li>
                    <li>Services 4</li>
                    <li>Services 5</li>
                </ul>

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
