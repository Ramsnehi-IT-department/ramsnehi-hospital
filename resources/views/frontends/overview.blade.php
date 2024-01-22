@extends('frontends.layouts')
@section('title', 'AboutUs')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/" class="text-white">{{ __('ramsnehi.home') }}</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/ramsnehi" class="text-white-50">{{ __('ramsnehi.Ramsnehi') }}</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">{{ __('ramsnehi.ramsnehiHospital') }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="title-color">{{ __('ramsnehi.ramsnehiChikitsalaya') }}</h4>
                <h5>{{ __('ramsnehi.introduction') }}</h5>
                <p style="color: black">{{ __('ramsnehi.content_1') }}</p>
                <p style="color: black">Ramsnehi is a 300 bedded NABH accredited multispecialty hospital with all specialities like General
                    Medicine, General surgery, orthopaedic ,pediatric, cardiology, Neuro, cardiology, physiotherapy,
                    nephrology. All investigatory services like pathology, microbiology, X-ray, MRI, CT scan,
                    Ultrasound, ECG, TMT, Doppler.</p>
                <p style="color: black">It is still serving the purpose of Maharaj shri by providing treatment for humanity. The hospital has
                    received several awards from the state government for its continuous participation in the family
                    welfare program for 5 years and continued its active participation at the state level. Ramsnehi
                    hospital honored by other autonomous organizations as well for it’s contribution on healthcare
                    fraternity.</p>
                <p style="color: black">It is also worth mentioning that Ramsnehi has not been behind in serving society even in natural
                    calamities or during pandemic times.</p>
                <p style="color: black">Distance has never been a barrier to us in providing medical care to the deprived people, our medical
                    team has extended quick relief services even to the faraway places. Not only this, we have organized
                    free camps time to time where even medicines are provided at subsidized rates. During Covid-19
                    second wave, Ramsnehi hospital have been provided e-consultation facility to people from other state
                    also.</p>
                <p style="color: black">With the aim of always providing efficient staff for the care of patients we have established
                    Ramsnehi college of Nursing in 2008.</p>
            </div>
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="images/about/ramsnehi-hospital.jpg" class="img-responsive center-block" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Content End --}}
@endsection
