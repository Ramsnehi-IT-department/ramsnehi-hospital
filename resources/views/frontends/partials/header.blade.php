<header>
    {{-- header-top-bar start --}}
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><a href="mailto:ramsnehi11@gmail.com"><i
                                    class="icofont-support-faq mr-2"></i>ramsnehi11@gmail.com</a></li>
                        <li class="list-inline-item"><i
                                class="icofont-location-pin mr-2"></i>{{ __('homepage.header_address') }}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel: 01482 234100">
                            <span>{{ __('homepage.header_call') }}</span>
                            <span class="h4">01482 234100</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- header-top-bar end --}}

    {{-- header nav bar start --}}
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
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
                            <li><a class="dropdown-item"
                                    href="/certificate">{{ __('homepage.AboutUs_certificates') }}</a>
                            </li>

                            {{-- <li class="dropdown dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
        
                                        <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                            <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                            <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                        </ul>
                                    </li> --}}
                        </ul>
                    </li>
                    {{-- AboutUs end --}}

                    {{-- Care Center Start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">{{ __('homepage.careCenter_menu') }} <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.careCenter_menu') }}</a></li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.careCenter_menu') }}</a></li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.careCenter_menu') }}</a></li>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.careCenter_menu') }}</a></li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.careCenter_menu') }}</a></li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.careCenter_menu') }}</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    {{-- Care Center end --}}

                    {{-- Visitor Services Start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">{{ __('homepage.visitorServices_menu') }} <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.visitorServices_menu') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.visitorServices_menu') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.visitorServices_menu') }}</a>
                                    </li>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.visitorServices_menu') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.visitorServices_menu') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('homepage.visitorServices_menu') }}</a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    {{-- Visitor Services end --}}

                    {{-- Proffessional Start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">{{ __('homepage.professional_menu') }} <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item"
                                    href="#">{{ __('homepage.professional_menu') }}</a></li>
                            <li><a class="dropdown-item"
                                    href="#">{{ __('homepage.professional_menu') }}</a></li>
                        </ul>
                    </li>
                    {{-- Proffessional end --}}

                    {{-- Contact start --}}
                    <li class="nav-item"><a class="nav-link"
                            href="/contact">{{ __('homepage.contact_menu') }}</a></li>
                    {{-- Contact end --}}

                    {{-- Language start --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle current"
                            href="{{ url()->current() . '?_locale=en' }}">English <i
                                class="icon icofont-simple-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item"
                                    href="{{ url()->current() . '?_locale=hi' }}">हिन्दी</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Language start --}}
            </div>
            </ul>
        </div>
        </div>
    </nav>
    {{-- header nav bar end --}}

</header>
