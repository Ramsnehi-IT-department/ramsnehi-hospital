<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <!-- Start Quality - Visible for 'quality' role and 'admin' -->
    @if (auth()->user()->role == 'quality' || auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-Quality" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Quality Department</span>
            </a>
        </li>
    @endif
    <!-- End Quality -->

    <!-- Start HR - Visible for 'hr' role and 'admin' -->
    @if (auth()->user()->role == 'Hr' || auth()->user()->role == 'Quality' || auth()->user()->role == 'Admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-HR" href="{{ route('careers.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>HR Department</span>
            </a>
        </li>
    @endif
    <!-- End HR -->

    <!-- Patient Success stories start -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-patient" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Patient Success Stories</span>
        </a>
    </li>
    <!-- Patient Success stories end -->


    <!-- Events & Initiatives start -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-events" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Events & Initiatives</span>
        </a>
    </li>
    <!-- Events & Initiatives end -->

    <!-- User Manager and Log links only for 'admin' -->
    @if (auth()->user()->role == 'Admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-userManager" href="{{ route('users.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>User Manager</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-log" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Log</span>
            </a>
        </li>
    @endif
    <!-- End User Manager and User Log Nav -->
</ul>
