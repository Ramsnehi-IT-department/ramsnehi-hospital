@extends('frontends.layouts')
@section('title', 'Career with Us')
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
                        <li class="list-inline-item"><a href="#" class="text-white-50">Details</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">Career with Us</h1>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Content Start --}}
<section class="appoinment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>We are dedicated to upgrading our infrastructure to provide better facilities and ensure utmost
                    reliability in our services</p>
                <h3 class="mb-2 title-color">Find your job today by applying for &#8211;</h3>
                <ul>
                    <li>Medical Officer</li>
                    <li>Nursing Staff</li>
                    <li>Technician</li>
                    <li>Office Staff</li>
                    <li>Fourth Grade</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Send Your Application</h2>
                    {{-- <form class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingEmail" placeholder="Your Contact">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="floatingSelect">For Desired Position</label>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="State">
                                    <option value="1">doctor</option>
                                    <option value="2">Nurse</option>
                                    <option value="2">Nurse ICU</option>
                                    <option value="2">Nurse office staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="fileInput" placeholder="Upload Resume">
                                <label for="fileInput">Upload Resume</label>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form> --}}

                    <form action="{{ route('careers.processPublish') }}" method="POST">
                        @csrf
                    
                        <!-- Other form fields -->
                    
                        <label for="opening_id">Select Opening:</label>
                        <select name="opening_id" id="opening_id">
                            @foreach($openings as $opening)
                                <option value="{{ $opening->id }}">{{ $opening->job_title }}</option>
                            @endforeach
                        </select>
                    
                        <button type="submit">Submit</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
{{-- Content end --}}
@endsection
