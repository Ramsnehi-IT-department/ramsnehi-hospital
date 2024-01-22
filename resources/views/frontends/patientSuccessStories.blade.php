@extends('frontends.layouts')
@section('title', 'Patient Success Stories')
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
                        <li class="list-inline-item"><a href="/patientCare" class="text-white-50">Patient Care & Facilities</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/patientSuccessStories" class="text-white-50">Details</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Patient Success Stories</h1>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="title-color">Introduction</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptates doloremque necessitatibus
                    in ducimus deserunt hic, magni, ex ratione praesentium et, non eius omnis officiis quisquam rerum
                    natus cumque amet!</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/f1BvyKbEY3k"></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/f1BvyKbEY3k"></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/f1BvyKbEY3k"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Content End --}}

@endsection
