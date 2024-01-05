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
                    <h2>Award winning patient care</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                        molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="department-block mb-5">
                    <img src="images/service/service-1.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2 title-color">Ambulance</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/ambulance" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="images/service/service-2.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2  title-color">Dietetics</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/dietetics" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="department-block mb-5">
                    <img src="images/service/service-2.jpg" alt="" class="img-fluid w-100">
                    <div class="content">
                        <h4 class="mt-4 mb-2  title-color">Physiotherapy</h4>
                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        <a href="/physiotherapy" class="read-more">View More <i
                                class="icofont-simple-right ml-2"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
