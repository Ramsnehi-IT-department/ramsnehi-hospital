@extends('frontends.layouts')
@section('title', 'Health Check Up Plan')
@section('content')

<!-- Add these links to your head section -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="text-capitalize text-lg">Health Check Up Plan
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
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img class="card-img-top" src="images/service/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Health Check plan 1</h5>
                        </div>
                    </a>
                </div>

                <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Large Image or New Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your larger image or new content here -->
                <img src="images/service/service-1-large.jpg" alt="Large Image">
                <!-- Or add new content -->
                <!-- <p>New Content Goes Here</p> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
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
