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
            <li><a class="dropdown-item" href="/departments/allDept">All Departments</a></li>
            <li><a class="dropdown-item" href="/departments/neuroSurgery">Neuro Surgery</a></li>
            <li><a class="dropdown-item" href="/departments/cardiologyDepartment">Cardiology Department</a></li>
            <li><a class="dropdown-item" href="/departments/gynecology">Gynecology &amp; Obstetrics&#160;Department&#160</a></li>
            <li><a class="dropdown-item" href="/departments/orthopedic">Orthopedic Surgery</a></li>
            <li><a class="dropdown-item" href="/departments/Pediatric">Pediatric &amp; Neonatology</a></li>
            <li><a class="dropdown-item" href="/departments/ophthalmology">Ophthalmology</a></li>
            <li><a class="dropdown-item" href="/departments/ent">Ear Nose Throat</a></li>
            <li><a class="dropdown-item" href="/departments/generalSurgery">General &amp; Laparoscopy Surgery</a></li>
            <li><a class="dropdown-item" href="/departments/dental">Dental</a></li>
            <li><a class="dropdown-item" href="/departments/jointReplacementSurgery">Joint replacement surgery</a></li>
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