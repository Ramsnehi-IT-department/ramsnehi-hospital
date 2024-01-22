@extends('frontends.layouts')
@section('title', 'Vission and Mission')
@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="/" class="text-white">{{ __('vision.home') }}</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="/ramsnehi" class="text-white-50">{{ __('vision.Ramsnehi') }}</a></li>
                    </ul>
                    <h1 class="text-capitalize mb-5 text-lg">{{ __('vision.vision') }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Vision Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="title-color">{{ __('vision.mission') }}</h3>
                <p style="color: black">{{ __('vision.mission_content') }}</p>
            </div>
            <div class="col-lg-6">
                <img src="images/vision/mission.jpg" alt="" class="img-fluid" style="margin-bottom: 10px;">
            </div>
        </div>
    </div>
</section>
{{-- Vision Content End --}}

{{-- Mission Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="images/vision/research-promotions-img.jpg" alt="" class="img-fluid"
                    style="margin-bottom: 10px;">
            </div>
            <div class="col-lg-6">
                <h3 class="title-color">{{ __('vision.vision') }}</h3>
                <p style="color: black">{{ __('vision.vision_content') }}</p>
            </div>
        </div>
    </div>
</section>
{{-- Mission Content End --}}

{{-- SPECIALTY HOSPITAL Content Start --}}
<section class="section about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="title-color">{{ __('vision.speciality') }}</h3>
                <p style="color: black">{{ __('vision.speciality_content') }}</p>
            </div>
            <div class="col-lg-6">
                <img src="images/vision/ramsnehi-img.jpg" alt="" class="img-fluid" style="margin-bottom: 10px;">
            </div>
        </div>
    </div>
</section>
{{-- SPECIALTY HOSPITAL Content End --}}

@endsection
