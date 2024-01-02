<header>

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
