<ul class="navbar-nav ml-auto">
    {{-- Home start --}}
    <li class="nav-item active"><a class="nav-link" href="/">{{ __('homepage.home_menu') }}</a></li>
    {{-- Home end --}}

    {{-- AboutUs Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.aboutUs_menu') }} <i
                class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="/overview">{{ __('homepage.AboutUs_overview') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/visionMission">{{ __('homepage.AboutUs_mission') }}</a></li>
            <li><a class="dropdown-item" href="/president">{{ __('homepage.AboutUs_president') }}</a>
            </li>
            <li><a class="dropdown-item" href="/secretary">{{ __('homepage.AboutUs_secretory') }}</a>
            </li>
        </ul>
    </li>
    {{-- AboutUs end --}}

    {{-- Patient Care --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.careCenter_menu') }}<i
                class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item"
                    href="/healthCheckUpPlan">{{ __('homepage.careCenter_healthCheck') }}</a></li>
            <li><a class="dropdown-item"
                    href="/governmentSchemes">{{ __('homepage.careCenter_governmentSchemes') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/TPAEmpanelment">{{ __('homepage.careCenter_TPA') }}</a></li>
            <li><a class="dropdown-item"
                    href="/patientSuccessStories">{{ __('homepage.careCenter_patientSuccess') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/awardsAchievements">{{ __('homepage.careCenter_awards') }}</a></li>
            <li><a class="dropdown-item"
                    href="/patientAttenders">{{ __('homepage.careCenter_patientsAttenders') }}</a>
            </li>
        </ul>
    </li>
    {{-- Patient Care --}}

    {{-- Departments Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.department_menu') }}<i
                class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu multi-column" aria-labelledby="dropdown02" style="min-width: 30rem!important">
            <div class="row">
                <div class="col-md-6">
                    <li><a class="dropdown-item"
                            href="/cardiologyDepartment">{{ __('homepage.department_cardiology') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/dental">{{ __('homepage.department_dentistry') }}</a></li>
                    <li><a class="dropdown-item"
                            href="/generalMedicine">{{ __('homepage.department_medicine') }}</a></li>
                    <li><a class="dropdown-item"
                            href="/generalSurgery">{{ __('homepage.department_surgery') }}</a></li>
                    <li><a class="dropdown-item"
                            href="/ophthalmology">{{ __('homepage.department_opthalmology') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/pathology">{{ __('homepage.department_pathology') }}</a></li>
                    <li><a class="dropdown-item"
                            href="/emergency">{{ __('homepage.department_emergencyDepartment') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/pharmacy">{{ __('homepage.department_pharmacy') }}</a></li>
                </div>
                <div class="col-md-6">
                    <li><a class="dropdown-item"
                            href="/orthopedic">{{ __('homepage.department_orthopaedicSurgery') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/Paediatric">{{ __('homepage.department_paediatrics') }}</a></li>
                    <li><a class="dropdown-item" href="/ent">{{ __('homepage.department_ent') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/radiology">{{ __('homepage.department_radiology') }}</a></li>
                    <li><a class="dropdown-item"
                            href="/physiotherapy">{{ __('homepage.department_physiotherapy') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/gynecology">{{ __('homepage.department_obstetricsGynaecology') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/neuroSurgery">{{ __('homepage.department_neuroSurgery') }}</a></li>
                </div>
            </div>
        </ul>
    </li>
    {{-- Departments end --}}

    {{-- Services Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.services_menu') }}<i
                class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item"
                    href="/diagnosticServices">{{ __('homepage.department_diagnosticServices') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/imagingServices">{{ __('homepage.department_imagingServices') }}</a></li>
            <li><a class="dropdown-item"
                    href="/laboratoryServices">{{ __('homepage.department_laboratoryServices') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/transfusionServices">{{ __('homepage.department_transfusionServices') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/professionsAlliedToMedicine">{{ __('homepage.department_professionsAlliedMedicine') }}</a>
            </li>
        </ul>
    </li>
    {{-- Services End --}}

    {{-- Events Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.events_menu') }} <i
                class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item"
                    href="/hospitalEvents">{{ __('homepage.events_hospitalEvents') }}</a>
            </li>
            <li><a class="dropdown-item" href="/healthCamp">{{ __('homepage.events_healthCamp') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/trainingProgram">{{ __('homepage.events_trainingProgram') }}</a></li>
        </ul>
    </li>
    {{-- Events end --}}

    {{-- Media Coverage Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.media_menu') }} <i
                class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item"
                    href="/doctorsDesk">{{ __('homepage.media_menu_doctorDesk') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/printMedia">{{ __('homepage.media_menu_printMedia') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/digitalMedia">{{ __('homepage.media_menu_digitalMedia') }}</a>
            </li>
        </ul>
    </li>
    {{-- Media Coverage end --}}

    {{-- Career start --}}
    <li class="nav-item"><a class="nav-link" href="/career">{{ __('homepage.career_menu') }}</a></li>
    {{-- Career end --}}

    {{-- Contact start --}}
    <li class="nav-item"><a class="nav-link" href="/contact">{{ __('homepage.contact_menu') }}</a>
    </li>
    {{-- Contact end --}}
</ul>
