<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->


    <!-- Start Quality -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-Quality" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Quality Department</span>
        </a>
    </li>
    <!-- End Quality -->

    <!-- Start HR -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-HR" href="#">
            <i class="bi bi-menu-button-wide"></i><span>HR Department</span>
        </a>
    </li>
    <!-- End HR -->

    <!-- Start User Manager Nav -->
    @if (auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-userManager" href="{{ route('users.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>User Manager</span>
            </a>
        </li>
    @endif
    <!-- End User Manager Nav -->

    <!-- Start User Log Nav -->
    @if (auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-log" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Log</span>
            </a>
        </li>
    @endif
    <!-- End User Log Nav -->

</ul>