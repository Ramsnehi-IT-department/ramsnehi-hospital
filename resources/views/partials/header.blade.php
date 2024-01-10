<div class="d-flex align-items-center justify-content-between">
    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <img src="admin-assets/img/logo.png" alt="" width="200">
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

{{-- <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
</div><!-- End Search Bar --> --}}

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('/storage/' . auth()->user()->image) }}" alt="Student" width="50" height="50" class="rounded-circle" />
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('users.edit', ['id' => Auth::user()->id]) }}">
                <i class="bi bi-gear"></i>
                <span>Change Password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    <button type="submit" class="btn btn-link">Logout</button>
                </form>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
