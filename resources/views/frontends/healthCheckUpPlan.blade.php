@extends('frontends.layouts')
@section('title', 'Health Check Up Plan')
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
                        <li class="list-inline-item"><a href="/patientCare" class="text-white-50">Patient Care &
                                Facilities</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/healthCheckUpPlan" class="text-white-50">Details</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Health Check Up Plan
                    </h1>
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
                <div class="card custom-card mb-4">
                    <a href="#">
                        <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Health Check plan 1</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card mb-4">
                    <h1>Plan Name</h1>
                    <h1>Plan Price</h1>
                    <ul>
                        <li>services1</li>
                        <li>services2</li>
                        <li>services3</li>
                    </ul>
                    {{-- <a href="#">
                        <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Health Check plan 2</h5>
                        </div>
                    </a> --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card mb-4">
                    <a href="#" target="_blank">
                        <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 1rem;">Health Check plan 3</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Content End --}}

@endsection
