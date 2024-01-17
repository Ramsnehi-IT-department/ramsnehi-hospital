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
                        <li class="list-inline-item"><a href="/" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/ramsnehi" class="text-white-50">Ramsnehi</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">About Ramsnehi Hospital</h1>
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
                <h4 class="title-color">Ramsnehi Chikitsalaya Evam Anusandhan Kendra</h4>
                <h5>Hospital - An Introduction</h5>
                <p>Ramsnehi hospital was established on 25th April 2000 by the present Peetadhishwar Jagadguru Anant
                    Shri Vibhushit Acharya Swamiji Shri 1008 Shri Ram Dayal Ji Maharaja of the International Ramsnehi
                    Community, committed to the idea of providing the best treatment to the proletariat at a reasonable
                    rate.</p>
                <p>Ramsnehi is a 300 bedded NABH accredited multispecialty hospital with all specialities like General
                    Medicine, General surgery, orthopaedic ,pediatric, cardiology, Neuro, cardiology, physiotherapy,
                    nephrology. All investigatory services like pathology, microbiology, X-ray, MRI, CT scan,
                    Ultrasound, ECG, TMT, Doppler.</p>
                <p>It is still serving the purpose of Maharaj shri by providing treatment for humanity. The hospital has
                    received several awards from the state government for its continuous participation in the family
                    welfare program for 5 years and continued its active participation at the state level. Ramsnehi
                    hospital honored by other autonomous organizations as well for it’s contribution on healthcare
                    fraternity.</p>
                <p>It is also worth mentioning that Ramsnehi has not been behind in serving society even in natural
                    calamities or during pandemic times.</p>
                <p>Distance has never been a barrier to us in providing medical care to the deprived people, our medical
                    team has extended quick relief services even to the faraway places. Not only this, we have organized
                    free camps time to time where even medicines are provided at subsidized rates. During Covid-19
                    second wave, Ramsnehi hospital have been provided e-consultation facility to people from other state
                    also.</p>
                <p>With the aim of always providing efficient staff for the care of patients we have established
                    Ramsnehi college of Nursing in 2008.</p>
            </div>
            <div class="col-lg-6">
                @foreach($galleries as $key => $gallery)
                    @if($gallery->file)
                        <img src="{{ asset('storage/' . $gallery->file) }}"
                            alt="Gallery Image" style="width: 100%; height: auto; margin-left:10px;">
                        <h1 style="text-align: center;">{{ $gallery->title }}</h1>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
{{-- Content End --}}
@endsection
