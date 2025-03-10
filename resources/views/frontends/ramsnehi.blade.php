@extends('frontends.layouts')
@section('title', 'Ramsnehi')
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
                        <li class="list-inline-item"><a href="/ramsnehi" class="text-white-50">Ramsnehi</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5">Ramsnehi Chikitsalaya Evam Anusandhan Kendra</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                <div class="section-title">
                    <h1>Ramsnehi Chikitsalaya Evam Anusandhan Kendra</h1>
                    <div class="divider mx-auto my-4"></div>
                    {{-- <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p> --}}
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/overview">
                                <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Ramsnehi Hospital</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/visionMission">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Vision & Mission</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="http://www.ramsnehinursing.org/" target="_blank">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 1rem;">Ramsnehi Nursing College</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/president">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">President's Message</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/secretary">
                                <img class="card-img-top" src="images/service/service-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Secretory's Message</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
