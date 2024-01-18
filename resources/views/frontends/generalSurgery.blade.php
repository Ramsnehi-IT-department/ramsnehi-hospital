@extends('frontends.layouts')
@section('title', 'GENERAL & LAPROSCOPY SURGERY')
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
                    <h1 class="text-capitalize mb-5 text-lg">General Surgery (Including Laparoscopic Surgery)</h1>
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
                <p>Services of General and Laparoscopic Surgeons are available here regularly, who are also doing surgeries regularly by binoculars. Usually the following operations are being done successfully here</p>
                <ul>
                    <li>Hernia</li>
                    <li>Appendix</li>
                </ul>
                
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
