@extends('frontends.layouts')
@section('title', 'PAEDIATRICS')
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
                    <h1 class="text-capitalize mb-5 text-lg">Paediatrics (Includng Neonatology)</h1>
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
                <p>PAEDIATRICS : Paediatrics is the branch of medicine that deals with the medical care of infants, children and adolescents. The upper age limit ranges from age 14 to 18 depending on the country. A medical practitioner who specializes in this area is known as a pediatrician (also spelled paediatrician). Treating a child is not like treating a miniature adult. A major difference between pediatrics and adult medicine is that children are minors and in most jurisdictions cannot make decisions for themselves. The issues of guardianship, privacy, legal responsibility and informed consent must always be considered in every pediatric procedure. In a sense paediatricians often have to treat the parents rather than just the child. While many normal hospitals can treat children adequately, pediatric specialists may be a better choice when it comes to treating rare afflictions that may prove fatal or severely detrimental to young children in some cases before birth. The hospital has the added benefit of being staffed by professionals who are trained in treating children
                </p>
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
