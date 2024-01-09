@extends('frontends.layouts')
@section('title', 'Diagnostic Services')
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
                        <li class="list-inline-item"><a href="/diagnosticServices" class="text-white-50">Departments
                                Detail</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Diagnostic Services</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h1>Diagnostic Services</h1>
                    <div class="divider mx-auto my-4"></div>
                    {{-- <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p> --}}
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/2DEcho">
                                <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">2D Echo</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/DSALab">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">DSA Lab</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/ECG">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1rem;">ECG</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/MRI">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">MRI</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/treadMillTesting">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Tread Mill Testing</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/ultrasound">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Ultrasound</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/XRay">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">X-Ray</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
