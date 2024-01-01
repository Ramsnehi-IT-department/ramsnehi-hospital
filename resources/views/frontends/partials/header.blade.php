<header>

    <style>
        /* .red-bg {
            background-color: #FF0000;
            color: #FFFFFF;
            display: inline-block;
            margin: 1px -10px !important;
            border: 1px solid black;
        } */
    </style>

    {{-- header-top-bar end --}}
    <div class="header-top-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-1 col-md-4 col-lg-7">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><a href="mailto:ramsnehi11@gmail.com"><i
                                    class="icofont-support-faq mr-2"></i>ramsnehi11@gmail.com</a></li>
                        <li class="list-inline-item"><i
                                class="icofont-location-pin mr-2"></i>{{ __('homepage.header_address') }}
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1 col-md-4 col-lg-4 top-right-bar mt-2 mt-lg-0">
                    <a href="tel:01482234100">
                        <span>{{ __('homepage.header_call') }}</span>
                        <span class="h5 mt-2 mt-lg-2 d-block d-lg-inline-block">01482 234100</span>
                    </a>
                </div>
                <div class="col-sm-1 col-md-4 col-lg-1 text-sm-left text-md-right text-lg-right text-center red-bg">
                    @php
                        $currentLocale = app()->getLocale();
                        $toggleLocale = ($currentLocale === 'en') ? 'hi' : 'en';
                        $toggleText = ($currentLocale === 'en') ? 'हिन्दी' : 'English';
                    @endphp
                    <a class="nav-link text-white"
                        href="{{ url()->current() . '?_locale=' . $toggleLocale }}">{{ $toggleText }}</a>
                </div>
            </div>
        </div>
    </div>
    {{-- header-top-bar end --}}

    {{-- header nav bar start --}}
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" alt="Ramsnehi-Logo" class="img-fluid">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    {{-- Home start --}}
                    <li class="nav-item active"><a class="nav-link"
                            href="/">{{ __('homepage.home_menu') }}</a></li>
                    {{-- Home end --}}

                    {{-- AboutUs Start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">{{ __('homepage.aboutUs_menu') }} <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item"
                                    href="/about">{{ __('homepage.AboutUs_ramsnehi') }}</a></li>
                            <li><a class="dropdown-item"
                                    href="/visionMission">{{ __('homepage.AboutUs_mission') }}</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="/president">{{ __('homepage.AboutUs_president') }}</a></li>
                            <li><a class="dropdown-item"
                                    href="/secretary">{{ __('homepage.AboutUs_secretory') }}</a></li>
                            <li><a class="dropdown-item" href="/">Mangement Team</a></li>
                            <li><a class="dropdown-item"
                                    href="/certificate">{{ __('homepage.AboutUs_certificates') }}</a>
                            </li>
                        </ul>
                    </li>
                    {{-- AboutUs end --}}

                    {{-- Patient Care --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Patient Care <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="/">OPD Timing</a></li>
                            <li><a class="dropdown-item" href="/">Health Check up plan</a>
                            </li>
                            <li><a class="dropdown-item" href="/">Government Schemes</a></li>
                            <li><a class="dropdown-item" href="/">TPA Empanelment</a></li>
                            <li><a class="dropdown-item" href="/">Patient Testimonial</a></li>
                            <li><a class="dropdown-item" href="/">Patient success stories</a>
                            </li>
                            <li><a class="dropdown-item" href="/">Photo Gallery</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Patient Care --}}

                    {{-- Departments Start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Departments <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="/">Neuro Surgery</a></li>
                            <li><a class="dropdown-item" href="/">Cardiology Department</a></li>
                            <li><a class="dropdown-item" href="/">Gynecology &amp; Obstetrics&#160;Department&#160</a></li>
                            <li><a class="dropdown-item" href="/">Orthopedic Surgery</a></li>
                            <li><a class="dropdown-item" href="/">Pediatric &amp; Neonatology</a></li>
                            <li><a class="dropdown-item" href="/">Ophthalmology</a></li>
                            <li><a class="dropdown-item" href="/">Ear Nose Throat</a></li>
                            <li><a class="dropdown-item" href="/">General &amp; Laparoscopy Surgery</a></li>
                            <li><a class="dropdown-item" href="/">Dental</a></li>
                            <li><a class="dropdown-item" href="/">Joint replacement surgery</a></li>
                        </ul>
                    </li>
                    {{-- Departments End --}}

                    {{-- Events Start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Events <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="#">Hospital Events</a></li>
                            <li><a class="dropdown-item" href="#">Health Camp</a></li>
                            <li><a class="dropdown-item" href="#">Health Talks</a></li>
                        </ul>
                    </li>
                    {{-- Events end --}}

                    {{-- Health Information Start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Health Information <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="#">Medi Update</a></li>
                            <li><a class="dropdown-item" href="#">Health Tips</a></li>
                            <li><a class="dropdown-item" href="#">Blogs</a></li>
                        </ul>
                    </li>
                    {{-- Health Information end --}}

                    {{-- Media Coverage Start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Media Coverage <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="#">Print Media</a></li>
                            <li><a class="dropdown-item" href="#">Press Release</a></li>
                        </ul>
                    </li>
                    {{-- Media Coverage end --}}

                    {{-- Career with Us start --}}
                    <li class="nav-item"><a class="nav-link" href="/">Career</a></li>
                    {{-- Career with Us end --}}

                    {{-- Contact start --}}
                    <li class="nav-item"><a class="nav-link"
                            href="/contact">{{ __('homepage.contact_menu') }}</a></li>
                    {{-- Contact end --}}
                </ul>
            </div>
        </div>
    </nav>
    {{-- header nav bar end --}}

</header>
