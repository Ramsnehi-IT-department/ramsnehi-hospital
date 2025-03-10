@extends('frontends.layouts')
@section('title', 'Contact')
@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Call Us</h5>
                    01482 234100
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email Us</h5>
                    ramsnehi11@gmail.com
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Location</h5>
                    Swami Ramcharan Marg, Nehru Road, Ramdwara, Bhilwara - 311001
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi
                        mollitia sit
                        perferendis maiores ratione aliquam?</p>
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                    <form method="POST" action="{{ route('frontends.contact') }}"
                        enctype="multipart/form-data" autocomplete="off">
                        @csrf
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                      
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control"
                                    placeholder="Your Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control"
                                    placeholder="Your Email Address" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="query" id="query" type="text" class="form-control"
                                    placeholder="Your Query Topic" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="contact" id="contact" type="text" class="form-control"
                                    placeholder="Your Phone Number" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message"
                            required></textarea>
                    </div>

                    <div>
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Messege" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="google-map ">
    <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
        src="https://www.google.com/maps/dir/25.3568994,74.6517426/ramsnehi+hospital/@25.3524694,74.6390533,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3968c3b47a4b9c6f:0xf5d32517b994873f!2m2!1d74.6439567!2d25.3496475?entry=ttu"></iframe>
</div>

@endsection
