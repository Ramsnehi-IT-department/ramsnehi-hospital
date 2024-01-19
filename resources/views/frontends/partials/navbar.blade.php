<ul class="navbar-nav ml-auto">
    {{-- Home start --}}
    <li class="nav-item active"><a class="nav-link" href="/">{{ __('homepage.home_menu') }}</a></li>
    {{-- Home end --}}

    {{-- AboutUs Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.aboutUs_menu') }} <i class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="/ramsnehi">{{ __('homepage.AboutUs_ramsnehi') }}</a>
            </li>
            <li><a class="dropdown-item" href="/overview">{{ __('homepage.AboutUs_overview') }}</a>
            </li>
            <li><a class="dropdown-item" href="/visionMission">{{ __('homepage.AboutUs_mission') }}</a></li>
            {{-- <li><a class="dropdown-item" href="http://www.ramsnehinursing.org/" target="_blank">Ramsnehi Nursing
                    College</a></li> --}}
            <li><a class="dropdown-item" href="/president">{{ __('homepage.AboutUs_president') }}</a>
            </li>
            <li><a class="dropdown-item" href="/secretary">{{ __('homepage.AboutUs_secretory') }}</a>
            </li>
        </ul>
    </li>
    {{-- AboutUs end --}}

    {{-- Patient Care --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.careCenter_menu') }}<i class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">
            <li><a class="dropdown-item" href="/patientCare">{{ __('homepage.careCenter_facilities') }}</a></li>
            <li><a class="dropdown-item" href="/healthCheckUpPlan">{{ __('homepage.careCenter_healthCheck') }}</a></li>
            <li><a class="dropdown-item"
                    href="/governmentSchemes">{{ __('homepage.careCenter_governmentSchemes') }}</a>
            </li>
            <li><a class="dropdown-item" href="/TPAEmpanelment">{{ __('homepage.careCenter_TPA') }}</a></li>
            <li><a class="dropdown-item"
                    href="/patientSuccessStories">{{ __('homepage.careCenter_patientSuccess') }}</a>
            </li>
            <li><a class="dropdown-item" href="/awardsAchievements">{{ __('homepage.careCenter_awards') }}</a></li>
            <li><a class="dropdown-item" href="/ramsnehiOptics">{{ __('homepage.careCenter_optical') }}</a></li>
            <li><a class="dropdown-item" href="/patientAttenders">{{ __('homepage.careCenter_patientsAttenders') }}</a>
            </li>
        </ul>
    </li>
    {{-- Patient Care --}}

    {{-- Departments Start --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ __('homepage.department_menu') }} <i class="icofont-thin-down"></i></a>
        <ul class="dropdown-menu" aria-labelledby="dropdown02">

            {{-- All Department start --}}
            {{-- <li><a class="dropdown-item" href="/allDept">{{ __('homepage.department_allDept') }}</a>
            </li> --}}
            {{-- All Department start --}}

            {{-- Clinical start --}}
            <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" id="dropdown0301" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{ __('homepage.department_clinicalServices') }}</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                    <li><a class="dropdown-item"
                            href="/clinicalServices">{{ __('homepage.department_allClinicalServices') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/anaesthesiology">{{ __('homepage.department_anaesthesiology') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/cardiologyDepartment">{{ __('homepage.department_cardiology') }}</a>
                    </li>
                    <li><a class="dropdown-item" href="/dental">{{ __('homepage.department_dentistry') }}</a></li>
                    <li><a class="dropdown-item" href="/generalMedicine">{{ __('homepage.department_medicine') }}</a>
                    </li>
                    <li><a class="dropdown-item" href="/generalSurgery">{{ __('homepage.department_surgery') }}</a>
                    </li>
                    <li><a class="dropdown-item" href="/neuroSurgery">{{ __('homepage.department_neuroSurgery') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/gynecology">{{ __('homepage.department_obstetricsGynaecology') }}</a>
                    </li>
                    <li><a class="dropdown-item" href="/ophthalmology">{{ __('homepage.department_opthalmology') }}</a>
                    </li>
                    <li><a class="dropdown-item"
                            href="/orthopedic">{{ __('homepage.department_orthopaedicSurgery') }}</a>
                    </li>
                    <li><a class="dropdown-item" href="/Paediatric">{{ __('homepage.department_paediatrics') }}</a>
                    <li><a class="dropdown-item" href="/ent">{{ __('homepage.department_ent') }}</a>
                    </li>
            </li>
        </ul>
    </li>
    {{-- Clinical end --}}

    {{-- Diagnostic Services start --}}
    <li class="dropdown dropdown-submenu dropright">
        <a class="dropdown-item dropdown-toggle" id="dropdown0301" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">{{ __('homepage.department_diagnosticServices') }}</a>
        <ul class="dropdown-menu" aria-labelledby="dropdown0301">
            <li><a class="dropdown-item"
                    href="/diagnosticServices">{{ __('homepage.department_allDiagnosticServices') }}</a>
            </li>
            <li><a class="dropdown-item" href="/2DEcho">{{ __('homepage.department_2DEcho') }}</a>
            </li>
            <li><a class="dropdown-item" href="/DSALab">{{ __('homepage.department_DSALab') }}</a>
            </li>
            <li><a class="dropdown-item" href="/ECG">{{ __('homepage.department_ECG') }}</a></li>
            <li><a class="dropdown-item" href="/MRI">{{ __('homepage.department_MRI') }}</a></li>
            <li><a class="dropdown-item"
                    href="/treadMillTesting">{{ __('homepage.department_treadMillTesting') }}</a></li>
            <li><a class="dropdown-item" href="/ultrasound">{{ __('homepage.department_ultrasound') }}</a>
            </li>
            <li><a class="dropdown-item" href="/XRay">{{ __('homepage.department_XRay') }}</a></li>
        </ul>
    </li>
    {{-- Diagnostic Services end --}}

    {{-- Laboratory Services start --}}
    <li class="dropdown dropdown-submenu dropright">
        <a class="dropdown-item dropdown-toggle" id="dropdown0301" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">{{ __('homepage.department_laboratoryServices') }}</a>
        <ul class="dropdown-menu" aria-labelledby="dropdown0301">
            <li><a class="dropdown-item"
                    href="/laboratoryServices">{{ __('homepage.department_allLaboratoryServices') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/clinicalBioChemistry">{{ __('homepage.department_clinicalBioChemistry') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/clinicalMicrobiologySerology">{{ __('homepage.department_clinicalMicrobiologySerology') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/clinicalPathology">{{ __('homepage.department_clinicalPathology') }}</a>
            </li>
            <li><a class="dropdown-item" href="/cytopathology">{{ __('homepage.department_cytopathology') }}</a></li>
            <li><a class="dropdown-item" href="/haematology">{{ __('homepage.department_haematology') }}</a>
            </li>
            <li><a class="dropdown-item" href="/histopathology">{{ __('homepage.department_histopathology') }}</a>
            </li>
        </ul>
    </li>
    {{-- Laboratory Services end --}}

    {{-- Transfusion Services start --}}
    <li class="dropdown dropdown-submenu dropright">
        <a class="dropdown-item dropdown-toggle" id="dropdown0301" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">{{ __('homepage.department_transfusionServices') }}</a>
        <ul class="dropdown-menu" aria-labelledby="dropdown0301">
            <li><a class="dropdown-item"
                    href="/transfusionServices">{{ __('homepage.department_allTransfusionServices') }}</a>
            </li>
            <li><a class="dropdown-item"
                    href="/bloodTransfusionsServices">{{ __('homepage.department_bloodTransfusionsServices') }}</a>
            </li>
            <li><a class="dropdown-item" href="/bloodBank">{{ __('homepage.department_bloodBank') }}</a></li>
        </ul>
    </li>
    {{-- Transfusion Services end --}}

    {{-- Professions Allied to Medicine start --}}
    <li class="dropdown dropdown-submenu dropright">
        <a class="dropdown-item dropdown-toggle" id="dropdown0301" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">{{ __('homepage.department_professionsAlliedMedicine') }}</a>
        <ul class="dropdown-menu" aria-labelledby="dropdown0301">
            <li><a class="dropdown-item"
                    href="/professionsAlliedToMedicine">{{ __('homepage.department_allProfessionsAlliedMedicine') }}</a>
            </li>
            <li><a class="dropdown-item" href="/ambulance">{{ __('homepage.department_ambulance') }}</a></li>
            <li><a class="dropdown-item" href="/dietetics">{{ __('homepage.department_dietetics') }}</a></li>
            <li><a class="dropdown-item" href="/physiotherapy">{{ __('homepage.department_physiotherapy') }}</a></li>
        </ul>
    </li>
    {{-- Professions Allied to Medicine end --}}

    {{-- Emergency Department start --}}
    <li><a class="dropdown-item" href="/emergency">{{ __('homepage.department_emergencyDepartment') }}</a>
    </li>
    {{-- Emergency Department start --}}

    {{-- Pharmacy start --}}
    <li><a class="dropdown-item" href="/pharmacy">{{ __('homepage.department_pharmacy') }}</a></li>
    {{-- Pharmacy end --}}
</ul>
</li>
{{-- Departments End --}}

{{-- Events Start --}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">{{ __('homepage.events_menu') }} <i class="icofont-thin-down"></i></a>
    <ul class="dropdown-menu" aria-labelledby="dropdown02">
        <li><a class="dropdown-item" href="/allEvents">{{ __('homepage.events_allEvents') }}</a></li>
        <li><a class="dropdown-item" href="/hospitalEvents">{{ __('homepage.events_hospitalEvents') }}</a></li>
        <li><a class="dropdown-item" href="/healthCamp">{{ __('homepage.events_healthCamp') }}</a>
        </li>
        <li><a class="dropdown-item" href="#">{{ __('homepage.events_trainingProgram') }}</a></li>
    </ul>
</li>
{{-- Events end --}}

{{-- Media Coverage Start --}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">{{ __('homepage.media_menu') }} <i class="icofont-thin-down"></i></a>
    <ul class="dropdown-menu" aria-labelledby="dropdown02">
        <li><a class="dropdown-item" href="/allMediaCoverage">{{ __('homepage.media_menu_allMediaCoverage') }}</a>
        </li>
        <li><a class="dropdown-item" href="/doctorsDesk">{{ __('homepage.media_menu_doctorDesk') }}</a></li>
        <li><a class="dropdown-item" href="/printMedia">{{ __('homepage.media_menu_printMedia') }}</a>
        </li>
        <li><a class="dropdown-item" href="/digitalMedia">{{ __('homepage.media_menu_digitalMedia') }}</a></li>
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
