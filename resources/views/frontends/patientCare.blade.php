@extends('frontends.layouts')
@section('title', 'Patient Care')
@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">Patient Care</h1>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Gallery End --}}

{{-- Vision Content Start --}}
<section class="container my-3 py-3">
    <div class="row">
        <div class="col-lg-12 my-3 py-3">
            <div class="feature-block d-lg-flex">
                <div class="feature-item mb-5 mb-lg-0" style="background-color: red;">
                    <div class="feature-icon mb-4">
                        <i class="icofont-surgeon-alt"></i>
                    </div>
                    <h4 class="mb-3">Health Check up plan</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="/neuroSurgery" class="btn btn-primary mt-1">View More</a>

                </div>
                <div class="feature-item mb-5 mb-lg-0" style="background-color: red;">
                    <div class="feature-icon mb-4">
                        <i class="icofont-ui-clock"></i>
                    </div>
                    <h4 class="mb-3">Government Schemes</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="/cardiologyDepartment" class="btn btn-primary mt-3">View More</a>
                </div>
                <div class="feature-item mb-5 mb-lg-0" style="background-color: red;">
                    <div class="feature-icon mb-4">
                        <i class="icofont-support"></i>
                    </div>
                    <h4 class="mb-3">TPA Empanelment</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="/gynecology" class="btn btn-primary mt-3">View More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 my-3 py-3">
            <div class="feature-block d-lg-flex">
                <div class="feature-item mb-5 mb-lg-0" style="background-color: red;">
                    <div class="feature-icon mb-4">
                        <i class="icofont-surgeon-alt"></i>
                    </div>
                    <h4 class="mb-3">Patient Testimonial</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="/orthopedic" class="btn btn-primary mt-1">View More</a>

                </div>
                <div class="feature-item mb-5 mb-lg-0" style="background-color: red;">
                    <div class="feature-icon mb-4">
                        <i class="icofont-ui-clock"></i>
                    </div>
                    <h4 class="mb-3">Patient success stories</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="/Pediatric" class="btn btn-primary mt-3">View More</a>
                </div>
                <div class="feature-item mb-5 mb-lg-0" style="background-color: red;">
                    <div class="feature-icon mb-4">
                        <i class="icofont-support"></i>
                    </div>
                    <h4 class="mb-3">Photo Gallery</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="/ophthalmology" class="btn btn-primary mt-3">View More</a>
                </div>
            </div>
        </div>
    </div>

</section>
{{-- Vision Content End --}}

@endsection
