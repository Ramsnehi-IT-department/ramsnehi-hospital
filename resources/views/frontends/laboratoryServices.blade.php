@extends('frontends.layouts')
@section('title', 'Laboratory Services')
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
                    <h1 class="text-capitalize mb-5 text-lg">Laboratory Services</h1>
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
                                <h5 class="card-title">Clinical Bio-Chemistry</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-card mb-4">
                        <a href="#">
                            <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Clinical Microbiology and Serology</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-card mb-4">
                        <a href="#">
                            <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Clinical Pathology</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card custom-card mb-4">
                        <a href="#">
                            <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Cytopathology</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-card mb-4">
                        <a href="#">
                            <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Haematology</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-card mb-4">
                        <a href="#">
                            <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Histopathology</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
