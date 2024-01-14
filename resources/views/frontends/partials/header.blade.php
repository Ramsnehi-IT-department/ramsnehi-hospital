<header>

    <style>
        .elementor-animation-grow {
            transition: transform 0.3s ease-in-out;
            z-index: 1;
            /* Ensure the logo is above the slider */
        }

        .elementor-animation-grow:hover {
            transform: scale(2.2);
        }

    </style>

    {{-- header-top-bar start --}}
    <div class="header-top-bar">
        <div class="container">

            {{-- topnavbar include start --}}
            @include('frontends.partials.topnavbar')
            {{-- topnavbar include end --}}

        </div>
    </div>
    {{-- header-top-bar end --}}

    {{-- header nav bar start --}}
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" alt="Ramsnehi-Logo" class="img-fluid">
            </a>

            <img width="50" height="50" src="images/NABH.jpg"
                class="elementor-animation-grow attachment-thumbnail size-thumbnail ls-is-cached lazyloaded"
                alt="NABH Accreditation" decoding="async">

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">

                {{-- navbar include start --}}
                @include('frontends.partials.navbar')
                {{-- navbar include end --}}

            </div>
        </div>
    </nav>
    {{-- header nav bar end --}}

</header>
