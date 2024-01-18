@extends('frontends.layouts')
@section('title', 'X-Ray')
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
                        <li class="list-inline-item"><a href="/diagnosticServices" class="text-white-50">Diagnostic Services</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">X-Ray</h1>
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
                <p>Wipro GE Company's high-tech Kethleb and cardiac ICU for specialized services for heart disease in the hospital. Has been established. Through which angiography and angioplasty are being done here regularly, the work of applying pacemakers has also been done successfully here. Starting from 3 December 2014, 1622 angiography and 381 angioplasty have also been done in this department as well as installation of pace maker.
                <h3 class="title-color">Available Services</h3>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                </ul>

                <h3 class="title-color">Patient Testimonial</h3>
                <div class="row align-items-center">
                    <div class="col-lg-12 testimonial-wrap-2">
                        <div class="testimonial-block style-2  gray-bg">
                            <div class="carousel-item active">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f1BvyKbEY3k"></iframe>
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
