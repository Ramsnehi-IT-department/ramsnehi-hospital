<ul class="navbar-nav ml-auto">
    {{-- Home start --}}
    <li class="nav-item active"><a class="nav-link" href="/">{{ __('homepage.home_menu') }}</a></li>
    {{-- Home end --}}

    {{-- AboutUs Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.aboutUs_menu') }} <i
                class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="/ramsnehi">About Ramsnehi</a></li>
            <li><a class="dropdown-item" href="/about">Overview</a></li>
            <li><a class="dropdown-item"
                    href="/visionMission">{{ __('homepage.AboutUs_mission') }}</a></li>
            <li><a class="dropdown-item" href="http://www.ramsnehinursing.org/" target="_blank">Ramsnehi Nursing
                    College</a></li>
            <li><a class="dropdown-item" href="/president">{{ __('homepage.AboutUs_president') }}</a>
            </li>
            <li><a class="dropdown-item" href="/secretary">{{ __('homepage.AboutUs_secretory') }}</a>
            </li>
            <li><a class="dropdown-item" href="#">Mangement Team</a></li>
        </ul>
    </li>
    {{-- AboutUs end --}}

    {{-- Patient Care --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Patient Care <i class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="/patientCare">Patient Care & Facilities</a></li>
            <li><a class="dropdown-item" href="/healthCheckUpPlan">Health Check up plan</a>
            </li>
            <li><a class="dropdown-item" href="/governmentSchemes">Government Schemes</a></li>
            <li><a class="dropdown-item" href="/TPAEmpanelment">TPA Empanelment</a></li>
            <li><a class="dropdown-item" href="/patientTestimonial">Patient Testimonial</a></li>
            <li><a class="dropdown-item" href="/patientSuccessStories">Patient Success Stories</a>
            </li>
            <li><a class="dropdown-item" href="/awardsAchievements">Awards & Achievements</a>
            </li>
            <li><a class="dropdown-item" href="#">Ramsnehi Optical</a>
            </li>
            <li><a class="dropdown-item" href="#">Canteen</a>
            </li>
            <li><a class="dropdown-item" href="#">Parking Facilities</a>
            </li>
        </ul>
    </li>
    {{-- Patient Care --}}

    {{-- Departments Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Departments <i class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">

            {{-- Clinical start --}}
            <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clinical Services</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                    <li><a class="dropdown-item" href="/clinicalServices">All Clinical Services</a></li>
                    <li><a class="dropdown-item" href="/anaesthesiology">Anaesthesiology</a></li>
                    <li><a class="dropdown-item" href="/cardiologyDepartment">Cardiology</a></li>
                    <li><a class="dropdown-item" href="/dental">Dentistry</a></li>
                    <li><a class="dropdown-item" href="/generalMedicine">General Medicine</a></li>
                    <li><a class="dropdown-item" href="/generalSurgery">General Surgery</a></li>
                    <li><a class="dropdown-item" href="/neuroSurgery">Neuro Surgery</a></li>
                    <li><a class="dropdown-item" href="/gynecology">Obstetrics & Gynaecology</a></li>
                    <li><a class="dropdown-item" href="/ophthalmology">Opthalmology</a></li>
                    <li><a class="dropdown-item" href="/orthopedic">Orthopaedic Surgery</a></li>
                    <li><a class="dropdown-item" href="/otorhinolaryngology">Otorhinolaryngology</a></li>
                    <li><a class="dropdown-item" href="/Paediatric">Paediatrics</a></li>
                </ul>
            </li>
            {{-- Clinical end --}}

            {{-- Diagnostic Services start --}}
            <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diagnostic Services</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                    <li><a class="dropdown-item" href="/diagnosticServices">All Diagnostic Services</a></li>
                    <li><a class="dropdown-item" href="/2DEcho">2D Echo</a></li>
                    <li><a class="dropdown-item" href="/DSALab">DSA Lab</a></li>
                    <li><a class="dropdown-item" href="/ECG">ECG</a></li>
                    <li><a class="dropdown-item" href="/MRI">MRI</a></li>
                    <li><a class="dropdown-item" href="/treadMillTesting">Tread Mill Testing</a></li>
                    <li><a class="dropdown-item" href="/ultrasound">Ultrasound</a></li>
                    <li><a class="dropdown-item" href="/XRay">X-Ray</a></li>
                </ul>
            </li>
            {{-- Diagnostic Services end --}}

            {{-- Laboratory Services start --}}
            <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laboratory Services</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                    <li><a class="dropdown-item" href="/laboratoryServices">All Laboratory Services</a></li>
                    <li><a class="dropdown-item" href="/clinicalBioChemistry">Clinical Bio-Chemistry</a></li>
                    <li><a class="dropdown-item" href="/clinicalMicrobiologySerology">Clinical Microbiology and
                            Serology</a></li>
                    <li><a class="dropdown-item" href="/clinicalPathology">Clinical Pathology</a></li>
                    <li><a class="dropdown-item" href="/cytopathology">Cytopathology</a></li>
                    <li><a class="dropdown-item" href="/haematology">Haematology</a></li>
                    <li><a class="dropdown-item" href="/histopathology">Histopathology</a></li>
                </ul>
            </li>
            {{-- Laboratory Services end --}}

            {{-- Pharmacy start --}}
            <li><a class="dropdown-item" href="/pharmacy">Pharmacy</a></li>
            {{-- Pharmacy end --}}

            {{-- Transfusion Services start --}}
            <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transfusion Services</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                    <li><a class="dropdown-item" href="/transfusionServices">All Transfusion Services</a></li>
                    <li><a class="dropdown-item" href="/bloodTransfusionsServices">Blood Transfusions Services</a></li>
                    <li><a class="dropdown-item" href="/bloodBank">Blood Bank</a></li>
                </ul>
            </li>
            {{-- Transfusion Services end --}}

            {{-- Professions Allied to Medicine start --}}
            <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Professions Allied to Medicine</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                    <li><a class="dropdown-item" href="/professionsAlliedToMedicine">All Professions Allied to
                            Medicine</a></li>
                    <li><a class="dropdown-item" href="/ambulance">Ambulance</a></li>
                    <li><a class="dropdown-item" href="/dietetics">Dietetics</a></li>
                    <li><a class="dropdown-item" href="/physiotherapy">Physiotherapy</a></li>
                </ul>
            </li>
            {{-- Professions Allied to Medicine end --}}

        </ul>
    </li>
    {{-- Departments End --}}

    {{-- Events Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Events <i class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="/allEvents">All Events</a></li>
            <li><a class="dropdown-item" href="/hospitalEvents">Hospital Events</a></li>
            <li><a class="dropdown-item" href="/healthCamp">Health Camp</a></li>
            <li><a class="dropdown-item" href="#">Training Program</a></li>
        </ul>
    </li>
    {{-- Events end --}}

    {{-- Media Coverage Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Media Coverage <i class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="/allMediaCoverage">All Media's Coverage</a></li>
            <li><a class="dropdown-item" href="/doctorsDesk">Doctor's Desk</a></li>
            <li><a class="dropdown-item" href="/printMedia">Print Media</a></li>
            <li><a class="dropdown-item" href="/digitalMedia">Digital Media</a></li>
        </ul>
    </li>
    {{-- Media Coverage end --}}

    {{-- Career with Us start --}}
    <li class="nav-item"><a class="nav-link" href="/">Career</a></li>
    {{-- Career with Us end --}}

    {{-- Contact start --}}
    <li class="nav-item"><a class="nav-link" href="/contact">{{ __('homepage.contact_menu') }}</a>
    </li>
    {{-- Contact end --}}
</ul>
