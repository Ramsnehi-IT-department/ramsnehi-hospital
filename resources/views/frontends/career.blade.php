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
                <div class="form-floating mb-3">
                    @foreach($openings as $opening)
                        <option value="{{ $opening->opening_id }}">{{ $opening->title }}-{{ $opening->sub_title }}
                        </option>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Send Your Application</h2>
                    <form class="row g-3" method="POST" action="{{ route('frontends.career') }}"
                        enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="col-lg-12">
                            <label for="floatingSelect">For Desired Position</label>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" name="opening_id">
                                    @foreach($openings as $opening)
                                        <option value="{{ $opening->id }}">
                                            {{ $opening->title }}-{{ $opening->sub_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingContact" name="contact" placeholder="Your Contact">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" name="file_path" id="file_path"
                                    placeholder="Upload Resume">
                                <label for="fileInput">Upload Resume</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
{{-- Content end --}}
@endsection
