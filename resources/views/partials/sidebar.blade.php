<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <!-- Start Quality - Visible for 'Quality' and 'Admin' -->
    @if (auth()->user()->role == 'Quality' || auth()->user()->role == 'Admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-Quality" href="{{ route('qualities.index') }}">
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

    <!-- Start Contact - Visible for 'quality' role and 'admin' -->
    @if (auth()->user()->role == 'Quality' || auth()->user()->role == 'Admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-Contact" href="{{ route('contacts.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>Admin Department</span>
            </a>
        </li>
    @endif
    <!-- End Contact -->

    <!-- User Manager and Log links only for 'admin' -->
    @if (auth()->user()->role == 'Admin')
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-userManager" href="{{ route('users.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>User Manager</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-log" href="#">
                <i class="bi bi-menu-button-wide"></i><span>User Log</span>
            </a>
        </li>
    @endif
    <!-- End User Manager and User Log Nav -->
</ul>
