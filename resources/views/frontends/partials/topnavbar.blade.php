<style>
    .red-bg {
        background-color: #FF0000;
        color: #FFFFFF;
        margin: auto !important;
        border: 1px solid black;
        border-radius: 5px;
    }
</style>

<div class="row align-items-center">
    <div class="col-sm-1 col-md-4 col-lg-6">
        <ul class="top-bar-info list-inline-item pl-0 mb-0">
            <li class="list-inline-item"><a href="mailto:ramsnehi11@gmail.com"><i
                        class="icofont-support-faq mr-2"></i>ramsnehi11@gmail.com</a></li>
            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>{{ __('homepage.header_address') }}
            </li>
        </ul>
    </div>
    <div class="col-sm-1 col-md-4 col-lg-4 top-right-bar mt-2 mt-lg-0">
        <a href="tel:01482234100">
            <span>{{ __('homepage.header_call') }}</span>
            <span class="h5 mt-2 mt-lg-2 d-block d-lg-inline-block">01482 234100</span>
        </a>
    </div>
    <div class="widget-language text-sm-left text-md-right text-lg-right text-center red-bg d-flex">
        @php
            $currentLocale = app()->getLocale();
            $toggleLocale = $currentLocale === 'en' ? 'hi' : 'en';
            $toggleText = $currentLocale === 'en' ? 'हिन्दी' : 'English';
        @endphp
        <a class="nav-link text-white"
            href="{{ url()->current() . '?_locale=' . $toggleLocale }}">{{ $toggleText }}</a>
    </div>
</div>