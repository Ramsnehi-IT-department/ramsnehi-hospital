@extends('frontends.layouts')
@section('title', 'Patient Attenders')
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
                        <li class="list-inline-item"><a href="/patientAttenders" class="text-white-50">Details</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Patient Attenders</h1>
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
            <h5 class="title-color">Accommodations</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente perspiciatis ut temporibus eveniet fugit officia, quisquam voluptatum consectetur vitae dolores praesentium nemo facere aut labore voluptas, necessitatibus odio corrupti eligendi.</p>
        </div>
        <div class="row">
            <h5 class="title-color">Parking and Canteen</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi doloribus dicta voluptas assumenda excepturi officiis possimus cum nostrum. Odio laborum dicta sunt nisi excepturi nemo veritatis error! Consectetur, nemo dignissimos!</p>
        </div>
    </div>
</section>
{{-- Content End --}}

@endsection
