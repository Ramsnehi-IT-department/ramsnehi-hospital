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
                
                <p style="color: black">{{ __('ramsnehi.content_2') }}</p>

                <p style="color: black">{{ __('ramsnehi.content_3') }}</p>

                <p style="color: black">{{ __('ramsnehi.content_4') }}</p>

                <p style="color: black">{{ __('ramsnehi.content_5') }}</p>

                <p style="color: black">{{ __('ramsnehi.content_6') }}</p>
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
