@extends('frontends.layouts')
@section('title', 'All Media Coverage')
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
                        <li class="list-inline-item"><a href="/allMediaCoverage" class="text-white-50">Media Coverage</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">All Media Coverage</h1>
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
                    <h1>Media Coverage</h1>
                    <div class="divider mx-auto my-4"></div>
                    {{-- <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p> --}}
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/doctorsDesk">
                                <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Doctor's Desk</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/printMedia">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Print Media</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card custom-card mb-4">
                            <a href="/digitalMedia">
                                <img class="card-img-top" src="images/service/service-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Digital Media</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
