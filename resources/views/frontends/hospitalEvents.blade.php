@extends('frontends.layouts')
@section('title', 'Hospital Events')
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
                        <li class="list-inline-item"><a href="/allEvents" class="text-white-50">All Events</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/hospitalEvents" class="text-white-50">Details</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Hospital Events</h1>
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
                            <h5 class="card-title">Events 1</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card mb-4">
                    <a href="#">
                        <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Events 2</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card mb-4">
                    <a href="#">
                        <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Events 3</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Content End --}}

@endsection
