@extends('frontends.layouts')
@section('title', 'Professions Allied to Medicine')
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
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Professions Allied to Medicine</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h1>Introduction</h1>
                    <div class="divider my-4"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, sed corrupti inventore distinctio
                        maiores voluptatem, totam recusandae quo maxime quos quis quae blanditiis facilis? Architecto
                        reiciendis illo cum sequi maiores.</p>
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
                                    <h5 class="card-title">Ambulance</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="#">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Dietetics</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="#">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Physiotherapy</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="#">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Blood Bank</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="#">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Dietetics</h5>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="#">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Physiotherapy</h5>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="#">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Blood Bank</h5>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
</section>

@endsection
