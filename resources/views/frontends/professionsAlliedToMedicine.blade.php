@extends('frontends.layouts')
@section('title', 'Professions Allied to Medicine')
@section('content')
<style>
    .custom-card-deck {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .custom-card {
        width: 300px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }

    .custom-card:hover {
        transform: scale(1.05);
    }

    .custom-card img {
        width: 100%;
        height: auto;
    }

    .custom-card .card-body {
        text-align: center;
    }

    .custom-card .card-title {
        font-size: 1.25rem;
        margin-top: 10px;
        color: #333;
    }

</style>

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/professionsAlliedToMedicine" class="text-white-50">Departments Detail</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Professions Allied to Medicine</h1>
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
                    <h1>Professions Allied To Medicine</h1>
                    <div class="divider mx-auto my-4"></div>
                    {{-- <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p> --}}
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/ambulance">
                                <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Ambulance</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/dietetics">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Dietetics</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/physiotherapy">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Physiotherapy</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
